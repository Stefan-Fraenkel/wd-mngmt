<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Notifications\GuestRegistered;
use Illuminate\Support\Facades\Notification;
use \Illuminate\Notifications\Notifiable;





class WdController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test() {
        echo env('PUSHBULLET_ACCESS_TOKEN');
        $notification = 'Test';
        $this->notify(new GuestRegistered());
       // request()->user()->notify(new GuestRegistered($request->title, $request->update));

    //    Notification::send($notification, new GuestRegistered());
       // $test = new GuestRegistered();
//dd($test);
       // return new \NotificationChannels\Pushbullet\Targets\Email('efzekawe@gmail.com');

    }

    public function register1(Request $request) {
        return view('register1')
            -> with('adults', $request->adults)
            -> with('children', $request->children);
    }

    public function createVisitor(Request $request) {
        foreach ($request->adult as $guest) {
            echo $guest['first_name'] . ' ' . $guest['last_name'] . '<br>' ;
        }
        echo 'Email: ' . $request->email . '<br>';
        echo 'Telefon: ' . $request->phone . '<br>';
        foreach ($request->child as $guest) {
            echo $guest['first_name'] . ' ' . $guest['last_name'] . '<br>' ;
        }
    }

}
