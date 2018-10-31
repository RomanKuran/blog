<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{

    public static function getAllMessages(){
        return static::orderBy('created_at', 'desc')->paginate(5);
    }

    // public static function insertItem($email, $name_message, $message){
    //     $OneMessage = new Messages();
    //     $OneMessage->name_message = $name_message;
    //     $OneMessage->message = $message;
    //     $OneMessage->email = $email;
    //     return $OneMessage->save();
    // }

    // public static function editItem($id, $name_message, $message){
    //     $OneMessage = static::find($id);
    //     $OneMessage->name_message = $name_message;
    //     $OneMessage->message = $message;
    //     return $OneMessage->save();
    // }

    // public static function deleteItem($id){
    //     return static::find($id)->delete();
    // }
}
