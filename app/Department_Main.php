<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department_Main extends Model
{
    protected $table = 'department_main';
    protected $fillable = [
        'dept_code', 'dept_name', 'dept_status', 'dept_sector', 'dept_contactno'
    ];
}
