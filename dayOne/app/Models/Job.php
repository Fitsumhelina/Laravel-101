<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all() : array
     {

        return [
            [
                'id' => 1,
                'title' => 'PHP Developer',
                'salary' => 120000,
            ],
            [
                'id' => 2,
                'title' => 'Python Developer',
                'salary' => 130000,
            ],
            [
                'id' => 3,
                'title' => 'Java Developer',
                'salary' => 140000,
            ]
            ];

}
public static function find($id): array
{
    return Arr::first(self::all(), fn($job) => $job['id'] == $id);

}
}
