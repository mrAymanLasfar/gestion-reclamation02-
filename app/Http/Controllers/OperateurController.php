<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Log; // Import at the top of the file
use Spatie\Permission\Exceptions\RoleDoesNotExist;



class OperateurController extends Controller 
{
    public function index()
    {
        $operateurs = User::role('operateur')->get();
        return view('operateurs.index', compact('operateurs'));
    }

    public function show(User $operateur)
    {
        return view('operateurs.show', ['operateur' => $operateur]);
    }

    public function create()
    {
        return view('operateurs.create');
    }


    

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:6'],
        ]);

        $operateur = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $role = Role::findByName('operateur');
        $operateur->assignRole($role);

        return redirect()->route('operateurs.index');
    }

    public function edit(User $operateur)
    {
        return view('operateurs.edit', ['operateur' => $operateur]);
    }

    public function update(Request $request, User $operateur)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email,' . $operateur->id],
            'password' => ['nullable', 'min:6'],
        ]);

        $operateur->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $operateur->password,
        ]);

        return redirect()->route('operateurs.show', $operateur->id);
    }

    public function destroy(User $operateur)
    {
        $operateur->delete();
        return redirect()->route('coordinateurs.creeroperateur');
    }

    public function createOperateur()
    {
        $operateurs = User::role('operateur')->get();
        return view('coordinateurs.creeroperateur', compact('operateurs'));
    }

    public function assignRoleToOperateur($operateurId, $roleName)
    {
        $operateur = User::findOrFail($operateurId);
        $role = Role::findByName($roleName);
        $operateur->assignRole($role);
    }

    public function creeroperateur()
    {
        return view('operateur.creeroperateur');
    }

    public function creersuperviseur()
    {
        return view('operateur.creersuperviseur');
    }
}




