<?php

namespace App\Http\Controllers;

use App\Caravana;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
            $caravanas  = Caravana::orderBy('created_at', 'desc')->get();

            return view('admin-panel', ['caravanas' => $caravanas]);
        }

        return redirect()->route('login');
    }

    /*---------Function logout---------*/
    public function logout()
    {
        Auth::logout();

        Storage::disk('local')->put('file.txt', 'Contest');
        return redirect()->route('login');
    }

    /*----------------Add caravan with image and data---------------*/
    public function addCaravana(Request $request)
    {

        if(Auth::check()) {
            $caravana = new Caravana();
            $caravana->name = $request->name;
            $caravana->price = $request->price;
            $caravana->type = $request->type;
            $caravana->model = $request->model;
            $caravana->length = $request->length;
            $caravana->year = $request->year;
            $caravana->description = $request->description;
            $caravana->avatar = 'Dima';
            $caravana->save();

            $photos = $request->file('images');

            for($i = 0; $i < count($photos); $i++)
            {
                $photo = $photos[$i];
                $path = $photo->store('', 'local');

                if($i == 0) {
                    $caravana->avatar = $path;
                }

                $img = new Image();
                $img->caravan_id = $caravana->id;
                $img->path = $path;
                $img->save();
            }

            $caravana->update();

            return response()->json(['caravana' => $caravana], 200);
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }

    /*----------------Delete Caravana-----------------*/
    public function deleteCaravana($id)
    {
        $caravana = Caravana::where('id', $id)->first();
        $images = Image::where('caravan_id', $id)->get();
        $imageArr = [];

        if ($caravana && Auth::check()) {
            $caravana->delete();

            foreach ($images as $image) {
                $imageArr[] = $image->path;
                $image->delete();
            }

            Storage::delete($imageArr);

            return redirect()->route('admin.panel')->with('goodDelete', 'Caravana Delete');
        }

        return redirect()->route('index');
    }
}
