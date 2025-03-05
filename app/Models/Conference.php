<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    //
    protected $fillable = [
        'title',
        'date',
        'agenda',
        'is_held'
    ];
}
