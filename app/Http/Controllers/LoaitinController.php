<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loaitin;

class LoaitinController extends Controller
{
    public function getDanhSach(){
    	return view('admin.loaitin.danhsach');
    }

    public function getThem(){
    	return view('admin.loaitin.themloaitin');
    }
}
