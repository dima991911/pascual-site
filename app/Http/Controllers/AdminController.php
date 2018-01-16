<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /*---------------Check User(Form check)---------------*/
    public function checkUser(Request $request)
    {
        $login = $request->login;
        $password = $request->password;

        if(Auth::attempt(['login' => $login, 'password' => $password])) {
            return redirect()->route('admin.panel');
        }

        return redirect()->route('login')->with('error', 'Email or Password incorrect');
    }

    /*---------------Get admin panel page----------------*/
    public function getPanel()
    {
        if(Auth::check()) {
            return view('admin-panel');
        }

        return redirect()->route('login');
    }

    /*---------Function logout---------*/
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
