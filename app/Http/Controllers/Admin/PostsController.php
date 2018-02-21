<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;

class PostsController extends Controller
{
    public function getList(){
    	$posts = Post::orderBy('id', 'desc')->paginate(10);
    	return view('admin.posts.postlist', compact('posts'));
    }
    public function getAdd(){
    	$cate = Category::all();
    	return view('admin.posts.add', compact('cate'));
    }
    public function getEdit(){
    	return view('admin.posts.edit');
    }

    public function postThem(Request $rq){
    	$post = new Post;
    	$post->cate_id = $rq->cate;
    	$post->title = $rq->title;
    	$post->slug = str_slug($rq->title.'-'.microtime(), '-');
    	$post->content = $rq->content;
    	$post->author = $rq->author;
    	$post->create_by = $rq->created_by;

    	$post->save();
    }
}
