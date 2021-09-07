<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class categories extends Model
{
     public static function getCategories() {
    	
        $allCategories = DB::table('categories')
            ->get();

        return $allCategories;
    }

}
