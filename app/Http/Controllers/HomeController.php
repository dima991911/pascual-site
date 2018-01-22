<?php

namespace App\Http\Controllers;

use App\Caravana;
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

        if(!Session::has('lg'))
        {
            Session::put('lg', 'es');
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

        return view('welcome', ['lg' => $lg, 'caravanas' => $caravans]);
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
