<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;



class MailController extends Controller
{
    public static function sendEmail($name, $phone, $note)
    {
        $data = ['name'=>$name,'phone'=>$phone,'note'=>$note];
        Mail::send(['text'=>'mails/client'],$data, function ($message){
            $message->to('shpulka9519@gmail.com', 'Yuliya Berdiy')->subject('New Order');
            $message->from('y.berdiy@gmail.com', 'Yuliya');
        } );


    }

}
