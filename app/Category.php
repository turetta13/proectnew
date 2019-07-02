<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Category extends Authenticatable
{
    protected $table = 'categories';

    protected $fillable = [
        'name', 'description', 'is_publish', 'parent_id', 'slug'
    ];

    public function child()
    {
        return $this->hasOne('App\Category', 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo('App\Category', 'parent_id');
    }
}
