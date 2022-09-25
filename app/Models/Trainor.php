<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainor extends Model
{
    use HasFactory;

    function users() {
        return $this->belongsTo('App\Users');
    }
}
