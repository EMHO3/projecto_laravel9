<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name'=>['required','string','max:225'],
            'email'=>['required','string','email','max:225','unique:users'],
            'password'=>['required','confirmed',Rules\Password::defaults()],

        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt( $request->password),
        ]);
        return to_route('login')->with('status','cuenta creada!!');
      
    }
}
