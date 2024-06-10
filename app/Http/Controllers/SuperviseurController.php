<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
class SuperviseurController extends Controller
{
    public function index()
    {
        $superviseurs = User::role('superviseur')->get();
        return view('superviseurs.index', compact('superviseurs'));
    }

    public function show(User $superviseur)
    {
        return view('superviseurs.show', ['superviseur' => $superviseur]);
    }

    public function create()
    {
        return view('superviseurs.create');
    }


    

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:6'],
        ]);

        $superviseur = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $role = Role::findByName('superviseur');
        $superviseur->assignRole($role);
        
        return redirect()->route('creersuperviseur');
        // return redirect()->route('superviseurs.index');
    }

    public function edit(User $superviseur)
    {
        return view('superviseurs.edit', ['superviseur' => $superviseur]);
    }

    public function update(Request $request, User $superviseur)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email,' . $superviseur->id],
            'password' => ['nullable', 'min:6'],
        ]);

        $superviseur->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $superviseur->password,
        ]);

        return redirect()->route('superviseurs.show', $superviseur->id);
    }

    public function destroy(User $superviseur)
    {
        $superviseur->delete();
        return redirect()->route('creersuperviseur');
    }

    public function createSuperviseur()
    {
        $superviseurs = User::role('superviseur')->get();
        return view('coordinateurs.creersuperviseur', compact('superviseurs'));
    }

    public function assignRoleToOperateur($operateurId, $roleName)
    {
        $superviseur = User::findOrFail($operateurId);
        $role = Role::findByName($roleName);
        $superviseur->assignRole($role);
    }


    public function creeroperateur()
    {
        return view('creeroperateur');
    }

    public function creersuperviseur()
    {
        return view('creersuperviseur');
    }



}
