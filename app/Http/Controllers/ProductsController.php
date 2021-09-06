<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;

class ProductsController extends Controller
{
    protected function show(Request $request){
	 	
			$allProducts = products::getProducts();
           
	        return view('welcome', compact('allProducts'));	
	        
    }
}
