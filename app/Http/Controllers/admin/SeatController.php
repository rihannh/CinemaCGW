<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seat;

class SeatController extends Controller
{
    public function index()
    {
        $seats = Seat::all();

        return response()->json($seats);
    }

    public function show($id)
    {
        $seat = Seat::findOrFail($id);

        return response()->json($seat);
    }

    public function store(Request $request)
    {
        $request->validate([
            'studio_id' => 'required',
            'row' => 'required',
            'number' => 'required',
        ]);

        $seat = Seat::create($request->all());

        return response()->json($seat, 201);
    }

    public function update(Request $request, $id)
    {
        $seat = Seat::findOrFail($id);
        $seat->update($request->all());

        return response()->json($seat);
    }

    public function destroy($id)
    {
        $seat = Seat::findOrFail($id);
        $seat->delete();

        return response()->json(null, 204);
    }
}
