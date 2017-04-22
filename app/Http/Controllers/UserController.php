<?php

namespace App\Http\Controllers;

use View;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\models\User;
use App\Http\Requests\RegisterUserFormRequest;
use App\Http\Requests\EditUserFormRequest;
use DateTime;
use Illuminate\Support\Facades\Redirect;

class UserController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function showProfile($id)
    {
        $user = User::find($id);

        // var_dump($user->user);
        // var_dump($user->toJson());

        return View::make('users', array('user' => $user));
    }

    public function userLists() {
        $users = User::all();
        return View::make('userlist', array('users' => $users)); 
    }

    public function createUser() {
        return View::make('createUser');
    }

    public function createNewUser(RegisterUserFormRequest $request) {
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
        return Redirect::to('userLists');
        // return redirect()->route('user', ['user' => $user]);
    }

    public function editUser($id) {
        $user  = User::find($id);
        $role_name = 'admin111';
        if ($user->role_id == 1){
            $role_name = 'admmin';
        } else if ($user->role_id == 2){
            $role_name = 'teacher';
        } else if ($user->role_id == 3){
            $role_name = 'student';
        } else if ($user->role_id == 4){
            $role_name = 'ta';
        }
        return View::make('editUser', ['user' => $user, 'role_name' => $role_name]);
    }

    public function updateUser(EditUserFormRequest $request, $id) {
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

        $user = user::find($id);
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->role_id = $role_id;
        $user->save();
        return Redirect::to('userLists');
    }

    public function deleteUser($id) {
        $user = user::destroy($id);
    
        return redirect('userLists');
    }

}
?>
