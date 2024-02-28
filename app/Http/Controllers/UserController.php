<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Exception;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function destroy(Request $request)
    {
        try{
            $deleteUser=User::find($request->id);
            $deleteUser->delete();
            return redirect('/users');
        } catch(Exception $e){
            abort(500);
        }
    }
}
