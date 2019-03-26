<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:coach');
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pages.coach.dashboard');
    }
}
