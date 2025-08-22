<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ventacontroller extends Controller
{
    public function index()
    {
        return view('venta.index');
    }

    public function create(){
        return view ('venta.create');
    }
}
