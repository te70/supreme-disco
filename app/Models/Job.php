<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_title',
        'job_type',
        'job_location',
        'salary',
        'contact_name',
        'contact_email',
        'job_requirements',
        'job_responsibilities'
    ];
}
