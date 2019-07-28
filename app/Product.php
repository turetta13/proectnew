<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model

{
    protected $fillable = [
        'name', 'description','category_id',
        'price','shortdesc', 'image_path',
        'image_path_2', 'image_path_3', 'publish', 'composition',
        ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

}

