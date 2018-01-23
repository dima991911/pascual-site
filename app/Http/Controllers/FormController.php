<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackForm;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    /*--------------Send email---------------*/
    public function submitEmail(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $message = $request->input('message');

        $msg = new Message();
        $msg->name = $name;
        $msg->phone = $phone;

        if($email) {
            $msg->email = $email;
        }
        if($message) {
            $msg->message = $message;
        }

        $msg->save();

        mail('dimon4uk.ds@gmail.com', 'Subject', 'Dima');

        Mail::to('dimon4uk.ds@gmail.com')->send(new FeedbackForm($request));
        return redirect()->route('index');
    }
}
