<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EkstracurricularController extends Controller
{
    public function index()
    {
        return view('contents.ekskul');
    }
}
