<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
     $user = User::create([
            'name' => $request->name ,
            'email' => $request->email ,
            'password' => Hash::make($request->password) ,
        ]);
       $token = $user->createToken('myApp')->plainTextToken;
       return response()->json([
        'user' => $user ,
        'token' => $token,
       ]);
    }

    public function login(Request $request)
    {
       $user = User::where('email' , $request->email)->first();
       if(!$user){
        return response()->json('user not found');
       }
       if(!Hash::check($request->password , $user->password)){
        return response()->json('password is incorrect');
       };
       $token = $user->createToken('myApp')->plainTextToken;
       return response()->json([
        'user' => $user ,
        'token' => $token,
       ]);


    }

    public function logout(){

         auth()->user()->tokens()->delete();
         return response()->json('user logout');
    }
}
