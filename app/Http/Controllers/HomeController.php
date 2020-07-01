<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login-register');
    }

    public function cart()
    {
        return view('cart');
    }

    public function carousel()
    {
        return view('carousel');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function widgets()
    {
        return view('widgets');
    }

    public function loggedin()
    {
        return view('index-loggedin');
    }

    public function portofolio()
    {
        return view('portofolio');
    }

    public function demo_course()
    {
        return view('demo-course');
    }

}
