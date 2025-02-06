<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // get the data from the database table
    protected $table = 'job_listings';

    protected $fillable = ['title', 'salary'];
}
