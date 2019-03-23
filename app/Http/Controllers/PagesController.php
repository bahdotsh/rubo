<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      return view('pages.common.index');
    }

    public function employer(){
      return view('pages.common.employer');
    }

    public function contact(){
      return view('pages.common.contact');
    }

    public function blog(){
      return view('pages.common.blog');
    }

    public function usersettings(){
      return view('pages.user.usersettings');
    }

    public function userchats(){
      return view('pages.user.userchats');
    }

    public function userdashboard(){
      return view('pages.user.userdashboard');
    }

}
