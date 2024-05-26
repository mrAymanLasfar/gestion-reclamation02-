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

//     public function createEquipe()
//     {
//         $equipes = Equipe::all();
//         return view('admin.creerequipe', compact('equipes'));
//     }
    

//     public function store()
//     {


//         request()->validate([
//             'title' => ['required', 'min:3'],
//             'description' => ['required', 'min:5'],
//             'post_creator' => ['required', 'exists:users,id'],
//         ]);


//         $data = request()->all();

//         $title = request()->title;
//         $description = request()->description;
//         $postCreator = request()->post_creator;


//         Equipe::create([
//             'title' => $title,
//             'description' => $description,
//             'user_id' => $postCreator,
//         ]);

//         return to_route('posts.index');
//     }

//     public function edit(Equipe $post)
//     {
        

//         return view('posts.edit', ['post' => $post]);
//     }

//     public function update($postId)
//     {


//         $title = request()->title;
//         $description = request()->description;
//         $postCreator = request()->post_creator;

//         $singlePostFromDB = Equipe::find($postId);
//         $singlePostFromDB->update([
//             'title' => $title,
//             'description' => $description,
//             'user_id' => $postCreator,
//         ]);



//         return to_route('posts.show', $postId);
//     }

//     public function destroy($postId)
//     {

//         $post = Equipe::find($postId);
//         $post->delete();

//         Equipe::where('id', $postId)->delete();

//         return to_route('posts.index');
//     }
// }






namespace App\Http\Controllers;

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
        return view('equipes.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'id_equipe' => ['required', 'min:3'],
            'nom_equipe' => ['required', 'min:3'],
            'nombre_maximal_users' => ['required', 'min:3'],
        ]);

        Equipe::create([
            'id_equipe' => $request->id_equipe,
            'nom_equipe' => $request->nom_equipe,
            'nombre_maximal_users' => $request->nombre_maximal_users,
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
            'id_equipe' => ['required', 'min:3'],
            'nom_equipe' => ['required', 'min:3'],
            'nombre_maximal_users' => ['required', 'min:3'],
        ]);

        $equipe->update([
            'id_equipe' => $request->id_equipe,
            'nom_equipe' => $request->nom_equipe,
            'nombre_maximal_users' => $request->nombre_maximal_users,
        ]);

        return redirect()->route('equipes.show', $equipe);
    }

    public function destroy(Equipe $equipe)
    {
        $equipe->delete();
        return redirect()->route('equipes.index');
    }

    public function createEquipe()
    {
        $equipes = Equipe::all();
        return view('admin.creerequipe', compact('equipes'));
    }
}
