<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function showInicio()
    {
        return view('inicio');
    }
}
