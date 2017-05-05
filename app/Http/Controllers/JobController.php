<?php

namespace App\Http\Controllers;

use App\Job;
use App\Title;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function createJob(Request $request)
    {

        $this->validate($request,[
            'title' => 'required|max:50',
            'money' => 'required|numeric'
        ]);



            $job = new Job();

        $file = $request->file('image');
        $file_name = str_random(30) . '.jpg';
        $file->move(realpath(public_path('img/jobs/')), $file_name);
        $job->image = '/img/jobs/' . $file_name;

        $job->title = $request['title'];
        $job->description = $request['description'];
        $job->money = $request['money'];

        $job->save();

        $flag = false;

        $jobs = Job::where('enable', true)
            // ->take(10)
            ->get();
        $titles = Title::all();

        return view('admin', compact('jobs'))->with(['flag' => $flag, 'titles'=>$titles]);
   }

    public function updateJob(Request $request)
    {

        $id = $request['id'];

        $this->validate($request,[
            'title' => 'required|max:50',
            'money' => 'required|numeric'
        ]);

        $job = Job::find($id);
        $job->title = $request['title'];
        $job->description = $request['description'];
        $job->money = $request['money'];


        if ($request->file('image') != '') {
            $file = $request->file('image');
            $file_name = str_random(30) . '.jpg';
            $file->move(realpath(public_path('img/jobs/')), $file_name);
            $job->image = '/img/jobs/' . $file_name;
        }


        $job->save();
        $flag = true;
        $jobs = Job::where('enable', true)
            // ->take(10)
            ->get();
        $titles = Title::all();

        return view('admin', compact('jobs'))->with(['flag' => $flag, 'titles'=>$titles]);
   }

    public function updateView($id)
    {
        $job = Job::find($id);
        return view('update', ['job'=>$job]);
   }


    public function index()
    {
        $jobs = Job::where('enable', true)
           // ->take(10)
            ->get();
        $flag = false;
        $titles = Title::all();

        return view('welcome', compact('jobs'))->with(['flag' => $flag, 'titles'=>$titles]);

   }

    public function delete($id)
    {
        $job = Job::find($id);
        $job->enable = false;
        $job->save();
        $jobs = Job::where('enable', true)
            // ->take(10)
            ->get();
        $titles = Title::all();
        $flag = false;

        return view('admin', compact('jobs'))->with(['flag' => $flag, 'titles'=>$titles]);
   }
}
