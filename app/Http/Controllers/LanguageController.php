<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends BaseController
{

    public function switchLang(Request $request) //for more than two languages
    {
        if (array_key_exists($request->lang, config('app.available_locales'))) {
            session()->put('applocale', $request->lang);
        }
        return redirect()->back();
    }

    public function simpleSwitch(Request $request) //for more than two languages
    {
        if (Session()->has('applocale') AND array_key_exists(Session()->get('applocale'), config('app.available_locales'))) {
            if (Session()->get('applocale') == 'bg') {
                session()->put('applocale', 'de');
            }
            else session()->put('applocale', 'bg');
        }
        else session()->put('applocale', 'bg');
        return redirect()->back();
    }

    public function bgStart(){
        session()->put('applocale', 'bg');
        return redirect()->back();
    }

    public function translate () { // should be doable via middleware but somehow doesn't work
        if (Session()->has('applocale') AND array_key_exists(Session()->get('applocale'), config('app.available_locales'))) {
            app()->setLocale(Session()->get('applocale'));
        }
    }

}
