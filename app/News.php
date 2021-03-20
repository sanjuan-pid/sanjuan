<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title', 'desc', 'date', 'content_tag', 'content_type',
    ];
}
