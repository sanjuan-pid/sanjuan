<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    protected $table = 'magazine';
    protected $fillable = [
        'magz_name', 'magz_month', 'magz_year', 'magz_filename', 'magz_tag'
    ];
}
