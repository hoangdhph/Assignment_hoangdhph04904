<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    public function getCate(){
    	$cate = Category::find($this->cate_id);
    	return $cate;
    }
    public function getUser(){
    	$user = User::find($this->create_by);
    	return $user;
    }
    public function getGalleryID(){
    	// $ga = Gallery::find($this->parent_id);
    	$ga = Gallery::where('parent_id', $this->id)->get();
    	return $ga;
    }
}
