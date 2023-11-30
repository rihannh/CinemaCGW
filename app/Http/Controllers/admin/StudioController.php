<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Studio;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studios = Studio::all();
        return view('pages.admin.studio.index', compact('studios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.studio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'studio_name' => 'required',
            'type' => 'required',
            'amount' => 'required|integer|min:0',
            'price' => 'required|integer|min:0',
        ]);

        Studio::create([
            'studio_name' => $request->studio_name,
            'type' => $request->type,
            'amount' => $request->amount,
            'price' => $request->price,
        ]);

        return redirect()->route('studio.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $studio = Studio::findOrFail($id);
        return view('pages.admin.studio.show', compact('studio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $studio = Studio::findOrFail($id);
        return view('pages.admin.studio.edit', compact('studio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'studio_name' => 'required',
            'type' => 'required',
            'amount' => 'required|integer|min:0',
            'price' => 'required|integer|min:0',

        ]);

        $studio = Studio::findOrFail($id);

        $studio->update([
            'studio_name' => $request->studio_name,
            'type' => $request->type,
            'amount' => $request->amount,
            'price' => $request->price,

        ]);

        return redirect()->route('studio.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $studio = Studio::findOrFail($id);
        $studio->delete();

        return redirect()->route('studio.index');
    }
}
