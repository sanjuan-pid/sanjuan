<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Covid extends Model
{
    protected $table = 'covid_brgy';
    protected $fillable = [
        'brgy', 'Registrants', 'Percentage', 'updated_at'
    ];
}
