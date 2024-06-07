<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperviseurController extends Controller
{
    public function traitereclamation()
    {
        return view('superviseur.traiterreclamation');
    }
}
