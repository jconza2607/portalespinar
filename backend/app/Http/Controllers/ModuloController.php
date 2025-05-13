<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuloController extends Controller
{
    public function index()
    {
        return view('modulo.index');
    }

    public function edit()
    {
        return view('modulo.edit');
    }
}
