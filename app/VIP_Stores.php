<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VIP_Stores extends Model
{
    protected $table = 'vip_stores';
    protected $fillable = [
        'establishment', 'address', 'offers', 'contact_person', 'contact_no'
    ];
}
