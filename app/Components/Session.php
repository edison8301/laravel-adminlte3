<?php

namespace App\Components;

use Illuminate\Support\Facades\Auth;

class Session extends \Illuminate\Support\Facades\Session
{
    public static function isAdmin()
    {
        return Auth::user()->id_user_role == 1;
    }

    public static function getUsername()
    {
        return Auth::user()->username;
    }
}
