<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function register(){
       
       return view('register');
   }
   public function welcome_post(Request $request){
       $first_name = $request["first-name"];
       $last_name = $request["last-name"];
       return view('welcome2', ['first-name' => $first_name, 'last-name' => $last_name]); 
   }
}
