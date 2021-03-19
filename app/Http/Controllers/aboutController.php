<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function about()
    {
        $posts = Post::paginate(3);
        return view('about',compact('posts'));
    }
}
