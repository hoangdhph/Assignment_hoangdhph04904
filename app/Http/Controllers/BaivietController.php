<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaivietController extends Controller
{
    public function getDanhSach(){
    	return view('admin.baiviet.danhsach');
    }

    public function getThem(){
    	return view('admin.baiviet.thembaiviet');
    }
}
