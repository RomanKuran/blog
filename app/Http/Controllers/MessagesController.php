<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;

class MessagesController extends Controller
{
    private $edit1 = null;
    public function index(){
        $messages = Messages::getAllMessages();

        session_start();
        if($_SESSION)
        $edit = $_SESSION['edit'];

        return view('index', compact('messages', 'edit'));
    }

    public function insert(){
        session_start();
        $email=$_GET['email'];
        $name_message=$_GET['name_message'];
        $message=$_GET['message'];

        $pattern = '#^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$#';
        

         if( preg_match($pattern, $email) && $message != "")
         {
            $_SESSION['edit']=Messages::insertItem($email, $name_message, $message);
            return redirect('index');
         }
         else{
                $_SESSION['edit'] = false;
                return redirect('index');
         }
    }

    public function edit(){
        $id=$_GET['id'];
        $name_message=$_GET['name_message'];
        $message=$_GET['message'];
        Messages::editItem($id, $name_message, $message);
        session_start();
        $_SESSION['edit'] = true;
        return redirect('index');
    }

    public function delete(){
        $id=$_GET['id'];
        $edit = Messages::deleteItem($id);
        return 1;
    }
    
}
