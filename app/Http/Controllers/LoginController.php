<?php

namespace App\Http\Controllers;

use View;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Session;
use App\models\User;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => [ 'logout', 'getLogout' ]]);
    }

    public function getLogin() {
        return View::make('login');
    }

    public function postLogin(Request $request) {
        $rules = array(
                'email'    => 'required|email', // make sure the email is an actual email
                'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {

            // create our user data for the authentication
            $email = Input::get('email');
            $userdata = array(
                'email'     => $email,
                'password'  => Input::get('password')
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {

                // validation successful!
                // redirect them to the secure section or whatever
                // return Redirect::to('secure');
                // for now we'll just echo success (even though echoing in a controller is bad)
                $user = User::where('email', $email)->first();
                //$request->session()->push('user', $user);
                //var_dump($user);
                //var_dump($email);
                session(['user' => $user]);
                echo 'SUCCESS!';
                return Redirect::to('home');

            } else {        

                // validation not successful, send back to form 
                echo 'NOT SUCCESS!';
                return Redirect::to('login');

            }

        }
    }

    public function getLogout() {
        Auth::logout();
        Session::flush();
        return Redirect::to('login');
    }
}
