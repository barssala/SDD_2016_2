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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/{id}', 'UserController@showProfile');

Route::get('getAssignments', 'AssignmentController@getAssignments');
Route::get('createAssignment', 'AssignmentController@createAssignment');
Route::post('saveAssignment', ['as' => 'saveAssignment','uses' => 'AssignmentController@saveAssignment']);