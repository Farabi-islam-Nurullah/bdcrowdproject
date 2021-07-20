<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    
    public function home(){
        return view('home');
    }
    public function dashbord(){
        return view('user.home');
    }
    public function editeprofile(){
        return view('user.editeprofile');
    }
}
