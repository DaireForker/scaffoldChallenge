<?php

namespace App;
use DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    public function getProducts() {
    	dd("got here");
        $allProducts = DB::table('products')
            ->get();

        return $allProducts;
    }
}
