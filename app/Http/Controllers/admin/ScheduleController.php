<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Film;
use App\Models\Studio;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = Schedule::all();
        return view('pages.admin.schedule.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $films = Film::all();
        $studios = Studio::all();
        return view('pages.admin.schedule.create', compact('films', 'studios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'film_id' => 'required',
            'cinema_id' => 'required',
            'amount' => 'required|integer|min:0',
            'price' => 'required|integer|min:0',
            'time' => 'required|date_format:H:i',
            'date' => 'required|date',
        ]);

        Schedule::create([
            'film_id' => $request->film_id,
            'cinema_id' => $request->cinema_id,
            'amount' => $request->amount,
            'price' => $request->price,
            'time' => $request->time,
            'date' => $request->date,
        ]);

        return redirect()->route('schedule.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $schedule = Schedule::findOrFail($id);
        return view('pages.home.detailFilm', compact('schedule'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $schedule = Schedule::findOrFail($id);
        $films = Film::all();
        $studios = Studio::all();
        return view('pages.admin.schedule.edit', compact('schedule', 'films', 'studios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'film_id' => 'required',
            'cinema_id' => 'required',
            'amount' => 'required|integer|min:0',
            'price' => 'required|integer|min:0',
            'time' => 'required|date_format:H:i',
            'date' => 'required|date',
        ]);

        $schedule = Schedule::findOrFail($id);

        $schedule->update([
            'film_id' => $request->film_id,
            'cinema_id' => $request->cinema_id,
            'amount' => $request->amount,
            'price' => $request->amount,
            'time' => $request,
            'date' => $request,
        ]);

        return redirect()->route('schedule.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();

        return redirect()->route('schedule.index');
    }
}
