<?php

namespace App\Http\Controllers\Fronts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThanhToanController extends Controller
{
     public function getThanhtoan(){
    	return view('pages.thanhtoan');
    }
}
