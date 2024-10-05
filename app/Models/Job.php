<?php

namespace App\Models;
use Illuminate\Support\Arr;
 
 class Job {
    public static function all(): array
    {
        return [
            [
                'id'=>1,
                'title'=> 'Director',
                'salary'=> '$50,000'
            ],
            [
                'id'=>2,
                'title'=> 'Programmer',
                'salary'=> '$10,000'
            ],
            [
                'id'=>3,
                'title'=>'Teacher',
                'salary'=> '$40,000'
            ]
        ];

    }
    // Assuming the data for jobs is in an array
    public static function find(int $id): ?array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
        
        // Return the found job or null if not found
        if (! $job) {
            return null; // You can also return an empty array [] if needed
        }

        return $job;
    }
}