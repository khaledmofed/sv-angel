<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use App\Models\Principle;
use App\Models\Service;
use App\Models\FeaturedWork;
use App\Models\Award;
use App\Models\Testimonial;
use App\Models\ProcessStep;
use App\Models\BrandLogo;
use App\Models\BlogPost;
use App\Models\AboutStory;

class HomeController extends Controller
{
    public function index()
    {
        $hero        = Hero::where('is_active', true)->first();
        $principles  = Principle::where('is_active', true)->orderBy('order')->get();
        $services    = Service::where('is_active', true)->orderBy('order')->take(4)->get();
        $works       = FeaturedWork::where('is_active', true)->orderBy('order')->take(3)->get();
        $awards      = Award::where('is_active', true)->orderBy('order')->get();
        $testimonials= Testimonial::where('is_active', true)->orderBy('order')->get();
        $steps       = ProcessStep::orderBy('order')->get();
        $brands      = BrandLogo::where('is_active', true)->orderBy('order')->get();
        $posts        = BlogPost::where('status', 'published')->latest('published_at')->get();
        $aboutStories = AboutStory::active()->get();

        return view('frontend.home', compact(
            'hero','principles','services','works','awards','testimonials','steps','brands','posts','aboutStories'
        ));
    }
}
