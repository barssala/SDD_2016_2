<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;
use App\models\Assignment;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $assignments = Assignment::take(4)->get();
        // $user = session('user');
        //var_dump($user);
        return view('dashboard', array('assignments' => $assignments));
    }
}
