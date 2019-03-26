<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Route;

class CoachLoginController extends Controller
{

    public function __construct()
    {
      $this->middleware('guest:coach', ['except' => ['logout']]);
    }

    public function showLoginForm()
    {
      return view('auth.coachlogin');
    }

//     public function login(Request $request)
//     {
//       // Validate the form data
//       $this->validate($request, [
//         'email'   => 'required|email',
//         'password' => 'required|min:6'
//       ]);
//
//       $coach=request(['email','password']);
//
//       auth()->guard('coach')->login($coach);
//
//       return redirect()->intended(route('coach.dashboard'));
// }


  public function login()
  {
//     if (auth()->attempt(request(['email', 'password'])) == true) {
//         return redirect()->back()->withInput((request()->only('email', 'remember')));
//     }
//
//     return redirect('');
//
// }
        //  Attempt to log the user in
      if (Auth::guard('coach')->attempt(['email' => request()->email, 'password' => request()->password], request() ->remember)) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('coach.dashboard'));
      }
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput(request()->only('email', 'remember'));
    }


    public function logout()
    {
        Auth::guard('coach')->logout();
        return redirect('/coach');
    }
}
