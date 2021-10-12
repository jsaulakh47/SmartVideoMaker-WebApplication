<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
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
    public function videoMaker()
    {
        return view('video-maker');
    }
    public function videoUrl()
    {
        return view('video-url');
    }
    public function videoList()
    {
        return view('video-list');
    }	
}
