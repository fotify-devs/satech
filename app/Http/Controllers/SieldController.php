<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SieldController extends Controller
{
    /**
     * Write code on Method
     *
     * @return \response()
     */
    public function dashboard()
    {
        return response()->view('Shield.dashboard');
    }
}