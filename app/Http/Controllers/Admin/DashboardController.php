<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCompany;
use App\Models\TeamMember;
use App\Models\BlogPost;
use App\Models\ContactSubmission;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'portfolio' => PortfolioCompany::count(),
            'team'      => TeamMember::count(),
            'posts'     => BlogPost::count(),
            'messages'  => ContactSubmission::where('is_read', false)->count(),
        ];
        $recent = ContactSubmission::latest()->take(5)->get();
        return view('admin.dashboard', compact('stats', 'recent'));
    }
}
