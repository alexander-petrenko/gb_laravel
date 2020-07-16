<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Feedback extends Model
{
    protected $table = 'feedback';
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'message'];

    

}
