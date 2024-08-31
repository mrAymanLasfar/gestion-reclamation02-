<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Service;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
   // ProduitController.php
public function show($id)
{
    $produit = Produit::findOrFail($id);
    return view('produits.show', compact('produit'));
}
}
