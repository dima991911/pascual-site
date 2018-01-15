<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        if(!Session::has('lg'))
        {
            Session::put('lg', 'ru');
        }

        /*dd(Session::all());*/
        return view('welcome');
    }

    public function changeLanguage()
    {
        $lg = Session::get('lg');

        if ($lg == 'en') {
            Session::put('lg', 'ru');
        } else {
            Session::put('lg', 'en');
        }

        return redirect()->route('index');
    }
}
