<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banners = array(
            ['jpg'=>'img/banner/slider1.jpg'],
            ['jpg'=>'img/banner/slider2.jpg'],
            ['jpg'=>'img/banner/slider3.jpg'],
            ['jpg'=>'img/banner/slider4.jpg'],
        );
        return view('pages.home.index')->with('banners',$banners);
    }

    public function property(){
        return view('pages.property.index');
    }
}
