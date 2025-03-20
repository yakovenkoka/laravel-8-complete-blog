<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class PagesController extends Controller
// {
//     public function index()
//     {
//         return view('index');
//     }
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function index()
    {
        $latestPosts = Post::orderBy('created_at', 'desc')->take(3)->get();
        return view('index', compact('latestPosts'));
    }
}