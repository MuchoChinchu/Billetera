<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)

    {
        $request->validate([
            'email' =>'string | email | required',
            'password' =>'string | required'

        ]);
        
        $email = $request->get('email');
        $password = $request->get('password');
                 

            if (Auth::attempt(['email' =>$email,'password'=>$password] ))
            {
                return 'exito';
            }
            return response() ->json([
                "mensaje" => "clave o usuario incorrecta"
            ],404);
        
    }
    
}
