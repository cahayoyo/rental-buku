<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('pages.books.books',['user' => $user]);
    }
}
