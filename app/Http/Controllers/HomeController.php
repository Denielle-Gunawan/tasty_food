<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // this method will show home page for user
    public function index() {
        return view('home');
    }
}
