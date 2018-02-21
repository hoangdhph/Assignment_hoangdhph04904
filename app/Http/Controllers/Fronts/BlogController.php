<?php

namespace App\Http\Controllers\Fronts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class BlogController extends Controller
{
    public function getBlog(){
    	$posts = Post::paginate(6);
    	return view('pages.blog', compact('posts'));
    }
}
