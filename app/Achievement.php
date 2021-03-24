<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $table = 'achievement';
    protected $fillable = [
        'title', 'description', 'content_tag'
    ];
}
