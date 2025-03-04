<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job_listing extends Model{
    use HasFactory;
    protected $fillable = ['title','salary'];


  }
