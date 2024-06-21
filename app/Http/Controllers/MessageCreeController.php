<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reclamation;
use App\Models\Conversation;
use App\Models\Message;


    class MessageCreeController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('superviseurs.dashboardsuperviseur', compact('messages'));
    }
    
    public function show(Message $message)
{
    return view('messagescree.show', compact('message'));
}


    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('MessagesCree');
    }

    public function MessagesCree()
    {
        $messages = Message::all();
        return view('messages.index', compact('messages'));
    }

    public function dashboardSuperviseur()
    {
        $messages = Message::all();
        return view('superviseurs.dashboardsuperviseur', compact('messages'));
    }
}

