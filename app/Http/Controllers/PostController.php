<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{   
    public function blog()
    {   
        $posts = Post::all();
        
        return view('blog',['posts' => $posts ]);
    }

    public function search(Request $request, $text)
    {   
        $text = $request->text;

        $post = Post::search($text)->get();

        return response()->json($post);
    }
}
