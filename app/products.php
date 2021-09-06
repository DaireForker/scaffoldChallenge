<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    public static function getProducts() {
    	
        $allProducts = DB::table('products')
            ->get();

        return $allProducts;
    }
}
