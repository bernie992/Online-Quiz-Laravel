<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landing extends Model
{
    protected $fillable = [
        'name',
        'email',
        'message',
        'cv',
    ];
}
