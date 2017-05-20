<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;

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
        // $user = session('user');
        //var_dump($user);
        return view('dashboard');
    }
}
