<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function creercoordinateur()
    {
        return view('admin.creercoordinateur');
    }

    public function creerequipe()
    {
        return view('admin.creerequipe');
    }
}
