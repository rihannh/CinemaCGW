<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Studio;
use App\Models\Schedule;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $films = Film::take(4)->get();
        return view('pages.home.index', compact('films'));
    }

    public function show($id)
    {
        $film = Film::with(['films.studio'])->findOrFail($id);

        return view('pages.home.detailFilm', compact('film'));
    }

    public function filmPage()
    {
        $films = Film::all();
        return view('pages.home.films', compact('films'));
    }

    public function detailPage()
    {
        return view('pages.home.detail');
    }
}
