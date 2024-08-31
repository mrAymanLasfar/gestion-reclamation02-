<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // جلب البيانات من النماذج
        $produits = Produit::all();
        $services = Service::all();

        // إرسال البيانات للـ View
        return view('home.index', compact('produits', 'services'));
    }
}
