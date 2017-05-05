<?php

namespace App\Http\Controllers;

use App\Job;
use App\Title;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function auth(Request $request)
    {
        $jobs = Job::where('enable', true)
            ->get();
        $flag = false;
        $titles = Title::all();

        if(Auth::user()){
            return view('admin')->with(['jobs'=> $jobs, 'flag'=>$flag, 'titles'=> $titles]);
        }

        return redirect()->route('index');
    }
}
