<?php

namespace App\Http\Controllers\Fronts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CuaHangController extends Controller
{
    public function getCuahang(){
    	return view('pages.cuahang');
    }
}
