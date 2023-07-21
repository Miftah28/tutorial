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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->role == 'adminpusat') {
            return view('home');
        } else if(auth()->user()->role == 'admincabang') {
            return view('home');
        } else if(auth()->user()->role == 'shelter') {
            return view('shelter.home');
        } else if(auth()->user()->role == 'donatur') {
            return view('donatur.index');
        } else if(auth()->user()->role == 'orangtua') {
            return view('orangtua.index');
        }
    }
}
