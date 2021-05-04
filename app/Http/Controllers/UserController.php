<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function login(Request $request){
        $data = [];
        if($request->isMethod("POST")){
            //assim que logar:
            $login = $request->input("login");
            $password = $request->input("password");

            $credential = [ 'login' => $login, 'password'=> $password];
            if(Auth::attempt($credential)){
                dd("Log");
            }else{
                dd("invalid");
            }
        }

        return view('login', $data);
    }
}
