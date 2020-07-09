<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    protected $table = 'categories';

    
    public function getCategories()
    {
        return DB::table('categories')->get();
    }
}
