<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoordinateurController extends Controller
{
    public function creeroperateur()
    {
        return view('coordinateur.creeroperateur');
    }

    public function creersuperviseur()
    {
        return view('coordinateur.creersuperviseur');
    }
}
