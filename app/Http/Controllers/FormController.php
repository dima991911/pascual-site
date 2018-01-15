<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function submitEmail(Request $request)
    {
        Mail::to('dimon4uk.ds@gmail.com')->send(new FeedbackForm($request));
        return redirect()->route('index');
    }
}
