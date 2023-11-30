<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SeatSelection;

class SeatSelectionController extends Controller
{
    public function index()
    {
        $seatSelections = SeatSelection::all();

        return response()->json($seatSelections);
    }

    public function show($id)
    {
        $seatSelection = SeatSelection::findOrFail($id);

        return response()->json($seatSelection);
    }

    public function store(Request $request)
    {
        $request->validate([
            'transaction_id' => 'required',
            'seat_id' => 'required',
            'schedule_id' => 'required',
        ]);

        $seatSelection = SeatSelection::create($request->all());

        return response()->json($seatSelection, 201);
    }

    public function update(Request $request, $id)
    {
        $seatSelection = SeatSelection::findOrFail($id);
        $seatSelection->update($request->all());

        return response()->json($seatSelection);
    }

    public function destroy($id)
    {
        $seatSelection = SeatSelection::findOrFail($id);
        $seatSelection->delete();

        return response()->json(null, 204);
    }
}
