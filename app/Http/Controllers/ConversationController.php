<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reclamation;
use App\Models\Conversation;

class ConversationController extends Controller
{
    public function index()
    {
        $conversations = Conversation::all();
        return view('conversations.index', compact('conversations'));
    }
    
    public function show(Conversation $conversation)
    {
        return view('conversations.show', ['conversation' => $conversation]);
    }

    public function create()
    {
        
        $reclamations = Reclamation::all();
    
        return view('conversations.create', compact('reclamations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_conversations' => 'required|min:3',
            'id_reclamation' => 'required|exists:reclamations,id',
        ]);

        Conversation::create([
            'nom_conversations' => $request->nom_conversations,
            'id_reclamation' => $request->id_reclamation,
        ]);

        return redirect()->route('creerconversation');
    }

    public function edit(Conversation $conversation)
    {
        $reclamations = Reclamation::all();

        return view('conversations.edit', ['conversation' => $conversation] , compact('reclamations'));
    }

    public function update(Request $request, Conversation $conversation)
    {
        $request->validate([
            'nom_conversations' => 'required|min:3',
            'id_reclamation' => 'required|exists:reclamations,id',
        ]);

        $conversation->update([
            'nom_conversations' => $request->nom_conversations,
            'id_reclamation' => $request->id_reclamation,
        ]);
        return redirect()->route('creerconversation', $conversation );
    }

    public function destroy(Conversation $conversation)
{
    $conversation->delete();
    return redirect()->route('creerconversation');
}



    public function createConversation()
    {
        $conversations = Conversation::all();
        return view('conversations.creerconversation', compact('conversations'));
    }
}
