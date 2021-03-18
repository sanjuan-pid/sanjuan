<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = [
        'ann_title', 'ann_desc', 'ann_date',
    ];
}
