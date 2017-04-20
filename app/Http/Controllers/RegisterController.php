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
        var_dump($request->username);
        var_dump($request->firstname);
        var_dump($request->lastname);
        var_dump($request->email);
        var_dump($request->role);

    }
}
