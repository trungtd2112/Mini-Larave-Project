<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $primaryKey = "cat_id";

    protected $fillable = [
        'cat_name'
    ];
}
