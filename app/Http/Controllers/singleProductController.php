<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\categories;
use Session;

class singleProductController extends Controller
{
     protected function show($id, Request $request){

    		$productNeeded;
    		$allProducts = products::getProducts();
    		$allCategories = categories::getCategories();
           	foreach($allProducts as $products){
           		if($id == $products->id){
					$productNeeded = $products;
           		}
           	}

           	$brandNeeded;
           
           	foreach($allCategories as $category)
           	{
           		if($category->id == $productNeeded->category_id){
           			$brandNeeded = $category->name;
           			
           		}
           	}
	       	return view('singleProduct', compact('productNeeded','brandNeeded'));
    }
}
