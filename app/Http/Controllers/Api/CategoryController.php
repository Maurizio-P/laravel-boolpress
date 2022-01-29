<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Category;

class CategoryController extends Controller
{
    public function show($id){
        $category = Category::where('id', $id)->with(['posts'])->first();

        return $category;
    }
}
