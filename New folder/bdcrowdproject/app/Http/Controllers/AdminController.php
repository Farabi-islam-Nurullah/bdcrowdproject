<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Admin;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home(){
        return view('admin.home');
    }
    public function projects(){
        return view('admin.projects');
    }
    public function basic(){
        return view('admin.projectbasic');
    }
    public function overview(){
        return view('admin.projectoverview');
    }
    public function details(){
        return view('admin.projectdetails');
    }
    public function faq(){
        return view('admin.projectfaq');
    }
    public function location(){
        return view('admin.projectmap');
    }
    public function update(){
        return view('admin.projectupdate');
    }
   
}
