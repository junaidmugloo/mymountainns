<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MySEOController extends Controller
{
    public function index()
    {
        return view('myseo.index');
    }
}
