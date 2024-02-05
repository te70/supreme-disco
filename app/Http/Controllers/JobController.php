<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Location;
use Illuminate\Http\Request;
use Exception;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('jobs.index', compact('jobs'));
    }

    public function edit($id)
    {
        $job = Job::find($id);
        return view('jobs.edit', compact('job', 'id'));
    }

    public function create()
    {
        $locations = Location::all();
        return view('jobs.create', compact('locations'));
    }

    public function view($id)
    {
        $job = Job::find($id);
        return view('jobs.view', compact('job'));
    }

    public function locationIndex()
    {
        return view('jobs.location');
    }

    public function locationStore(Request $request)
    {
        $location = new Location();
        $location->location =$request->location;
        $location->save();
        return redirect('/job/index');
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

    public function update(Request $request, $id)
    {
        $job = Job::find($id);
        try{
            $job->job_title = $request->job_title;
            $job->job_type = $request->job_type;
            $job->job_location = $request->job_location;
            $job->salary = $request->salary;
            $job->contact_name = $request->contact_name;
            $job->contact_email = $request->contact_email;
            $job->job_requirements = $request->job_requirements;
            $job-> job_responsibilities= $request->job_responsibilities;
            $job->update();
            return redirect('/job/index');
        } catch(Exception $e) {
            abort(500);
        }
    }

    public function destroy(Request $request)
    {
        try{
            $deleteAd=Job::find($request->id);
            $deleteAd->delete();
            return redirect('/job/index');
        } catch(Exception $e){
            abort(500);
        }
    }
}
