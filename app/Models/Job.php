<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$40000'
            ],
        ];
    }


    // find the job by its id
    public static function find(int $id): array
    {
        // search for a job with the given id
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        // if no job is found , abort with a 404 error
        if (! $job) {
            abort(404);
        }
        // return the found job details
        return $job;
    }
}
