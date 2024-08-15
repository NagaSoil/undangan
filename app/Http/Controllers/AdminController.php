<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function welcome(){
        return view('Admin/welcome');
    }

    public function index(){
        return view('Admin/index');
    }
}
