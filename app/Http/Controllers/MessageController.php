<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
class MessageController extends Controller
{
    public function contact()
    {
        $users=User::paginate(100);

        return view('contact', compact('users'));
    }
    public function message()
    {
        $messages=Message::paginate(100);
        return view('admin.users.message', compact('messages'));
    }
    public function envoyer_message_traitement(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'message' => 'required',
        ]);



            $message = new Message();
            $message->message = $request->message;
            $message->titre = $request->titre;
            $message->user_id = $request->user_id;

            $message->save();



        return redirect('/contact')->with('status', 'Message envoyer!!');
    }

}
