<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Exception;

class ResumeController extends Controller
{
    public function index() 
    {
        $resumes = Resume::all();
        return view('resumes.index', compact('resumes'));
    }

    public function store(Request $request) 
    {
        
        // $request->validate([
        //     'cv' => 'required|mimes:pdf|max:10240',
        // ]);

        $cv = 'cv';
        // try {
            $resume = new Resume();
            $resume->first_name = $request->input('first_name');
            $resume->last_name = $request->input('last_name');
            $resume->email = $request->input('email');
            $resume->phone_number = $request->input('phone_number');
            $resume->location = $request->input('location');
            $resume->cv = $cv;
            $resume->save();
            return response(200);
        // } catch(Exception $e){
        //     return $e;
        // }
    }
    
    public function destroy(Request $request)
    {
        try{
            $deleteAd=Resume::find($request->id);
            $deleteAd->delete();
            return redirect('/resume/index');
        } catch(Exception $e){
            abort(500);
        }
    }
}
