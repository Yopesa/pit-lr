<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Roles;
use Illuminate\Http\Request;

class BasketController extends Controller
{

    public function basket()
    {
        return view('basket');
    }
}
