<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = [
        "c_id",
        "job_title",
        "description",
        "status"
    ];
}
