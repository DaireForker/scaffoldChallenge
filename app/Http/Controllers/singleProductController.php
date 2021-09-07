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
           	// $allCategories = Session::get('allCategories');
           	// $phones = Session::get('phones');
           	// $applePhones = Session::get('applePhones');
           	// $huaweiPhones = Session::get('huaweiPhones');
           	// $samsungPhones = Session::get('samsungPhones');
           	// $tablets = Session::get('tablets');
           	// $appleTablets = Session::get('appleTablets');
           	// $androidPhones = Session::get('androidPhones');
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
