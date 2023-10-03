<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $categoryCount = Category::count();
        $bookCount = Book::count();
        return view('pages.dashboard.dashboard',[
            'userCount' => $userCount,
            'categoryCount' => $categoryCount,
            'bookCount' => $bookCount
        ]);
    }
}
