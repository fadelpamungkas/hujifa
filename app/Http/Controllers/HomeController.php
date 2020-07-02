<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 

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
        $wisata = DB::table('tempat_wisata')->get();
        return view('index')->with('wisata', $wisata);
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

    public function forms()
    {
        return view('forms');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function single()
    {
        $wisata = DB::table('tempat_wisata')->get();
        return view('portfolio-single')->with('wisata', $wisata);
    }

    public function store(Request $request){
		if ($request->hasFile('path')){

			$file = $request->file('path');
			$nama_file = $file->getClientOriginalName();
			$file->move('images',$nama_file);
			
			DB::table('tempat_wisata')->insert([
				'nama_wisata' => $request->nama_wisata,
				'harga' => $request->harga,
				//'jadwal_wisata' => $request->jadwal_wisata,
				'description' => $request->description,
				'path' => '/images/'.$file->getClientOriginalName(),
				'lokasi' => $request->lokasi,
				'contact_person' => $request->contact
			]);

		}

		return redirect('/');
	}

}
