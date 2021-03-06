<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
   /* 
    public function index()
    {
        return view('home');
    }
    */

    public function index()
    {
        return view('tampil.index');
    }

    public function imagelist()
    {
        return view('tampil.imagelist');
    }

     public function conlist()
    {
        return view('tampil.createcon');
    }

    public function about()
    {
        return view('tampil.about');
    }

     public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
