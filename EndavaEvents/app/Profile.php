<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name', 'lastname', 'email', 'phone', 'cc', 'address', 'city', 'birthday', 'photo'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
