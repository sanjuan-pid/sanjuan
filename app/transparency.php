<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transparency extends Model
{
    protected $table = 'transparency';
    protected $fillable = [
        'trans_category','trans_image','trans_title','trans_pdf', 'trans_year', 'trans_tag',
    ];
}
