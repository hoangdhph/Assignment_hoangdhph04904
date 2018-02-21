<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function getList(Request $rq){
        $pageSize = $rq->pagesize == null ? 10 : $rq->pagesize;
        $url = $rq->fullUrl();
        $keyword = $rq->keyword;
        $addPath = "";
        if(!$keyword){
            $cate = Category::paginate($pageSize);
            $addPath .= "?pagesize=$pageSize";
        }else{
            $cate = Category::where('name', 'like', "%$keyword%")->paginate($pageSize);
            $addPath .= "?keyword=$keyword&pagesize=$pageSize";
            
        }
        $cate->withPath("$addPath");
    	return view('admin.categories.catelist', compact('cate','keyword','url','pageSize'));
    }
    public function getAdd(){
        $model = new Category();
        $cate = Category::all();
    	return view('admin.categories.add', compact('model', 'cate'));
    }
    public function getEdit($id){
    	$cate = Category::find($id);
    	return view('admin.categories.edit', compact('cate'));
    }

    public function save(Request $rq){
    	if($rq->id){
    		$model = Category::find($rq->id);
    	}else{
    		$model = new Category;
    	}

    	$model->name = $rq->name;
    	$model->slug = $rq->slug;

        if($rq->hasFile('image')){
            $file = $rq->file('image');
            $fileExtension = $file->getClientOriginalExtension();
            if(!in_array( $fileExtension, ['jpg','png','gif','jpeg'])){
                return redirect(route('addproduct'))->with('msg', 'Khong dung dinh dang anh');
            }
            $fileName = $file->getClientOriginalName();
            $image = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileName;
            $file->move('upload/', $image);
            $model->image = $image;
        }else{
            if(!$model->id) $model->image = "";
        }

    	$model->save();
    	return redirect(route('catelist'));
    }
    public function getDelete($id){
    	$cate = Category::find($id);
    	$cate->delete();
    	return redirect(route('catelist'));
    }
    public function checkname(Request $rq){
        $cate = Category::where('name', $rq->name)->first();
        if($cate && $cate->id == $rq->id){
            return response()->json(true);
        }
        $result = $cate == false ? true : false;
        return response()->json($result);
    }
    public function checkSlug(Request $rq){
        $cate = Category::where('slug', $rq->name)->first();
        if($cate && $cate->id == $rq->id){
            return response()->json(true);
        }
        $result = $cate == false ? true : false;
        return response()->json($result);
    }
    public function getSlug(Request $rq){
        $rs = str_slug($rq->value);
        return response()->json(['data' => $rs]);
    }
}
