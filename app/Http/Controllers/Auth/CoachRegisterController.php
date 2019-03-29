<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        $this->middleware('guest:coach',['except' => ['logout']]);

       }

             /**
              * Get a validator for an incoming registration request.
              *
              * @param  array  $data
              * @return \Illuminate\Contracts\Validation\Validator
              */
              protected function arraymaker(Request $request)
                {
                   $data = $request->all();
                   return $data;
                }

                /**
                 * Create a new user instance after a valid registration.
                 *
                 * @param  array  $data
                 * @return \App\User
                 */
                protected function create(array $data)
                {
                    $user = User::create([
                            'name' => $data['name'],
                            'email' => $data['email'],
                            'password' => bcrypt($data['password']),
                            ]);
                    $user->update(['user_type' => 2]);
                    return $user;
                }

                /**
                 * Handle a registration request for the application.
                 *
                 * @param  \Illuminate\Http\Request  $request
                 * @return \Illuminate\Http\Response
                 */
                public function register(Request $request)
                {
                    $this->arraymaker($request);

                    event(new Registered($user = $this->create($request->all())));

                    return redirect()->route('pages.coach.dashboard')
                        ->with(['success' => 'Congratulations! your account is registered, you will shortly receive an email to activate your account.']);
                }

   }
