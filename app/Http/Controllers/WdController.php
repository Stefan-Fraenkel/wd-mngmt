<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Notifications\GuestRegistered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use \Illuminate\Notifications\Notifiable;





class WdController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function logout () {
        auth()->logout();
        return redirect('/');
    }

    public function attend(Request $request) {
        if (!$request->adults) {
         return redirect()->back();
        }
        return view('attend')
            -> with('adults', $request->adults)
            -> with('children', $request->children);
    }

    public function bookRoom(Request $request)
    {
        if(isset($request['guests']) && $request->isMethod('post')) {

            $adult_guests = null;
            $child_guests = null;

            foreach ($request['guests'] as $id) {
                $user = User::find($id);
                if ($user->adult) {
                    $adult_guests++;
                }
                else $child_guests++;
            }

            $user_id = Auth::user()->id;
            $check_in = $request['arrival'];
            $check_out = $request['departure'];
            $comment = $request['comment'];
            $created_at = Carbon::now();
            $updated_at = $created_at;
            $booking = [$user_id, $adult_guests, $child_guests, $check_in, $check_out, $comment,  $created_at,  $updated_at];
            DB::insert('insert into bookings (user_id, adult_guests, child_guests, check_in, check_out, comment, created_at, updated_at) values (?, ?, ?, ?, ?, ?, ?, ?)', $booking);
            Auth::user()->booking = true;
            return $this->showProfile();
        }
        else {
            $user = Auth::user();
            $group_ids = explode(', ', $user->group);
            $group = array();
            foreach ($group_ids as $id) {
                $group[] = User::find($id);
            }
            return view('booking') -> with('group', $group);
        }
    }

    public function updateGuest(Request $request)
    {

        if(isset($request['members']) && $request->isMethod('post')) {
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
            return $this->bookRoom($request);
        }
        else {
            $user = Auth::user();
            $group_ids = explode(', ', $user->group);
            $group = array();
            foreach ($group_ids as $id) {
                $group[] = User::find($id);
            }
            return view('user-details') -> with('group', $group);
        }
    }

    public function showProfile()
    {
        $user = Auth::user();
        if ($user) {
            $group_ids = explode(', ', $user->group);
            $group = array();
            foreach ($group_ids as $id) {
                $group[] = User::find($id);
            }
            return view('user-home')->with('group', $group)->with('number', count($group));
        }
            else return redirect('/login');
    }

    public function createGuest(Request $request)
    {
        $group = "";
        $users = array();
        if ($request->adult) {
            foreach ($request->adult as $guest) {
                $user = new User();
                $user->name = $guest['first_name'] . ' ' . $guest['last_name'];
                $user->first_name = $guest['first_name'];
                $user->last_name = $guest['last_name'];
                $user->adult = true;
                if ($guest['email']) {
                    $user->email = $guest['email'];
                }
                if ($guest['password']) {
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
                $user->name = $guest['first_name'] . ' ' . $guest['last_name'];
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
        Auth::login($users[0]);
        return $this->updateGuest($request);
    }

}
