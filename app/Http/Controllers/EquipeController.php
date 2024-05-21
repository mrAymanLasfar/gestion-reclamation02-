<?php

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
        //select * from users;


        return view('equipes.create');
    }

    public function store()
    {


        request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:5'],
            'post_creator' => ['required', 'exists:users,id'],
        ]);


        $data = request()->all();

        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;


        Equipe::create([
            'title' => $title,
            'description' => $description,
            'user_id' => $postCreator,
        ]);

        return to_route('posts.index');
    }

    public function edit(Equipe $post)
    {
        $users = User::all();

        return view('posts.edit', ['users' => $users, 'post' => $post]);
    }

    public function update($postId)
    {


        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;

        $singlePostFromDB = Equipe::find($postId);
        $singlePostFromDB->update([
            'title' => $title,
            'description' => $description,
            'user_id' => $postCreator,
        ]);



        return to_route('posts.show', $postId);
    }

    public function destroy($postId)
    {

        $post = Equipe::find($postId);
        $post->delete();

        Equipe::where('id', $postId)->delete();

        return to_route('posts.index');
    }
}
