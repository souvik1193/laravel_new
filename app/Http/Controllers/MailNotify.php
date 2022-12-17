<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class MailNotify extends Controller
{
    public function index($value)
    {
        echo $value;
        // $data = [
        //     'name'=>"Souvik Dasgupta",
        //     'data' => "Demo mail"
        // ];
        // $user['to'] = "souvik.dasgupta@brandwizz.com";
        // Mail::send('mail',$data,function($msg) use ($user){
        //     $msg->to($user['to']);
        //     $msg->subject('Demo mail');
        // });
    }
    public function mailSend($value)
    {
        $data = [
            'name'=>"Souvik Dasgupta",
            'data123' => $value,
        ];
        $user['to'] = "souvik.dg1193@gmail.com";
        Mail::send('mail',$data,function($msg) use ($user){
            $msg->to($user['to']);
            $msg->subject('Demo mail');
        });

    }
}
