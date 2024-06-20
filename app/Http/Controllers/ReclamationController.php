<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reclamation;
class ReclamationController extends Controller
{
    public function index()
    {
         
         $reclamations = Reclamation::all();

        return view('reclamations.creerreclamation', compact('reclamations'));
    }

    public function show(Reclamation $reclamation)
    {
        return view('reclamations.show', ['reclamation' => $reclamation]);
    }

    public function create()
    {
        return view('reclamations.create');
    }

    

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
        ]);


        return redirect()->route('creercoordinateur');
    }




    

    public function edit(Reclamation $reclamation)
    {
        return view('coordinateurs.edit', ['coordinateur' => $reclamation]);
    }

    public function update(Request $request, Reclamation $reclamation)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email,' . $reclamation->id],
            'password' => ['nullable', 'min:6'],
        ]);

        $reclamation->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $reclamation->password,
        ]);

        return redirect()->route('coordinateurs.show', $reclamation->id);
    }

    public function destroy(Reclamation $reclamation)
    {
        $reclamation->delete();
        return redirect()->route('coordinateurs.index');
    }

    public function createCoordinateur()
    {
       
      $role = Role::where('name', 'coordinateur')->first();

      // Définir la variable $coordinateurs
      $coordinateurs = [];
  
      if ($role) {
          // Si le rôle existe, récupérez les utilisateurs associés
          $coordinateurs = $role->users;
      }
  
      // Passer la variable $coordinateurs à la vue
      return view('admin.creercoordinateur', compact('coordinateurs'));
    }

    public function assignRoleToCoordinateur($coordinateurId, $roleName)
    {
        $coordinateur = Reclamation::findOrFail($coordinateurId);
        $coordinateur->assignRole($roleName);
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
