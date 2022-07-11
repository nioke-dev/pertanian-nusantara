<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showPostHome()
    {
        return view('post.add_lahan');
    }
}
