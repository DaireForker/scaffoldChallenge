<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\categories;

class ProductsController extends Controller
{
    protected function show(Request $request){
    		session_start();
    		$_SESSION["pageClicked"] = 1;
			$allProducts = products::getProducts();
			$allCategories = categories::getCategories();
			$phones = array();
			$applePhones = array();
			$huaweiPhones = array();
			$samsungPhones = array();
			$tablets = array();
			$appleTablets = array();
			$androidTablets = array();
			foreach ($allProducts as $product){
				if($product->category_id == 1 || $product->category_id == 2 ||$product->category_id == 3 || $product->category_id == 4 ){

					$phones[] = $product;
				}
				if($product->category_id == 2 ){
					$applePhones[] = $product;
				}
				if($product->category_id == 3 ){
					$huaweiPhones[] = $product;
				}
				if($product->category_id == 4 ){
					$samsungPhones[] = $product;
				}
				if($product->category_id == 5 || $product->category_id == 6 ||$product->category_id == 7){
					$tablets[] = $product;
				}
				if($product->category_id == 6 ){
					$appleTablets[] = $product;
				}
				if($product->category_id == 7 ){
					$androidTablets[] = $product;
				}
			}
			$_SESSION["allProducts"] = $allProducts;
			$_SESSION["allCategories"] = $allCategories;
			$_SESSION["phones"] = $phones;
			$_SESSION["applePhones"] = $applePhones;
			$_SESSION["huaweiPhones"] = $huaweiPhones;
			$_SESSION["samsungPhones"] = $samsungPhones;
			$_SESSION["tablets"] = $tablets;
			$_SESSION["appleTablets"] = $appleTablets;
			$_SESSION["androidTablets"] = $androidTablets;

	        return view('welcome');	
	        
    }

    public function AjaxPageUpdate(Request $request)
		{

		   	$title = $_POST['title'];
		   	$_SESSION["pageClicked"] = $title;
		   	dd($_SESSION["pageClicked"]);

		   return view('welcome');	
	
	}

	public function AjaxSearch(Request $request)
		{
		   	$stringToCheck = $_POST['search'];
		   	$allProducts = products::getProducts();
		   	$arr = array();
			    foreach ($allProducts as $product) {
	        		if(strpos($product->name, $stringToCheck) !== false){
					    $arr[] = $product;
					}     
			    }
		      	$smallString = $arr[0];
		      	$response = "<span style='color: red;'></span>";
		   echo $response;
		}

	
	
}
