<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Resume;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        $liveJobs = Job::where('expiry_date', '>', Carbon::now())->get();
        $resumes = Resume::all();
        return view('dashboard', compact('jobs','resumes','liveJobs'));
    }
}
