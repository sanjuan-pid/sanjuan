<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class covid_age extends Model
{
    protected $table = 'covid_age';
    protected $fillable = [
        'desc', 'val'
    ];
}
