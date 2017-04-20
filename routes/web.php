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

Route::get('/', function () {
    return view('welcome');
});

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
