<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events_XBazaar extends Model
{
    protected $table = 'events_xbazaar';
    protected $fillable = [
        'category', 'name', 'product_desc', 'email', 'contact_no', 'contact_person'
    ];
}
