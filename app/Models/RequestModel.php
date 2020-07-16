<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RequestModel extends Model
{
    protected $table = 'requests';
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'phone', 'email', 'text'];
}
