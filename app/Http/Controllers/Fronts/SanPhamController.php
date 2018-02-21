<?php

namespace App\Http\Controllers\Fronts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SanPhamController extends Controller
{
     public function getSanpham(){
    	return view('pages.sanpham');
    }
}
