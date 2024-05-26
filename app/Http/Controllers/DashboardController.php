<?php

namespace App\Http\Controllers;

use App\Models\Post; // Post Model
use illuminate\Http\Request;

Class DashboardController extends Controller
{
    public function index()
    {
        $tPosts = Post::count();
        $tPublishedPosts = Post::where('status', 1) ->count();
        $tUnpublishedPosts = Post::where('status', 0) ->count();

        return view('Dashboard', compact('tPosts','tPublishedPosts','tUnpublishedPosts'));
    }
}