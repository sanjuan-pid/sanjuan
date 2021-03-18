<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mayors extends Model
{
    protected $fillable = [
        'title', 'desc', 'date',
    ];
}
