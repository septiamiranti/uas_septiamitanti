<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function dashboard(){
        return view('layout.dashboard');
    }
    public function index() {
        $data = user::get();
        return view('index',compact('data'));
    }
}

