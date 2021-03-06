<?php

namespace App\Http\Controllers\Guest;

/**
 * Class HomeController
 * @package App\Http\Controllers\Guest
 */
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('guest.home.index');
    }
}
