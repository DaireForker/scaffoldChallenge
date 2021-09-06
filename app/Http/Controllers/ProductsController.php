<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\products;

class ProductsController extends Controller
{
    protected function show(Request $request){
	 	
			$allProducts = DB::table('products')->get();
            dd($allProducts);
	        return view('welcome');	
	        
    }
}
