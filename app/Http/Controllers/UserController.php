<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(){
        return view('pages.profile.profile');
    }

    public function index(){
        return view('pages.users.users');
    }
}
