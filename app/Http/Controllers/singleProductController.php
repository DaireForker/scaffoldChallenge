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
    		// check if the selected product Id is in the products array and then get that products object.
           	foreach($allProducts as $products){
           		if($id == $products->id){
					$productNeeded = $products;
           		}
           	}

           	$brandNeeded;
           	// get the information for that products category.
           	foreach($allCategories as $category)
           	{
           		if($category->id == $productNeeded->category_id){
           			$brandNeeded = $category->name;
           			
           		}
           	}
	       	return view('singleProduct', compact('productNeeded','brandNeeded'));
    }
}
