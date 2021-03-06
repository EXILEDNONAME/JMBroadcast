<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Backend\Absent;
use App\User;

class LoginController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Login Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles authenticating users for the application and
  | redirecting them to your home screen. The controller uses a trait
  | to conveniently provide its functionality to your applications.
  |
  */

  use AuthenticatesUsers;

  /**
  * Where to redirect users after login.
  *
  * @var string
  */
  protected $redirectTo = '/dashboard';

  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }

  /**
  * Get the needed authorization credentials from the request.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return array
  */
  protected function credentials(Request $request)
  {
    if(is_numeric($request->get('email'))){
      return ['phone'=>$request->get('email'),'password'=>$request->get('password')];
    }
    elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
      return ['email' => $request->get('email'), 'password'=>$request->get('password')];
    }
    return ['username' => $request->get('email'), 'password'=>$request->get('password')];
  }

  // function authenticated(Request $request) {
  //   $email = $request->get('email');
  //
  //   if ( User::where('username', $email)->get('id')->first() == true ) {
  //     $data = User::where('username', $email)->get('id')->first();
  //     Absent::create(['id_user' => $data->id ]);
  //   }
  //
  //   if ( User::where('email', $email)->get('id')->first() == true ) {
  //     $data = User::where('email', $email)->get('id')->first();
  //     Absent::create(['id_user' => $data->id ]);
  //   }
  //
  //   if ( User::where('phone', $email)->get('id')->first() == true ) {
  //     $data = User::where('phone', $email)->get('id')->first();
  //     Absent::create(['id_user' => $data->id ]);
  //   }
  //
  // }
}
