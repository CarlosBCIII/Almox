<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function find($name){
        return "Meu nome é ".$name." ALMOX";        
    }
    //
}
