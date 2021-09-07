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
			//handling of the ajax post that then takes the keydown search variable from the blade and checks it against all products within the database and returns the most similar one.

		   	$stringToCheck = $_POST['search'];
		   	$allProducts = products::getProducts();
		   	$arr = array();
			    foreach ($allProducts as $product) {
			    	// had to figure a way out how to deal with the caps issue
	        		if(str_contains(strtolower($product->name), strtolower($stringToCheck))){
					    $arr[] = $product;
					}     
			    }
		      	$smallString = $arr[0];
		      	$response = "<a href='/singleProduct/".$smallString->id."' style='color: grey; id='".$smallString->id."'>".$smallString->name."</a>";
		   echo $response;
		}

	
	
}
