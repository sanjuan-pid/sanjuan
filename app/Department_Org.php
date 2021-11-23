<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department_Org extends Model
{
    protected $table = 'department_chart';
    protected $fillable = [
        'dept_code', 'member_name', 'member_designation', 'member_sg', 'member_tag', 'member_align'
    ];
}
