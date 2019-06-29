<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model

{
    protected $fillable = [
        'name', 'articul', 'brand', 'image_path', 'description',
        'price',
    ];

    protected $hidden = [
        'category_id', 'parent_id', 'created_at', 'updated_at'
    ];

}

