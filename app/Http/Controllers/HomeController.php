<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('AdminDashboard.adminhome');
    }
    //     public function frontpage(){
    //     $all=Product::get();
    //     $cameraProducts = Product::whereHas('category', function ($query) {
    //     $query->where('title', 'camera');
    //    })->get();
    //     $laptopProducts= Product::whereHas('category', function ($query) {
    //     $query->where('title', 'laptop');
    // })->get();
    //     $mobileProducts= Product::whereHas('category', function ($query) {
    //     $query->where('title', 'mobile');
    // })->get();
    //     $headphoneProducts= Product::whereHas('category', function ($query) {
    //     $query->where('title', 'mobile');
    // })->get();

    //     return view('index',compact('all','cameraProducts','laptopProducts','mobileProducts','headphoneProducts'));
    //  }
}
