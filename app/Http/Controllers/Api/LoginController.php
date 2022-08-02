<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Login(Request $request ){

        $this->validateLogin($request);

        //Login is true



        //Login is false

    }

    public function validateLogin(Request $request ){

       return $request->validate([
        'email'=>'require|email',
        'password'=>'require',
        'name'=>'require',

       ]);
    }
}
