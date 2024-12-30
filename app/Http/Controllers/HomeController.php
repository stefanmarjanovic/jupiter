<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    /**
     * logout
     *
     * @return void
     */
    public function logout()
    { 
        return view('logout');
        session()->flush();
    }

    /**
     * user
     *
     * @return void
     */ 
    public function user()
    {
        return view('user');
    }
}
