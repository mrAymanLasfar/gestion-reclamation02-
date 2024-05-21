<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperateurController extends Controller
{
    public function creerreclamation()
    {
        return view('operateur.creerreclamation');
    }

}
