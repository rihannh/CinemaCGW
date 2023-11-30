<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //* get post

        $films = Film::all();
        return view('pages.admin.film.index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.film.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //* validate
        $this->validate($request, [
            'film_name' => 'required',
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'genre' => 'required',
            'duration' => 'required',
            'age' => 'required|integer|min:0',
            'synopsis' => 'required',
            'director' => 'required',
        ]);

        //* upload image
        $image = $request->file('image');
        $image->storeAs('public/films', $image->hashName());

        //* create
        Film::create([
            'film_name' => $request->film_name,
            'image'     => $image->hashName(),
            'genre'     => $request->genre,
            'duration'  => $request->duration,
            'age'       => $request->age,
            'synopsis'  => $request->synopsis,
            'director'  => $request->director,
        ]);

        return redirect()->route('film.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $film = Film::findOrFail($id);
        return view('pages.admin.film.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $film = Film::findOrFail($id);
        return view('pages.admin.film.edit', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //* validate
        $this->validate($request, [
            'film_name' => 'required',
            'image'     => 'image|mimes:jpeg,jpg,png|max:2048',
            'genre' => 'required',
            'duration' => 'required',
            'age' => 'required|integer|min:0',
            'synopsis' => 'required',
            'director' => 'required',
        ]);

        $film = Film::findOrFail($id);
        //* check image
        if ($request->hasFile('image')) {

            //* upload
            $image = $request->file('image');
            $image->storeAs('public/films', $image->hashName());

            //* delete
            Storage::delete('public/films/' . $film->image);

            //* update
            $film->update([
                'film_name' => $request->film_name,
                'image'     => $image->hashName(),
                'genre'     => $request->genre,
                'duration'  => $request->duration,
                'age'       => $request->age,
                'synopsis'  => $request->synopsis,
                'director'  => $request->director,
            ]);
        } else {

            //* without image
            $film->update([
                'film_name' => $request->film_name,
                'genre'     => $request->genre,
                'duration'  => $request->duration,
                'age'       => $request->age,
                'synopsis'  => $request->synopsis,
                'director'  => $request->director,
            ]);
        }

        return redirect()->route('film.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $film = Film::findOrFail($id);
        //* delete image
        Storage::delete('public/films/' . $film->image);

        //* delete all
        $film->delete();
        return redirect()->route('film.index');
    }
}
