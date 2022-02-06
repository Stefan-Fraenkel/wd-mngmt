<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Notifications\GuestRegistered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use \Illuminate\Notifications\Notifiable;





class WdController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test() {
        $user = Auth::user();
        $user = User::find(1);
        $group = explode(', ', $user->group);
        $i = 0;
        foreach ($group as $id) {
            $i++;
            $member = User::find($id);
            echo 'Mitglied ' . $i . ': ' . $member->first_name . ' ' . $member->last_name . '<br>';
        }

        dd($group);
     //   echo env('PUSHBULLET_ACCESS_TOKEN');
      //  $notification = 'Test';
     //   $this->notify(new GuestRegistered());
       // request()->user()->notify(new GuestRegistered($request->title, $request->update));

    //    Notification::send($notification, new GuestRegistered());
       // $test = new GuestRegistered();
//dd($test);
       // return new \NotificationChannels\Pushbullet\Targets\Email('efzekawe@gmail.com');

    }

    public function attend(Request $request) {
        return view('attend')
            -> with('adults', $request->adults)
            -> with('children', $request->children);
    }

    public function bookRoom() {

    }

    public function updateGuest(Request $request)
    {
        if($request->isMethod('post')) {
            foreach ($request['members'] as $member) {
                $user = User::find($member['id']);
                if (isset($member['dinner'])) {
                    $user->dinner = $member['dinner'];
                }
                if (isset($member['covid'])) {
                    $user->covid = $member['covid'];
                }
                if (isset($member['dancing'])) {
                    $user->dancing = $member['dancing'];
                }
                if (isset($member['sightseeing'])) {
                    $user->sightseeing = $member['sightseeing'];
                }
                $user->save();
            }
            return view('index');
        }
        else {
            $user = Auth::user();
            $group_ids = explode(', ', $user->group);
            $group = array();
            foreach ($group_ids as $id) {
                $group[] = User::find($id);
            }
            return view('user-info') -> with('group', $group);
        }
    }

    public function createGuest(Request $request)
    {
        $group = "";
        $users = array();
        if ($request->adult) {
            foreach ($request->adult as $guest) {
                $user = new User();
                $user->first_name = $guest['first_name'];
                $user->last_name = $guest['last_name'];
                $user->adult = true;
                if ($guest['email']) {
                    $user->email = $guest['email'];
                }
                if ($guest['phone']) {
                    $user->password = Hash::make($guest['password']);
                }
                if ($guest['phone']) {
                    $user->phone = $guest['phone'];
                }
                $user->save();
                $users[] = $user;
                $group .= $user->id . ", ";
            }
        }
        if ($request->child) {
            foreach ($request->child as $guest) {
                $user = new User();
                $user->first_name = $guest['first_name'];
                $user->last_name = $guest['last_name'];
                $user->adult = false;
                $user->save();
                $users[] = $user;
                $group .= $user->id . ", ";
            }
        }
        $group = rtrim($group, ', ');
        foreach ($users as $user) {
            $user->group = $group;
            $user->save();
        }
        return view('index');
    }

}
