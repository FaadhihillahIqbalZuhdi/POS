<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function food_beverage(){
        return view('food-beverage');
    }
    public function beauty_health(){
        return view('beauty-health');
    }
    public function home_care(){
        return view('home-care');
    }
    public function baby_kid(){
        return view('baby-kid');
    }
}