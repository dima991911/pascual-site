<?php

namespace App\Http\Controllers;

use App\Caravana;
use App\Language;
use App\Service;
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
        $caravans = Caravana::orderBy('created_at', 'desc')->get();
        $services = Service::orderBy('created_at', 'desc')->get();

        if(!Session::has('lg'))
        {
            Session::put('lg', 'ua');
        }

        if (Session::get('lg') == 'ua') {
            $lg = new Language(false);
        } else {
            $lg = new Language(true);
        }

        return view('welcome', ['lg' => $lg, 'caravanas' => $caravans, 'services' => $services]);
    }

    /*-------------------Caravan Details----------------------*/
    public function getCaravanDetail($id)
    {
        $caravana = Caravana::find($id);
        $caravana->images = Caravana::find($id)->images;

        return response()->json($caravana, 200);
    }

    /*-------------Change language-----------------*/
    public function changeLanguage()
    {
        $lg = Session::get('lg');

        if ($lg == 'en') {
            Session::put('lg', 'ua');
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
