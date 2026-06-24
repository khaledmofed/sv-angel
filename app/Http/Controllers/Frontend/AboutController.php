<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Principle;
use App\Models\TeamMember;
use App\Models\Faq;

class AboutController extends Controller
{
    public function index()
    {
        return view('frontend.about.index');
    }

    public function approach()
    {
        $principles = Principle::where('is_active', true)->orderBy('order')->get();
        return view('frontend.about.approach', compact('principles'));
    }

    public function team()
    {
        $members = TeamMember::where('is_active', true)->orderBy('order')->get();
        return view('frontend.about.team', compact('members'));
    }

    public function faq()
    {
        $faqs = Faq::where('is_active', true)->orderBy('order')->get();
        return view('frontend.faq', compact('faqs'));
    }
}
