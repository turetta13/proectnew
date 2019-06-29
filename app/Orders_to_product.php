<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders_to_product extends Model

{
    protected $fillable = [
        'order_id', 'product_id', 'price'
    ];

}

