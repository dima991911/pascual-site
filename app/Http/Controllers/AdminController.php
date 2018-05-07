<?php

namespace App\Http\Controllers;

use App\Caravana;
use App\Image;
use App\Message;
use App\Service;
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

    public function getServicePanel()
    {
        $services = Service::orderBy('created_at', 'desc')->get();

        return view('services-panel', ['services' => $services]);
    }

    public function deleteService($id)
    {
        $service = Service::find($id);
        if(Auth::check()) {
            $service->delete();
        }

        return redirect()->route('services.panel');
    }

    public function addService(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $img = \Intervention\Image\Facades\Image::make($request->file('avatar'));
        $type = explode('/', $img->mime)[1];
        $img->fit(545, 250);
        $path = 'storage/avatars/' . time() . '_' . '.' . $type;
        $img->save( $path );

        $service = new Service();
        $service->title = $title;
        $service->description = $description;
        $service->avatar = $path;

        $service->save();

        return redirect()->route('services.panel');
    }

    public function getMessagePanel()
    {
        if(Auth::check()) {
            $messages = Message::orderBy('state', 'asc')->orderBy('created_at', 'desc')->get();
            return view('message-panel', ['messages' => $messages]);
        }

        return redirect()->route('login');
    }

    public function changeState($id)
    {
        $message = Message::find($id);
        $message->state = !$message->state;
        $message->update();

        return response()->json(['message' => 'good'], 200);
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
