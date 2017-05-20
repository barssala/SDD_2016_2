<?php

namespace App\Http\Controllers;

use View;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Http\Requests\RegisterUserFormRequest;
use App\Http\Requests\ForgotPasswordFormRequest;
use App\Http\Requests\ResetPasswordFormRequest;


use App\models\User;
use DateTime;

class RegisterController extends Controller
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

    public function register() {
        return View::make('register');
    }

    public function registerNewUser(RegisterUserFormRequest $request) {
        /*var_dump($request->username);
        var_dump($request->password);
        var_dump($request->firstname);
        var_dump($request->lastname);
        var_dump($request->email);
        var_dump($request->role);*/

        $role_id = 0; // admin
        if ($request->role == 'admin'){
            $role_id = 1;
        } else if ($request->role == 'teacher'){
            $role_id = 2;
        } else if ($request->role == 'student'){
            $role_id = 3;
        } else if ($request->role == 'ta'){
            $role_id = 4;
        }

        $user = new User;
        $user->user = $request->username;
        $user->password = bcrypt($request->password);
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->role_id = $role_id;
        $user->active = true;
        $user->deleted = false;
        $user->regisdate = new DateTime();
        $user->save();
        // return Redirect::to('login');
        return redirect()->route('login', ['user' => $user]);

    }

    public function forgotPassword() {
      return View::make('forgotPassword');
    }

    public function resetPassword(ForgotPasswordFormRequest $request) {

        $user = User::where('user', $request->username)->where('email', $request->email)->first();

        if($user){
          return View::make('resetPassword', array('user_id' => $user->id));
        }else {
          Session::flash('message', 'User or Email not found.');
          return redirect()->back();
        }
    }

    public function updatePassword(ResetPasswordFormRequest $request,$id) {
      $user = User::find($id);
      $user->password  = bcrypt($request->password);
      $user->save();

      return redirect()->route('login', ['user' => $user]);
    }
}
