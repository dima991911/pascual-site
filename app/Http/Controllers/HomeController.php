<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class HomeController extends Controller
{
    /*------------Get index page---------------*/
    public function index()
    {

        if(!Session::has('lg'))
        {
            Session::put('lg', 'en');
        }

        if (Session::get('lg') == 'en') {
            $lg = [
                'services' => 'SERVICES'
            ];
        } else {
            $lg = [
                'services' => 'SERVICIO'
            ];
        }

        /*dd(Session::all());*/
        return view('welcome', ['lg' => $lg]);
    }

    /*-------------Change language-----------------*/
    public function changeLanguage()
    {
        $lg = Session::get('lg');

        if ($lg == 'en') {
            Session::put('lg', 'es');
        } else {
            Session::put('lg', 'en');
        }

        return redirect()->back();
    }

    /*----------------Get login page----------------*/
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('admin.panel');
        }
        return view('login');
    }

    /*-------------Return to index page from login page------------*/
    public function back()
    {
        return redirect()->route('index');
    }

}
