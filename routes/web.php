<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/form',function(){
   return view('form');
});
/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('user/{id}', 'UserController@showProfile');

Route::get('getAssignments', 'AssignmentController@getAssignments');
Route::get('createAssignment', 'AssignmentController@createAssignment');
Route::get('editAssignment/{id}', 'AssignmentController@editAssignment');

Route::post('saveAssignment', ['as' => 'saveAssignment','uses' => 'AssignmentController@saveAssignment']);
Route::post('updateAssignment/{id}', ['as' => 'updateAssignment','uses' => 'AssignmentController@update']);
Route::get('deleteAssignment/{id}', 'AssignmentController@delete');

Route::get('createQuestion/{assignment_id}', 'QuestionController@createQuestion');
Route::get('editQuestion/{id}', 'QuestionController@editQuestion');

Route::post('saveQuestion/{assignment_id}', ['as' => 'saveQuestion','uses' => 'QuestionController@saveQuestion']);
Route::post('updateQuestion/{id}', ['as' => 'updateQuestion','uses' => 'QuestionController@update']);
Route::get('deleteQuestion/{id}', 'QuestionController@delete');

Route::get('createTestCase/{question_id}', 'TestCaseController@createTestCase');
Route::get('editTestCase/{id}', 'TestCaseController@editTestCase');

Route::post('saveTestCase/{question_id}', ['as' => 'saveTestCase','uses' => 'TestCaseController@saveTestCase']);
Route::post('updateTestCase/{id}', ['as' => 'updateTestCase','uses' => 'TestCaseController@update']);
Route::get('deleteTestCase/{id}', 'TestCaseController@delete');
Route::post('saveAssignment', ['as' => 'saveAssignment','uses' => 'AssignmentController@saveAssignment']);
//Auth::routes();

Route::get('/', function () {
    if(Auth::check()) {
        return redirect('/home');
    } else {
        return view('login');
    }
});


Route::get('login', [ 'as' => 'login', 'uses' => 'LoginController@getLogin']);
Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@postLogin']);
Route::get('logout', [ 'as' => 'logout', 'uses' => 'LoginController@getLogout']);

Route::get('home', [ 'as' => 'logout', 'uses' => 'DashboardController@home']);

Route::get('register', [ 'as' => 'register', 'uses' => 'RegisterController@register']);
Route::post('registerNewUser', [ 'as' => 'registerNewUser', 'uses' => 'RegisterController@registerNewUser']);

Route::get('forgotPassword', [ 'as' => 'forgotPassword', 'uses' => 'RegisterController@forgotPassword']);
Route::post('resetPassword', [ 'as' => 'resetPassword', 'uses' => 'RegisterController@resetPassword']);
Route::post('updatePassword/{id}', [ 'as' => 'resetPassword', 'uses' => 'RegisterController@updatePassword']);

Route::get('userLists', [ 'as' => 'userLists', 'uses' => 'UserController@userLists']);
Route::get('createUser', [ 'as' => 'createUser', 'uses' => 'UserController@createUser']);
Route::post('createNewUser', [ 'as' => 'createNewUser', 'uses' => 'UserController@createNewUser']);
Route::get('editUser/{id}', [ 'as' => 'editUser', 'uses' => 'UserController@editUser']);
Route::post('updateUser/{id}', [ 'as' => 'updateUser', 'uses' => 'UserController@updateUser']);
Route::get('deleteUser/{id}', 'UserController@deleteUser');
