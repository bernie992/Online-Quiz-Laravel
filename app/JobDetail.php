<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobDetail extends Model
{
    protected $fillable = [
        'job_title',
        'post_date',
        'last_date',
        'job_description',
        'experience',
        'vacancy',
        'location',
    ];
}
