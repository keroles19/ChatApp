<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{


    public function index(){
      return view('chat.index');
  }
  public function send(Request  $request){
      event(new ChatEvent(Auth::id(),$request->to,$request->message));
  }
}
