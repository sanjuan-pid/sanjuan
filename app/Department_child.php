<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department_child extends Model
{
    protected $table = 'department_child';
    protected $fillable = [
        'name', 'description'
    ];
    
}

