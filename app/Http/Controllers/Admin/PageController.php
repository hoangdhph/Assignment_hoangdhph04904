<?php

namespace App\Http\Controllers\Admin;
use Mail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function getDashbroad(){
    	return view('admin.trangchu');
    }
    
}
