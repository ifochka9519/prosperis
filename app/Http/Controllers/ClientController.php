<?php

namespace App\Http\Controllers;

use App\Client;
use App\Job;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Mockery\Exception;


class ClientController extends Controller
{
    public function createOrder(Request $request)
    {$this->validate($request,[
           'name' => 'required|max:50',
           'phone' => 'required|numeric'
        ]);


        $client = new Client();

        $client->name = $request['name'];
        $client->telephone = $request['phone'];
        $client->note= $request['note'];

        $client->save();
        MailController::sendEmail($request['name'], $request['phone'], $request['note']);
        $jobs = Job::all();
        $flag = true;

        return view('welcome', compact('jobs'))->with('flag' , $flag);
    }

}
