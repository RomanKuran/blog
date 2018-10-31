<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
use App\Audit;

class MessagesController extends Controller
{
    public function index(){
        $messages = Messages::getAllMessages();
        return view('index', compact('messages'));
    }

    public function insert(){
        $email=$_POST['email'];
        $name_message=$_POST['name_message'];
        $message=$_POST['message'];

        if(Audit::isEmail($email) && $message != ""){
            $OneMessage = new Messages();
            $OneMessage->name_message = $name_message;
            $OneMessage->message = $message;
            $OneMessage->email = $email;
            $OneMessage->save();
            return 1;
        }
        return 0;
    }

    public function edit() : int{
        $id=$_POST['id'];
        $name_message=$_POST['name_message'];
        $message=$_POST['message'];

        $OneMessage = Messages::find($id);
        $OneMessage->name_message = $name_message;
        $OneMessage->message = $message;
        $OneMessage->save();
        return 1;
    }

    public function delete() : int{
        $id=$_POST['id'];
        Messages::find($id)->delete();
        return 1;
    }
    
}
