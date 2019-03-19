<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      return view('pages.index');
    }

    public function employer(){
      return view('pages.employer');
    }

    public function contact(){
      return view('pages.contact');
    }

    public function blog(){
      return view('pages.blog');
    }

    public function usersettings(){
      return view('pages.usersettings');
    }

    public function userchats(){
      return view('pages.userchats');
    }

    public function userdashboard(){
      return view('pages.userdashboard');
    }

}
