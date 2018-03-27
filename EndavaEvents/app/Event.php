<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name', 'category', 'place', 'address', 'start_date', 'end_date', 'is_virtual'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

}
