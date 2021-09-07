<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\categories;

class ProductsController extends Controller
{
    protected function show(Request $request){
	 	
			$allProducts = products::getProducts();
			$allCategories = categories::getCategories();
			$phones = array();
			$applePhones = array();
			$huaweiPhones = array();
			$samsungPhones = array();
			$tablets = array();
			$appleTablets = array();
			$androidPhones = array();
			foreach ($allProducts as $product){
				if($product->category_id == 1 || $product->category_id == 2 ||$product->category_id == 3 || $product->category_id == 4 ){

					$phones[] = $product;
				}
				elseif($product->category_id == 2 ){
					$applePhones[] = $product;
				}
				elseif($product->category_id == 3 ){
					$huaweiPhones[] = $product;
				}
				elseif($product->category_id == 4 ){
					$huaweiPhones[] = $product;
				}
				elseif($product->category_id == 5 || $product->category_id == 6 ||$product->category_id == 7){
					$tablets[] = $product;
				}
				elseif($product->category_id == 6 ){
					$appleTablets[] = $product;
				}
				elseif($product->category_id == 7 ){
					$androidPhones[] = $product;
				}
			}
	        return view('welcome', compact('allProducts', 'allCategories', 'phones', 'applePhones', 'huaweiPhones', 'samsungPhones', 'tablets', 'appleTablets', 'androidPhones'));	
	        
    }
}
