<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Coaches;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;


class CoachRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:coach', ['except' => ['logout']]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

     public function showCoachRegistrationForm()
     {

         return view('auth.coachregister');
     }

     // public function register(Request $request)
     // {
     //     $this->validator($request->all())->validate();
     //
     //     event(new Registered($coach = $this->create($request->all())));
     //
     //     $this->guard()->login($coach);
     //
     //     return $this->registered($request, $coach)
     //                     ?: redirect($this->redirectPath());
     // }

     public function register(Request $request)
     {
         $this->validate(request(), [
             'firstname' => 'required',
             'email' => 'required|email',
             'password' => 'required'
         ]);

         $coach = Coaches::create(request(['firstname', 'email', 'password']));

         // auth()->login($coach);

         auth()->guard('coach')->login($coach);
                    // if successful, then redirect to their intended location
           return redirect()->intended(route('pages.coach.dashboard'));
         }





    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:6|confirmed',
    //     ]);
    // }
    //
    // /**
    //  * Create a new user instance after a valid registration.
    //  *
    //  * @param  array  $data
    //  * @return \App\User
    //  */
    // protected function create(array $data)
    // {
    //     return Coaches::create([
    //         'firstname' => $data['firstname'],
    //         'email' => $data['email'],
    //         'password' => bcrypt($data['password']),
    //     ]);
    // }
}
