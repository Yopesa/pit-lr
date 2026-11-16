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

    public function about()
    {


        return view('about');
    }

    public function sales()
    {
        return view('sales');
    }

    public function admin()
    {
        return view('admin');
    }

}
