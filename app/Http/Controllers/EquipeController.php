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

    public function create()
    {
        $coordinateurs = Coordinateur::all();

        return view('equipes.create', ['coordinateurs' => $coordinateurs]);
    }

    public function store(Request $request)
    {
        $request->validate([

            'id_equipe' => ['required'],
            'nom_equipe' => ['required', 'min:3'],
            'nombre_maximal_users' => ['required'],
            'coordinateur_d_equipe' => ['required', 'exists:coordinateurs,id_coordinateur'],
        ]);

        Equipe::create([
            'id_equipe' => $request->id_equipe,
            'nom_equipe' => $request->nom_equipe,
            'nombre_maximal_users' => $request->nombre_maximal_users,
            'coordinateur_d_equipe' => $request->coordinateur_d_equipe,
        ]);

        return redirect()->route('equipes.index');
    }

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
