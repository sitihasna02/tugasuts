<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function tugas1()
    {
        return view('stmik');
    }


    public function tugas2()
    {
        return view('registrasi');
    }
}
