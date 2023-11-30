<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\Detail;
use App\Models\Schedule;
use App\Models\SeatSelection;
use Illuminate\Validation\Rule;
use App\Models\User;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $id)
    {
        $items = Transaction::with([
            'details', 'schedules', 'user'
        ])->findOrFail($id);

        return view('pages.home.checkout', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function proccess(Request $request, $id)
    {
        $schedule = Schedule::findOrFail($id);

        // Ambil array kursi dari request
        $seats = $request->input('seats');

        // Validasi kursi
        $request->validate([
            'seats' => [
                'required',
                'array',
                'min:1',
                'distinct',
                Rule::unique('seat_selections', 'seat_id')->where(function ($query) use ($id) {
                    return $query->where('schedule_id', $id);
                }),
            ],
        ]);



        // hitung jumlah kursi
        $amount = count($seats);


        $transaction = Transaction::create([
            'schedule_id' => $id,
            'user_id' => Auth::user()->id,
            'amount' => $amount,
            'total' => $schedule->price * $amount,
            'status' => 'PENDING',
        ]);

        // Buat entri di tabel SeatSelection untuk setiap kursi
        foreach ($seats as $seat) {
            SeatSelection::create([
                'transaction_id' => $transaction->id,
                'seat_id' => $seat,
                'schedule_id' => $id,
            ]);
        }

        Detail::create([
            'transaction_id' => $transaction->id,
        ]);

        return redirect()->route('checkout', $transaction->id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function remove(Request $request, $detail_id)
    {
        $item = Detail::findOrFail($detail_id);
        $transaction = Transaction::with([
            'details', 'schedules', 'user'
        ])->findOrFail($item->transactions_id);

        $transaction->total -= $transaction->schedules->price;
        $transaction->save();

        $item->delete();

        return redirect()->route('checkout', $item->transactions_id);
    }

    /**
     * Display the specified resource.
     */
    public function create(string $id)
    {
        //
    }
    public function success(Request $request, $id)
    {
        $transaction = Transaction::with(['details', 'schedules', 'user'])
            ->findOrFail($id);
        $transaction->status = 'SUCCESS';

        $transaction->save();

        // Mail::to($transaction->user)->send(
        //     new TransactionSuccess($transaction)
        // );
        return redirect()->route('home')->with(
            'success',
            'Yeay, Your Payment is Confirmed'
        );
    }
}
