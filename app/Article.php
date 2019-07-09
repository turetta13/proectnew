<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model

{
    protected $table = 'articles';

    protected $fillable = [
        'title', 'slug', 'description'
    ];

    protected $hidden = [
        'updated_at', 'created_at'
    ];

}
