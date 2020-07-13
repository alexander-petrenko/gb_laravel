<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';

    protected $fillable = ['title', 'description', 'slug'];

    public function news()
    {
        return $this->belongsToMany(News::class, 'news_category', 'category_id', 'news_id');
    }

    
    
}
