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
        $wisata = DB::table('tempat_wisata')->where('accepted', 1)->get();
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

    public function dashboard()
    {
        $wisata = DB::table('tempat_wisata')->get();
        $count = DB::select('SELECT COUNT(*) FROM tempat_wisata;');
        $data = [
            'wisata'  => $wisata,
            'count'   => $count
        ];
        return view('dashboard')->with($data);
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
        $wisata = DB::table('tempat_wisata')->where('accepted', 1)->get();
        return view('portfolio-single')->with('wisata', $wisata);
    }

    public function daftar(Request $request){
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
                'contact_person' => $request->contact,
                'rating' => 0,
                'accepted' => 0
			]);

		}

		return redirect('/portfolio');
    }
    
    public function delete($id){
        DB::table('tempat_wisata')->where('id_wisata', $id)->delete();
        return redirect('/portfolio');
    }

}
