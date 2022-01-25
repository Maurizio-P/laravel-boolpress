<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
class PostController extends Controller
{
    public function api()
    {
        // $posts = Post::all();

        $posts = Post::with('category')->paginate(2);

        return $posts;
    }
}
