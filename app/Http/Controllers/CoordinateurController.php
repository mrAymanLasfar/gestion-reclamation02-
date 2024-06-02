<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coordinateur;
use Spatie\Permission\Models\Role;

class CoordinateurController extends Controller 
{
    public function index()
    {
        $coordinateurs = Coordinateur::all();
        return view('coordinateurs.index', compact('coordinateurs'));
    }

    public function show(Coordinateur $coordinateur)
    {
        return view('coordinateurs.show', ['coordinateur' => $coordinateur]);
    }

    public function create()
    {
        return view('coordinateurs.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'id_coordinateur' => ['required'],
            'nom_coordinateur' => ['required', 'min:3'],
            'email_coordinateur' => ['required', 'min:3'],
            'password_coordinateur' => ['required', 'min:3'],
            
        ]);

        // Coordinateur::create([
        //     'id_coordinateur' => $request->id_coordinateur,
        //     'nom_coordinateur' => $request->nom_coordinateur,
        //     'email_coordinateur' => $request->email_coordinateur,
        //     'password_coordinateur' => $request->password_coordinateur,
            
        // ]);

        $coordinateur = Coordinateur::create([
            'id_coordinateur' => $request->id_coordinateur,
            'nom_coordinateur' => $request->nom_coordinateur,
            'email_coordinateur' => $request->email_coordinateur,
            'password_coordinateur' => $request->password_coordinateur,
            
        ]);

        $role = Role::findByName('coordinateur');
        $coordinateur->assignRole($role);

        // return redirect()->route('coordinateurs.index');
        return redirect()->route('creercoordinateur');
    }

    public function edit(Coordinateur $coordinateur)
    {
        return view('coordinateurs.edit', ['coordinateur' => $coordinateur]);
    }

    public function update(Request $request, Coordinateur $coordinateur)
    {
        $request->validate([
            'id_coordinateur' => ['required'],
            'nom_coordinateur' => ['required', 'min:3'],
            'email_coordinateur' => ['required', 'min:3'],
            'password_coordinateur' => ['required', 'min:3'],
        ]);

        $coordinateur->update([
            'id_coordinateur' => $request->id_coordinateur,
            'nom_coordinateur' => $request->nom_coordinateur,
            'email_coordinateur' => $request->email_coordinateur,
            'password_coordinateur' => $request->password_coordinateur,
        ]);

        return redirect()->route('coordinateurs.show', $coordinateur->id_coordinateur);
        // return redirect()->route('coordinateurs.show', $coordinateur);
        // return redirect()->route('coordinateurs.show', ['coordinateur' => $coordinateur]);
        // return redirect()->route('coordinateurs.show', $coordinateur->id_coordinateur);
    }

    public function destroy($id_coordinateur)
    {
        $coordinateur = Coordinateur::find($id_coordinateur);
        $coordinateur->delete();

        Coordinateur::where('id_coordinateur', $id_coordinateur)->delete();

        //2- redirect to posts.index
        // return to_route('coordinateurs.index');
        return redirect()->route('creercoordinateur');
    }

    public function createCoordinateur()
    {
        $coordinateurs = Coordinateur::all();
        return view('admin.creercoordinateur', compact('coordinateurs'));
    }



    public function assignRoleToCoordinateur($coordinateurId, $roleName)
    {
        $coordinateur = Coordinateur::findOrFail($coordinateurId);
        $role = Role::findByName($roleName);

        $coordinateur->assignRole($role);
    }







    

    public function creeroperateur()
    {
        return view('coordinateur.creeroperateur');
    }

    public function creersuperviseur()
    {
        return view('coordinateur.creersuperviseur');
    }
}
