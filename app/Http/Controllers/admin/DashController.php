<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard.index');
    }
}
