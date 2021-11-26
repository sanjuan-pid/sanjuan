<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department_Content extends Model
{
    protected $table = 'department_contents';
    protected $fillable = [
        'dept_code', 'dept_desc', 'dept_mission', 'dept_vision', 'dept_philosophy', 'dept_services', 'dept_socmed', 'dept_objectives', 'dept_desc'
    ];
}
