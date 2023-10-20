<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function shop()
    {
        return view('frontend.shop');
    }
    public function whyUs()
    {
        return view('frontend.why');
    }
    public function testimonial()
    {
        return view('frontend.testimonial');
    }
    public function contactUs()
    {
        return view('frontend.contact');
    }
}
