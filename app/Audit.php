<?php
namespace App;

class Audit
{
    public static function isEmail($email){
        $pattern = '#^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$#';
        return preg_match($pattern, $email);
    }
}
