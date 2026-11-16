<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function catalog(){
        return view('catalog');
    }

    public function admin(){
        return view('admin');
    }
}
