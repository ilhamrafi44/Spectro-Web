<?php

namespace App\Http\Controllers\Chat;

use App\Events\MessageSent;
use App\Models\Messages;
use Illuminate\Http\Request;
use App\Models\Conversations;
use App\Http\Controllers\Controller;

class MessagesController extends Controller
{
    public function index($conversation_id)
    {
        $conversation = Conversations::with('user1', 'user2')->where('user1_id', auth()->user()->id)
        ->orWhere('user2_id', auth()->user()->id)->where('id', $conversation_id)
        ->first();
        $messages = Messages::where('conversation_id', $conversation_id)->get();
        $page_name = 'Chat';
        return view('messages.index', compact('conversation', 'messages','page_name'));
    }

    public function store(Request $request, $conversation_id)
    {
        $conversation = Conversations::findOrFail($conversation_id);

        $message = new Messages();
        $message->conversation_id = $conversation_id;
        $message->user_id = auth()->id();
        $message->content = $request->input('message');
        $message->save();

        event(new MessageSent($message, $conversation));

        return response()->json(['message' => $message]);
    }
}
