<?php


// namespace App\Http\Controllers;

// use App\Models\Equipe;
// use Illuminate\Http\Request;

// class EquipeController extends Controller
// {
//     public function index()
//     {
//         $equipes = Equipe::all();
//         return view('equipes.index', compact('equipes'));
//     }

//     public function show(Equipe $equipe)
//     {
//         return view('equipes.show', ['equipe' => $equipe]);
//     }

//     public function create()
//     {
//         return view('equipes.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([

//             'id_equipe' => ['required'],
//             'nom_equipe' => ['required', 'min:3'],
//             'nombre_maximal_users' => ['required'],
//         ]);

//         Equipe::create([
//             'id_equipe' => $request->id_equipe,
//             'nom_equipe' => $request->nom_equipe,
//             'nombre_maximal_users' => $request->nombre_maximal_users,
//         ]);

//         return redirect()->route('equipes.index');
//     }

//     public function edit(Equipe $equipe)
//     {
//         return view('equipes.edit', ['equipe' => $equipe]);
//     }

//     public function update(Request $request, Equipe $equipe)
//     {
//         $request->validate([
//             'id_equipe' => ['required'],
//             'nom_equipe' => ['required', 'min:3'],
//             'nombre_maximal_users' => ['required'],
//         ]);

//         $equipe->update([
//             'id_equipe' => $request->id_equipe,
//             'nom_equipe' => $request->nom_equipe,
//             'nombre_maximal_users' => $request->nombre_maximal_users,
//         ]);

//         return redirect()->route('equipes.show', $equipe);
//     }

//     public function destroy($id_equipe)
//     {
//         $equipe = Equipe::find($id_equipe);
//         $equipe->delete();

//         Equipe::where('id_equipe', $id_equipe)->delete();

//         //2- redirect to posts.index
//         return to_route('equipes.index');
//     }

//     public function createEquipe()
//     {
//         $equipes = Equipe::all();
//         return view('admin.creerequipe', compact('equipes'));
//     }
// }














namespace App\Http\Controllers;

use App\Models\Coordinateur;
use App\Models\Equipe;
use App\Models\User;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function index()
    {
        $equipes = Equipe::all();
        return view('equipes.index', compact('equipes'));
    }

    public function show(Equipe $equipe)
    {
        return view('equipes.show', ['equipe' => $equipe]);
    }

    // public function create()
    // {
    //     $coordinateurs = Coordinateur::all();

    //     return view('equipes.create', ['coordinateurs' => $coordinateurs]);
    // }

    public function create()
    {
        // Fetch users who have the 'coordinateur' role
        $coordinateurRoleId = 3; // Assuming 'coordinateur' role has id 3
        $coordinateurs = User::join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
                             ->where('model_has_roles.role_id', $coordinateurRoleId)
                             ->where('model_has_roles.model_type', User::class)
                             ->select('users.*')
                             ->get();
    
        return view('equipes.create', compact('coordinateurs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_equipe' => 'required',
            'nom_equipe' => 'required|min:3',
            'nombre_maximal_users' => 'required|integer',
            'id_coordinateur' => 'required|exists:users,id',
        ]);

        Equipe::create([
            'id_equipe' => $request->id_equipe,
            'nom_equipe' => $request->nom_equipe,
            'nombre_maximal_users' => $request->nombre_maximal_users,
            'id_coordinateur' => $request->id_coordinateur,
        ]);

        return redirect()->route('equipes.index');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([

    //         'id_equipe' => ['required'],
    //         'nom_equipe' => ['required', 'min:3'],
    //         'nombre_maximal_users' => ['required'],
    //         'coordinateur_d_equipe' => ['required', 'exists:coordinateurs,id_coordinateur'],
    //     ]);

    //     Equipe::create([
    //         'id_equipe' => $request->id_equipe,
    //         'nom_equipe' => $request->nom_equipe,
    //         'nombre_maximal_users' => $request->nombre_maximal_users,
    //         'coordinateur_d_equipe' => $request->coordinateur_d_equipe,
    //     ]);

    //     return redirect()->route('equipes.index');
    // }

    public function edit(Equipe $equipe)
    {
        return view('equipes.edit', ['equipe' => $equipe]);
    }

    public function update(Request $request, Equipe $equipe)
    {
        $request->validate([
            'id_equipe' => ['required'],
            'nom_equipe' => ['required', 'min:3'],
            'nombre_maximal_users' => ['required'],
        ]);

        $equipe->update([
            'id_equipe' => $request->id_equipe,
            'nom_equipe' => $request->nom_equipe,
            'nombre_maximal_users' => $request->nombre_maximal_users,
        ]);

        return redirect()->route('equipes.show', $equipe);
    }

    public function destroy($id_equipe)
    {
        $equipe = Equipe::find($id_equipe);
        $equipe->delete();

        Equipe::where('id_equipe', $id_equipe)->delete();

        //2- redirect to posts.index
        return to_route('equipes.index');
    }

    public function createEquipe()
    {
        $equipes = Equipe::all();
        return view('admin.creerequipe', compact('equipes'));
    }
}
