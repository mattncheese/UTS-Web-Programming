<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public static function loginFirst()
    {
        return Auth::attempt(['email' => 'vicolomar@gmail.com', 'password' => 'asd']);
    }

    public static function loginSecond()
    {
        return Auth::attempt(['email' => 'feifeili@gmail.com', 'password' => 'asd']);
    }
    public static function login()
    {
        $login_res = LoginController::loginFirst();
        if (!$login_res) {
            return;
        }
    }
}


