<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';

    protected $fillable = ['title', 'description', 'slug'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'news_category', 'news_id', 'category_id');
    }

    
    

    
}
