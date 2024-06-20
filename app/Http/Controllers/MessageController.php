<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reclamation;
use App\Models\Conversation;
use App\Models\Message;
class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('messages.index', compact('messages'));
    }
    
    public function show(Message $message)
    {
        return view('messages.show', ['message' => $message]);
    }

    public function create()
    {
        
        $conversations = Conversation::all();
    
        return view('messages.create', compact('conversations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'contenu_du_message' => 'required|min:3',
            'id_conversation' => 'required|exists:conversations,id',
        ]);

        Message::create([
            'contenu_du_message' => $request->contenu_du_message,
            'id_conversation' => $request->id_conversation,
        ]);

        return redirect()->route('creermessage');
    }

    public function edit(Message $message)
    {
        $conversations = Conversation::all();

        return view('messages.edit', ['message' => $message] , compact('conversations'));
    }

    public function update(Request $request, Message $message)
    {
        $request->validate([
            'contenu_du_message' => 'required|min:3',
            'id_conversation' => 'required|exists:conversations,id',
        ]);

        $message->update([
            'contenu_du_message' => $request->contenu_du_message,
            'id_conversation' => $request->id_conversation,
        ]);
        return redirect()->route('creermessage', $message );
    }

    public function destroy(Message $message)
{
    $message->delete();
    return redirect()->route('creermessage');
}



    public function createMessage()
    {
        $messages = Message::all();
        return view('messages.creermessage', compact('messages'));
    }
}
