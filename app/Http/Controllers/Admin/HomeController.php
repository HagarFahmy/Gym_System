<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class HomeController 
{
   
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('admin.home');
    }
}
