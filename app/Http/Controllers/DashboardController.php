<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Resume;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        $resumes = Resume::all();
        return view('dashboard', compact('jobs','resumes'));
    }
}
