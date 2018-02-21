<?php

namespace App\Http\Controllers\Fronts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
class PageController extends Controller
{
	public function getTrangchu(){
		return view('pages.trangchu');
	}

    public function getGioithieu(){
    	return view('pages.gioithieu');
    }

    public function cate($cateSlug){
    	$cate = Category::where('slug', $cateSlug)->first();
    	$posts = Post::where('cate_id', $cate->id)->paginate('6');
    	if(!$cate){
    		return view('pages.404');
    	}
    	return view('pages.cate-detail', compact('cate', 'posts'));
    }

    public function detail($slugUrl){
    	$posts = Post::where('slug', $slugUrl)->first();
    	if(!$posts){
    		return view('pages.404');
    	}
    	return view('pages.postdetail', compact('posts'));
    }
    
    public function search(Request $rq){
    	if(!$rq->keyword){
    		return redirect()->route('blog');
    	}

    	$keyword = $rq->keyword;

    	$posts = Post::where('title', 'like', '%$keyword%')->paginate(6);
    	return view('pages.search-result', compact('keyword', 'posts'));
    }
}
