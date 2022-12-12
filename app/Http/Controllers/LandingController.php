<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $year = date('Y');
        return view('landing', compact('year'));
    }

    public function filter(Request $request)
    {
        $year = $request->year;
        return view('landing', compact('year'));
    }
}
