<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Exception;

class ResumeController extends Controller
{
    public function store(Request $request) 
    {
        if($request->hasfile('cv'))
        {
            foreach($request->file('cv') as $cv)
            {
                $name= base64_encode(Carbon::now()).$cv->getClientOriginalName();
                $cv->move(public_path('cv/'),$name);
            }
        }

        try {
            $resume = new Resume();
            $resume->first_name = $request->first_name;
            $resume->last_name = $request->last_name;
            $resume->email = $request->email;
            $resume->phone_number = $request->phone_number;
            $resume->location = $request->location;
            $resume->cv = $request->$cv;
            $resume->save();
            return response(200);
        } catch(Exception $e){
            return response(500)->json(['error'=>$e]);
        }
    }
}
