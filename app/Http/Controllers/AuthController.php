<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register', with(['title' => 'Pendaftaran']));
    }

    public function welcome(Request $request){
        return view('welcome', with(['title' => 'Welcome',
                                     'nama_depan' => $request->first_name,
                                     'nama_belakang' => $request->last_name]));
    }
}
