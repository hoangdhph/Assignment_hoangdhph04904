<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testformController extends Controller
{
    public function getform(){
    	return view('formRequest');
    }

    public function save(Request $rq){
    	$files = $rq->file('images');
    	$text = $rq->input('text');
        dump($files);
    	for ($i=0; $i < count($files); $i++){
    		for ($k=0; $k < count($text); $k++) {   		
	    		if($rq->hasFile("images.$i")){
	    			$file = $rq->file("images.$i");
	    			$text = $rq->input("text.$k");
	    			
                    
                    
	    		}
    		}
    	}


    	
    }
}
