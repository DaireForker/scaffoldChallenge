<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class singleProductController extends Controller
{
     protected function show(Request $request){
           
	        return view('singleProduct');	
    }
}
