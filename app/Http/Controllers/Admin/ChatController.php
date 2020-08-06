<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{

    public function index(Request $request){

    $chat = Chat::all();

    return view('admin.layouts.master',[
'chats'=>$chat,
    ]);

        }


    public function createChat(Request $request){
        dd('sdsds');
        $input=$request->all();
        $message=$input['message'];

        $chat = new Chat([
            'sender_id'=>\Auth::guard('admin')->user()->id,
            'sender_name'=>\Auth::guard('admin')->user()->name,
            'message'=>$message

        ]);
        $chat->save();

        return redirect()->back();

        }
}
