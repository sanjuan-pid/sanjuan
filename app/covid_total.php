<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class covid_total extends Model
{
    protected $table = 'covid_total';
    protected $fillable = [
        'desc', 'val'
    ];
}
