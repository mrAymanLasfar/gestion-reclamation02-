<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class CoordinateurController extends Controller 
{
    public function index()
    {
         // Fetch users with the 'coordinateur' role using Eloquent
         $coordinateurs = User::whereHas('roles', function ($query) {
            $query->where('name', 'coordinateur');
        })->get();

        return view('admin.creercoordinateur', compact('coordinateurs'));
    }

    public function show(User $coordinateur)
    {
        return view('coordinateurs.show', ['coordinateur' => $coordinateur]);
    }

    public function create()
    {
        return view('coordinateurs.create');
    }



    // public function store(Request $request)
    // {
    //     // Validate the request data
    //     $request->validate([
    //         'name' => ['required', 'min:3'],
    //         'email' => ['required', 'email', 'unique:users,email'],
    //         'password' => ['required', 'min:6'],
    //     ]);

    //     // Check if the role 'coordinateur' exists
    //     if (!Role::where('name', 'coordinateur')->exists()) {
    //         return redirect()->back()->withErrors(['Role "coordinateur" does not exist.']);
    //     }

    //     // Create the user
    //     $coordinateur = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => bcrypt($request->password),
    //     ]);

    //     // Assign the role to the user
    //     $coordinateur->assignRole('coordinateur');

    //     // Ensure the role assignment was successful
    //     if (!$coordinateur->hasRole('coordinateur')) {
    //         return redirect()->back()->withErrors(['Failed to assign role "coordinateur".']);
    //     }

    //     // Redirect to the 'creercoordinateur' route
    //     return redirect()->route('creercoordinateur');
    // }


    

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:6'],
        ]);

        $coordinateur = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $coordinateur->assignRole('coordinateur');

        return redirect()->route('creercoordinateur');
    }




    

    public function edit(User $coordinateur)
    {
        return view('coordinateurs.edit', ['coordinateur' => $coordinateur]);
    }

    public function update(Request $request, User $coordinateur)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email,' . $coordinateur->id],
            'password' => ['nullable', 'min:6'],
        ]);

        $coordinateur->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $coordinateur->password,
        ]);

        return redirect()->route('coordinateurs.show', $coordinateur->id);
    }

    public function destroy(User $coordinateur)
    {
        $coordinateur->delete();
        return redirect()->route('coordinateurs.index');
    }

    public function createCoordinateur()
    {
       // $coordinateurs = User::Role('coordinateur')->get();
       // return view('admin.creercoordinateur', compact('coordinateurs'));
      // $coordinateurs = Role::where('name', 'coordinateur')->first()->users;
      // return view('admin.creercoordinateur', compact('coordinateurs'));


      // Recherchez le rôle "coordinateur"
    

   // $role = Role::where('name', 'coordinateur')->first();
    //return view('admin.creercoordinateur', compact('coordinateurs'));

    
      // Recherchez le rôle "coordinateur"
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
        $coordinateur = User::findOrFail($coordinateurId);
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


















// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\User;
// use Spatie\Permission\Models\Role;

// class CoordinateurController extends Controller 
// {
//     public function index()
//     {
//         $coordinateurs = User::role('coordinateur')->get();
//         return view('coordinateurs.index', compact('coordinateurs'));
//     }

//     public function show(User $coordinateur)
//     {
//         return view('coordinateurs.show', ['coordinateur' => $coordinateur]);
//     }

//     public function create()
//     {
//         return view('coordinateurs.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'name' => ['required', 'min:3'],
//             'email' => ['required', 'email', 'unique:users,email'],
//             'password' => ['required', 'min:6'],
//         ]);

//         $coordinateur = User::create([
//             'name' => $request->name,
//             'email' => $request->email,
//             'password' => bcrypt($request->password),
//         ]);

//         $role = Role::findByName('coordinateur');
//         $coordinateur->assignRole($role);

//         return redirect()->route('creercoordinateur');
//     }

//     public function edit(User $coordinateur)
//     {
//         return view('coordinateurs.edit', ['coordinateur' => $coordinateur]);
//     }

//     public function update(Request $request, User $coordinateur)
//     {
//         $request->validate([
//             'name' => ['required', 'min:3'],
//             'email' => ['required', 'email', 'unique:users,email,' . $coordinateur->id],
//             'password' => ['nullable', 'min:6'],
//         ]);

//         $coordinateur->update([
//             'name' => $request->name,
//             'email' => $request->email,
//             'password' => $request->password ? bcrypt($request->password) : $coordinateur->password,
//         ]);

//         return redirect()->route('coordinateurs.show', $coordinateur->id);
//     }

//     public function destroy(User $coordinateur)
//     {
//         $coordinateur->delete();
//         return redirect()->route('coordinateurs.index');
//     }

//     public function createCoordinateur()
//     {
//         $coordinateurs = User::role('coordinateur')->get();
//         return view('admin.creercoordinateur', compact('coordinateurs'));
//     }

//     public function assignRoleToCoordinateur($coordinateurId, $roleName)
//     {
//         $coordinateur = User::findOrFail($coordinateurId);
//         $role = Role::findByName($roleName);
//         $coordinateur->assignRole($role);
//     }

//     public function creeroperateur()
//     {
//         return view('coordinateur.creeroperateur');
//     }

//     public function creersuperviseur()
//     {
//         return view('coordinateur.creersuperviseur');
//     }
// }































// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\User;
// use Spatie\Permission\Models\Role;

// class CoordinateurController extends Controller 
// {
//     public function index()
//     {
//         $coordinateurs = User::role('coordinateur')->get();
//         return view('coordinateurs.index', compact('coordinateurs'));
//     }

//     public function show(User $coordinateur)
//     {
//         return view('coordinateurs.show', ['coordinateur' => $coordinateur]);
//     }

//     public function create()
//     {
//         return view('coordinateurs.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'name' => ['required', 'min:3'],
//             'email' => ['required', 'email', 'unique:users,email'],
//             'password' => ['required', 'min:6'],
//         ]);

//         $coordinateur = User::create([
//             'name' => $request->name,
//             'email' => $request->email,
//             'password' => bcrypt($request->password),
//         ]);

//         $role = Role::findByName('coordinateur');
//         $coordinateur->assignRole($role);

//         return redirect()->route('coordinateurs.index');
//     }

//     public function edit(User $coordinateur)
//     {
//         return view('coordinateurs.edit', ['coordinateur' => $coordinateur]);
//     }

//     public function update(Request $request, User $coordinateur)
//     {
//         $request->validate([
//             'name' => ['required', 'min:3'],
//             'email' => ['required', 'email', 'unique:users,email,' . $coordinateur->id],
//             'password' => ['nullable', 'min:6'],
//         ]);

//         $coordinateur->update([
//             'name' => $request->name,
//             'email' => $request->email,
//             'password' => $request->password ? bcrypt($request->password) : $coordinateur->password,
//         ]);

//         return redirect()->route('coordinateurs.show', $coordinateur);
//     }

//     public function destroy(User $coordinateur)
//     {
//         $coordinateur->delete();
//         return redirect()->route('coordinateurs.index');
//     }

//     public function createCoordinateur()
//     {
//         $coordinateurs = User::role('coordinateur')->get();
//         return view('admin.creercoordinateur', compact('coordinateurs'));
//     }

//     public function assignRoleToCoordinateur($coordinateurId, $roleName)
//     {
//         $coordinateur = User::findOrFail($coordinateurId);
//         $role = Role::findByName($roleName);
//         $coordinateur->assignRole($role);
//     }

//     public function creeroperateur()
//     {
//         return view('coordinateur.creeroperateur');
//     }

//     public function creersuperviseur()
//     {
//         return view('coordinateur.creersuperviseur');
//     }
// }
































// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\User;
// use Spatie\Permission\Models\Role;

// class CoordinateurController extends Controller 
// {
//     public function index()
//     {
//         $coordinateurs = User::role('coordinateur')->get();
//         return view('coordinateurs.index', compact('coordinateurs'));
//     }

//     public function show(User $coordinateur)
//     {
//         return view('coordinateurs.show', ['coordinateur' => $coordinateur]);
//     }

//     public function create()
//     {
//         return view('coordinateurs.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'name' => ['required', 'min:3'],
//             'email' => ['required', 'email', 'unique:users,email'],
//             'password' => ['required', 'min:6'],
//         ]);

//         $coordinateur = User::create([
//             'name' => $request->name,
//             'email' => $request->email,
//             'password' => bcrypt($request->password),
//         ]);

//         $role = Role::where('name', 'coordinateur')->first();
//         $coordinateur->assignRole($role);

//         return redirect()->route('coordinateurs.index');
//     }

//     public function edit(User $coordinateur)
//     {
//         return view('coordinateurs.edit', ['coordinateur' => $coordinateur]);
//     }

//     public function update(Request $request, User $coordinateur)
//     {
//         $request->validate([
//             'name' => ['required', 'min:3'],
//             'email' => ['required', 'email', 'unique:users,email,' . $coordinateur->id],
//             'password' => ['nullable', 'min:6'],
//         ]);

//         $coordinateur->update([
//             'name' => $request->name,
//             'email' => $request->email,
//             'password' => $request->password ? bcrypt($request->password) : $coordinateur->password,
//         ]);

//         return redirect()->route('coordinateurs.show', $coordinateur);
//     }

//     public function destroy(User $coordinateur)
//     {
//         $coordinateur->delete();
//         return redirect()->route('coordinateurs.index');
//     }

//     public function createCoordinateur()
//     {
//         $coordinateurs = User::role('coordinateur')->get();
//         return view('admin.creercoordinateur', compact('coordinateurs'));
//     }

//     public function assignRoleToCoordinateur($coordinateurId, $roleName)
//     {
//         $coordinateur = User::findOrFail($coordinateurId);
//         $role = Role::findByName($roleName);
//         $coordinateur->assignRole($role);
//     }

//     public function creeroperateur()
//     {
//         return view('coordinateur.creeroperateur');
//     }

//     public function creersuperviseur()
//     {
//         return view('coordinateur.creersuperviseur');
//     }
// }




















// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\User;
// use Spatie\Permission\Models\Role;

// class CoordinateurController extends Controller 
// {
//     public function index()
//     {
//         $coordinateurs = User::role('coordinateur')->get();
//         return view('coordinateurs.index', compact('coordinateurs'));
//     }

//     public function show(User $coordinateur)
//     {
//         return view('coordinateurs.show', ['coordinateur' => $coordinateur]);
//     }

//     public function create()
//     {
//         return view('coordinateurs.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'name' => ['required', 'min:3'],
//             'email' => ['required', 'email', 'unique:users,email'],
//             'password' => ['required', 'min:6'],
//         ]);

//         $coordinateur = User::create([
//             'name' => $request->name,
//             'email' => $request->email,
//             'password' => bcrypt($request->password),
//         ]);

//         $role = Role::where('name', 'coordinateur')->first();
//         $coordinateur->assignRole($role);

//         return redirect()->route('coordinateurs.index');
//     }

//     public function edit(User $coordinateur)
//     {
//         return view('coordinateurs.edit', ['coordinateur' => $coordinateur]);
//     }

//     public function update(Request $request, User $coordinateur)
//     {
//         $request->validate([
//             'name' => ['required', 'min:3'],
//             'email' => ['required', 'email', 'unique:users,email,' . $coordinateur->id],
//             'password' => ['nullable', 'min:6'],
//         ]);

//         $coordinateur->update([
//             'name' => $request->name,
//             'email' => $request->email,
//             'password' => $request->password ? bcrypt($request->password) : $coordinateur->password,
//         ]);

//         return redirect()->route('coordinateurs.show', $coordinateur);
//     }

//     public function destroy(User $coordinateur)
//     {
//         $coordinateur->delete();
//         return redirect()->route('coordinateurs.index');
//     }

//     public function createCoordinateur()
//     {
//         $coordinateurs = User::role('coordinateur')->get();
//         return view('admin.creercoordinateur', compact('coordinateurs'));
//     }

//     public function assignRoleToCoordinateur($coordinateurId, $roleName)
//     {
//         $coordinateur = User::findOrFail($coordinateurId);
//         $role = Role::findByName($roleName);
//         $coordinateur->assignRole($role);
//     }

//     public function creeroperateur()
//     {
//         return view('coordinateur.creeroperateur');
//     }

//     public function creersuperviseur()
//     {
//         return view('coordinateur.creersuperviseur');
//     }
// }




























































// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Coordinateur;
// use Spatie\Permission\Models\Role;

// class CoordinateurController extends Controller 
// {
//     public function index()
//     {
//         $coordinateurs = Coordinateur::all();
//         return view('coordinateurs.index', compact('coordinateurs'));
//     }

//     public function show(Coordinateur $coordinateur)
//     {
//         return view('coordinateurs.show', ['coordinateur' => $coordinateur]);
//     }

//     public function create()
//     {
//         return view('coordinateurs.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([

//             'id_coordinateur' => ['required'],
//             'nom_coordinateur' => ['required', 'min:3'],
//             'email_coordinateur' => ['required', 'min:3'],
//             'password_coordinateur' => ['required', 'min:3'],
            
//         ]);

//         // Coordinateur::create([
//         //     'id_coordinateur' => $request->id_coordinateur,
//         //     'nom_coordinateur' => $request->nom_coordinateur,
//         //     'email_coordinateur' => $request->email_coordinateur,
//         //     'password_coordinateur' => $request->password_coordinateur,
            
//         // ]);

//         $coordinateur = Coordinateur::create([
//             'id_coordinateur' => $request->id_coordinateur,
//             'nom_coordinateur' => $request->nom_coordinateur,
//             'email_coordinateur' => $request->email_coordinateur,
//             'password_coordinateur' => $request->password_coordinateur,
            
//         ]);

//         $role = Role::findByName('coordinateur');
//         $coordinateur->assignRole($role);

//         // return redirect()->route('coordinateurs.index');
//         return redirect()->route('creercoordinateur');
//     }

//     public function edit(Coordinateur $coordinateur)
//     {
//         return view('coordinateurs.edit', ['coordinateur' => $coordinateur]);
//     }

//     public function update(Request $request, Coordinateur $coordinateur)
//     {
//         $request->validate([
//             'id_coordinateur' => ['required'],
//             'nom_coordinateur' => ['required', 'min:3'],
//             'email_coordinateur' => ['required', 'min:3'],
//             'password_coordinateur' => ['required', 'min:3'],
//         ]);

//         $coordinateur->update([
//             'id_coordinateur' => $request->id_coordinateur,
//             'nom_coordinateur' => $request->nom_coordinateur,
//             'email_coordinateur' => $request->email_coordinateur,
//             'password_coordinateur' => $request->password_coordinateur,
//         ]);

//         return redirect()->route('coordinateurs.show', $coordinateur->id_coordinateur);
//         // return redirect()->route('coordinateurs.show', $coordinateur);
//         // return redirect()->route('coordinateurs.show', ['coordinateur' => $coordinateur]);
//         // return redirect()->route('coordinateurs.show', $coordinateur->id_coordinateur);
//     }

//     public function destroy($id_coordinateur)
//     {
//         $coordinateur = Coordinateur::find($id_coordinateur);
//         $coordinateur->delete();

//         Coordinateur::where('id_coordinateur', $id_coordinateur)->delete();

//         //2- redirect to posts.index
//         // return to_route('coordinateurs.index');
//         return redirect()->route('creercoordinateur');
//     }

//     public function createCoordinateur()
//     {
//         $coordinateurs = Coordinateur::all();
//         return view('admin.creercoordinateur', compact('coordinateurs'));
//     }



//     public function assignRoleToCoordinateur($coordinateurId, $roleName)
//     {
//         $coordinateur = Coordinateur::findOrFail($coordinateurId);
//         $role = Role::findByName($roleName);

//         $coordinateur->assignRole($role);
//     }







    

//     public function creeroperateur()
//     {
//         return view('coordinateur.creeroperateur');
//     }

//     public function creersuperviseur()
//     {
//         return view('coordinateur.creersuperviseur');
//     }
// }
































































































































// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\User;
// use Spatie\Permission\Models\Role;

// class CoordinateurController extends Controller 
// {
//     public function index()
//     {
//         $coordinateurs = User::role('coordinateur')->get();
//         return view('coordinateurs.index', compact('coordinateurs'));
//     }

//     public function show(User $coordinateur)
//     {
//         return view('coordinateurs.show', ['coordinateur' => $coordinateur]);
//     }

//     public function create()
//     {
//         return view('coordinateurs.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'name' => ['required', 'min:3'],
//             'email' => ['required', 'email', 'unique:users,email'],
//             'password' => ['required', 'min:6'],
//         ]);

//         $coordinateur = User::create([
//             'name' => $request->name,
//             'email' => $request->email,
//             'password' => bcrypt($request->password),
//         ]);

//         $role = Role::findByName('coordinateur');
//         $coordinateur->assignRole($role);

//         return redirect()->route('coordinateurs.index');
//     }

//     public function edit(User $coordinateur)
//     {
//         return view('coordinateurs.edit', ['coordinateur' => $coordinateur]);
//     }

//     public function update(Request $request, User $coordinateur)
//     {
//         $request->validate([
//             'name' => ['required', 'min:3'],
//             'email' => ['required', 'email', 'unique:users,email,' . $coordinateur->id],
//             'password' => ['nullable', 'min:6'],
//         ]);

//         $coordinateur->update([
//             'name' => $request->name,
//             'email' => $request->email,
//             'password' => $request->password ? bcrypt($request->password) : $coordinateur->password,
//         ]);

//         return redirect()->route('coordinateurs.show', $coordinateur);
//     }

//     public function destroy(User $coordinateur)
//     {
//         $coordinateur->delete();
//         return redirect()->route('coordinateurs.index');
//     }

//     public function createCoordinateur()
//     {
//         $coordinateurs = User::role('coordinateur')->get();
//         return view('admin.creercoordinateur', compact('coordinateurs'));
//     }

//     public function assignRoleToCoordinateur($coordinateurId, $roleName)
//     {
//         $coordinateur = User::findOrFail($coordinateurId);
//         $role = Role::findByName($roleName);
//         $coordinateur->assignRole($role);
//     }

//     public function creeroperateur()
//     {
//         return view('coordinateur.creeroperateur');
//     }

//     public function creersuperviseur()
//     {
//         return view('coordinateur.creersuperviseur');
//     }
// }
