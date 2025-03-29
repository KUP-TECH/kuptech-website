<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index () {
        

        return view('pages.landing');
    }
    public function home_page () {
        

        return view('pages.homepage');
    }


    public function handle_msg(Request $request) {
        


        
        return back()->with('success', 'Message sent successfully. We will respond in due time');
    }
}
