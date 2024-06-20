<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reclamation;
class ReclamationController extends Controller
{
    public function index()
    {
        $reclamations = Reclamation::all();
        // dd($reclamations);
        return view('reclamations.creerreclamation', compact('reclamations'));
    }


    public function show(Reclamation $reclamation)
{
    return view('reclamations.show', ['reclamation' => $reclamation]);
}

public function edit(Reclamation $reclamation)
{
    return view('reclamations.edit', ['reclamation' => $reclamation]);
}

public function destroy(Reclamation $reclamation)
{
    $reclamation->delete();
    return redirect()->route('reclamations.index');
}



    // public function show(Reclamation $reclamation)
    // {
    //     return view('reclamations.show', ['reclamation' => $reclamation]);
    // }

    public function create()
    {
        return view('reclamations.create');
    }

    

    public function store(Request $request)
    {
        $request->validate([
            'nom_reclamations' => 'required|min:3',
        ]); 	
        Reclamation::create([
            'nom_reclamations' => $request->nom_reclamations,
        ]);

        return redirect()->route('reclamations.index');
    }





    // public function edit(Reclamation $reclamation)
    // {
    //     return view('reclamations.edit', ['reclamation' => $reclamation]);
    // }

    public function update(Request $request, Reclamation $reclamation)
    {
        $request->validate([
            'nom_reclamations' => ['required', 'min:3'],

        ]);

        $reclamation->update([
            'nom_reclamations' => $request->nom_reclamations,
        ]);

        return redirect()->route('reclamations.show', $reclamation->id);
    }

    // public function destroy(Reclamation $reclamation)
    // {
    //     $reclamation->delete();
    //     return redirect()->route('coordinateurs.index');
    // }

    public function createReclamation()
    {
       
        $reclamations = Reclamation::all();
        return view('reclamations.creerreclamation', compact('reclamations'));
    }


}
