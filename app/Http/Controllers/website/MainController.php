<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home () {
        return view('website.pages.home.home');
    }
    public function foods () {
        return view('website.pages.foods.foods');
    }
    public function drinks () {
        return view('website.pages.drinks.drink');
    }
    public function events () {
        return view('website.pages.events.event');
    }
    public function gallery () {
        return view('website.pages.gallery.gallery');
    }
    public function aboutUs () {
        return view('website.pages.aboutUs.aboutUs');
    }

}
