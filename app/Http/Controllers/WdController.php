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
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\LanguageController;




class WdController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $translator;

    public function __construct()
    {
        $this->translator = new LanguageController;
    }

    public function logout ()
    {
        auth()->logout();
        $this->translator->translate();
        return redirect('/');
    }

    public function attend(Request $request) {
        if (!$request->adults) {
         return redirect()->back();
        }
        $this->translator->translate();
        return view('attend')
            -> with('adults', $request->adults)
            -> with('children', $request->children);
    }

    public function bookRoom(Request $request)
    {
        $user = Auth::user();
        if ($user->booking){ //to prevent multiple bookings by going back in browser
            if (Session()->get('applocale') == 'bg') {
                $message = "Вече си се регистрирал. Свържи се със Щефан или Ели за да предприемеш поправки.";
            }
            else $message = "Du hast bereits eine Buchung vorgenommen. Um sie zu ändern, wende dich bitte an Eli oder Stefan.";
            return $this->showProfile($message);
        }

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
            $user = Auth::user();
            $user->booking = true;
            $user->save();
            return $this->showProfile();
        }
        else {
            $group_ids = explode(', ', $user->group);
            $group = array();
            foreach ($group_ids as $id) {
                $group[] = User::find($id);
            }
            $this->translator->translate();
            return view('booking') -> with('group', $group);
        }
    }

    public function updateGuest(Request $request, $login_user=null)
    {
        if ($login_user == null) {
            $user = Auth::user();
        }
        else $user = $login_user;
        if (isset($user->sightseeing)){ //to prevent multiple bookings by going back in browser
            if (Session()->get('applocale') == 'bg') {
                $message = "Вече си потвърдил твоите преференции. Свържи се със Щефан или Ели, ако искаш да направиш промени.";
            }
            else $message = "Du hast deine Präferenzen bereits angegeben. Um sie zu ändern, wende dich bitte an Eli oder Stefan.";
            return $this->showProfile($message);
        }

        if(isset($request['members']) && $request->isMethod('post')) {

            foreach ($request['members'] as $member) {
                $user = User::find($member['id']);
                $user->dinner = $member['dinner'];
                $user->covid = $member['covid'];
                $user->dancing = $member['dancing'];
                $user->sightseeing = $member['sightseeing'];
                $user->save();
            }

            if(isset($request['booking'])) {
                return $this->bookRoom($request);
            }
            else {
                return $this->showProfile(null, true); // to ensure proper display of first look at view after save
            }
        }
        else {
            $user = Auth::user();
            $group_ids = explode(', ', $user->group);
            $group = array();
            foreach ($group_ids as $id) {
                $group[] = User::find($id);
            }
            $this->translator->translate();
            return view('user-details') -> with('group', $group);
        }
    }

    public function showProfile($message=null, $save_fix=false)
    {
        $user = Auth::user();
        $creator = false;

        $check_in = "";
        $check_out = "";
        if ($user && $user->booking) {
            $booking = (DB::table('bookings')->where('user_id', Auth::user()->id)->get(['adult_guests','child_guests', 'check_in', 'check_out'])->first());
            $check_in = Carbon::parse($booking->check_in)->format('d.m.Y');
            $check_out = Carbon::parse($booking->check_out)->format('d.m.Y');
        }


        if ($user) {
            $group_ids = explode(', ', $user->group);
            $group = array();
            foreach ($group_ids as $id) {
                $member = User::find($id);
                if ($member->id != Auth::user()->id) {
                    $group[] = $member;
                }
            }
            if ($user->id == $group_ids[0]) { //check if current user is creator of the registration (only creator should be able to edit things)
                $creator = true;
            }
            $this->translator->translate();
            return view('user-home')
                ->with('group', $group)
                ->with('number', count($group))
                ->with('creator', $creator)
                ->with('message', $message)
                ->with('check_in', $check_in)
                ->with('check_out', $check_out)
                ->with('save_fix', $save_fix);
        }
            else {
                $this->translator->translate();
                return redirect('/login');
            }
    }

    public function createGuest(Request $request)
    {
        $group = "";
        $users = array();
        $check_duplicate = array();
        $login_user = null;

        if ($request->adults) {

            foreach ($request->adults as $guest) {
                if (isset($guest['email'])) {
                    $check_duplicate[] = $guest['email'];
                }
            }

            if(count($check_duplicate) != count(array_unique($check_duplicate))){
                $request->adults = count($request->adults);
                if (isset($request->children)) {
                    $request->children = count($request->children);
                }
                if (Session()->get('applocale') == 'bg') {
                    $message = "Не можеш да регистрираш различни хора с един и същи имейл.";
                }
                else $message = "Es können nicht mehrere Personen mit der selben E-Mail Adresse angelegt werden.";
                $this->translator->translate();
                return view('attend')
                -> with('adults', $request->adults)
                -> with('children', $request->children)
                -> with('message', $message);
              }

            foreach ($request->adults as $guest) {
                $user_check = null;
                if (isset($guest['email'])) {
                    $user_check = User::select('email')->where('email', $guest['email'])->first();
                }
                if (!$user_check == null){
                    if (!$user_check->email == null) {
                        $request->adults = count($request->adults);
                        if (isset($request->children)) {
                            $request->children = count($request->children);
                        }
                        if (Session()->get('applocale') == 'bg') {
                            $message = "е регистриран. Можеби някой, когото познаваш вече те е регистрирал. Ако това не е така, обърни се към Ели или Щефан.";
                        }
                        else $message = $user_check->email . " ist bereits registriert. Vielleicht hat dich jemand, den du kennst, bereits angemeldet. Sollte dem nicht so sein, wende dich bitte an Eli oder Stefan.";
                        $this->translator->translate();
                        return view('attend')
                            -> with('adults', $request->adults)
                            -> with('children', $request->children)
                            -> with('message', $message);

                    }
                    }
                }

            foreach ($request->adults as $guest) {

                $user = new User();
                $user->name = $guest['first_name'] . ' ' . $guest['last_name'];
                $user->first_name = $guest['first_name'];
                $user->last_name = $guest['last_name'];
                $user->adult = true;
                if (isset($guest['email'])) {
                    $user->email = $guest['email'];
                }
                if (isset($guest['password'])) {
                    $user->password = Hash::make($guest['password']);
                }
                if (isset($guest['phone'])) {
                    $user->phone = $guest['phone'];
                }

                $user->save();
                $users[] = $user;
                $group .= $user->id . ", ";
                if ($login_user == null ) {
                    $login_user = $user->email;
                }
            }
        }

        if ($request->children) {
            foreach ($request->children as $guest) {
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
        $login_user = User::select()->where('email', $login_user)->first();
        Auth::login($login_user);
        return $this->updateGuest($request, $login_user);
    }

}
