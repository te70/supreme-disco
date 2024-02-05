<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Exception;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('jobs.index', compact('jobs'));
    }

    public function edit()
    {
        return view('jobs.edit');
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        try{
            $job = new Job();
            $job->job_title = $request->job_title;
            $job->job_type = $request->job_type;
            $job->job_location = $request->job_location;
            $job->salary = $request->salary;
            $job->contact_name = $request->contact_name;
            $job->contact_email = $request->contact_email;
            $job->job_requirements = $request->job_requirements;
            $job-> job_responsibilities= $request->job_responsibilities;
            $job->save();
            return redirect('/job/index');
        } catch(Exception $e) {
            abort(500);
        }
    }

    public function update(Request $request)
    {

    }

    public function destroy(Request $request)
    {
        
    }
}
