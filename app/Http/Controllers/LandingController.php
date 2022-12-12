<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing');
    }
}
