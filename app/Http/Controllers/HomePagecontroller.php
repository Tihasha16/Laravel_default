<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePagecontroller extends Controller
{
    public function showHomePage(){
        return view('frontend.home');
    }

    public function showloginPage(){
        return view('frontend.login');
    }

    public function showRegisterPage(){
        return view('frontend.register');
    }

    // public function showAboutPage(){
    //     return view('frontend.about');
    // }

    public function showContactPage(){
        return view('frontend.contact');
    }
    public function showRoomPage(){
        return view('frontend.room');
    }


}
