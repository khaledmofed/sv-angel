<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCompany;

class PortfolioController extends Controller
{
    public function index()
    {
        $companies = PortfolioCompany::where('is_active', true)->orderBy('name')->get();
        return view('frontend.portfolio', compact('companies'));
    }
}
