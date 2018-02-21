<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TheloaiController extends Controller
{
    public function getDanhsach(){
    	return view('admin.theloai.danhsach');
    }
    public function getThem(){
    	return view('admin.theloai.themtheloai');
    }
}
