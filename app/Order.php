<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model

{
    protected $fillable = [
        'user_id', 'phone'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

}
