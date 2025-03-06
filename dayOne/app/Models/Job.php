<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_listing';

    protected $fillable = [
        'title',
        'description',
        'location',
        'salary',
        'company',
        'company_logo',
        'url',
        'email',
        'tags',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

}
