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
        return view('login');
    }

    public function cart()
    {
        return view('cart');
    }

    public function admin()
    {
        return view('admin');
    }

    public function about()
    {
        return view('about');
    }

    public function rating()
    {
        return view('rating');
    }

    public function portofolio()
    {
        return view('portofolio');
    }

    public function single()
    {
        return view('portofolio-single');
    }

}
