<?php

namespace App\Http\Controllers;

use App\Models\CompanyStatistic;
use App\Models\HeroSection;
use App\Models\OurPrinciple;
use App\Models\OurTeam;
use App\Models\Product;
use App\Models\Testimonial;

class FrontController extends Controller
{
    public function index()
    {
        $statistics = CompanyStatistic::latest('id')->take(4)->get();
        $principles = OurPrinciple::latest('id')->take(3)->get();
        $products = Product::latest('id')->take(3)->get();
        $teams = OurTeam::latest('id')->take(7)->get();
        $testimonials = Testimonial::latest('id')->take(3)->get();
        $hero_sections = HeroSection::orderByDesc('id')->take(1)->get();

        return view('front.index', compact('statistics', 'principles', 'products', 'teams', 'testimonials', 'hero_sections'));
    }
}
