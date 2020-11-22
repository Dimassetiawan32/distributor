<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        return view('pesanan.index');
    }

    public function create()
    {
        return view('pesanan.create');
    }
}
