<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events_XBazaar extends Model
{
    protected $table = 'events_xbazaar';
    protected $fillable = [
        'category', 'name', 'email', 'contact_no', 'contact_person'
    ];
}
