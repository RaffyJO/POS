<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function foodBeverage()
    {
        return view('products', ['type' => 'Food Beverage']);
    }

    public function beautyHealth()
    {
        return view('products', ['type' => 'Beauty Health']);
    }

    public function homeCare()
    {
        return view('products', ['type' => 'Home Care']);
    }

    public function babyKid()
    {
        return view('products', ['type' => 'Baby Kid']);
    }
}
