<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function identification(){
        $utilisateurs = [
            (object)['id' => '1','nom' => 'Nicolas', 'age' => '18', 'email'=>'nico@email.com'],
            (object)['id' => '2','nom' => 'Cactus', 'age' => '25', 'email'=>'cactus@email.com']
        ];
        return view('users',compact('utilisateurs'));
    }
}
