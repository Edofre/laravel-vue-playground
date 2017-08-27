<?php

namespace App\Http\Controllers\Admin;

/**
 * Class HomeController
 * @package App\Http\Controllers\Guest
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home.index');
    }
}
