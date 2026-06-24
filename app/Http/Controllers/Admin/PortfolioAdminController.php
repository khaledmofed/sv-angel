<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCompany;
use Illuminate\Http\Request;

class PortfolioAdminController extends Controller
{
    public function index(Request $request)
    {
        $query = PortfolioCompany::query();
        if ($request->filled('category')) $query->where('category', $request->category);
        if ($request->filled('stage'))    $query->where('stage', $request->stage);
        if ($request->filled('search'))   $query->where('name', 'like', '%'.$request->search.'%');
        $companies = $query->orderBy('name')->paginate(20)->withQueryString();
        return view('admin.portfolio.index', compact('companies'));
    }

    public function create()
    {
        return view('admin.portfolio.form', ['company' => new PortfolioCompany()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'        => 'required|string',
            'website_url' => 'nullable|url',
            'logo_url'    => 'nullable|url',
            'category'    => 'required|in:AI,Consumer,Crypto,Enterprise,Fintech,Healthcare,Marketplaces',
            'stage'       => 'required|in:Seed,Growth',
            'description' => 'nullable|string',
            'logo'        => 'nullable|image|max:2048',
            'is_featured' => 'boolean',
            'is_active'   => 'boolean',
            'order'       => 'integer',
        ]);
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('uploads/portfolio', 'public');
        }
        $data['is_featured'] = $request->boolean('is_featured');
        $data['is_active']   = $request->boolean('is_active', true);
        PortfolioCompany::create($data);
        return redirect()->route('admin.portfolio.index')->with('success', 'Company added!');
    }

    public function edit(PortfolioCompany $portfolio)
    {
        return view('admin.portfolio.form', ['company' => $portfolio]);
    }

    public function update(Request $request, PortfolioCompany $portfolio)
    {
        $data = $request->validate([
            'name'        => 'required|string',
            'website_url' => 'nullable|url',
            'logo_url'    => 'nullable|url',
            'category'    => 'required|in:AI,Consumer,Crypto,Enterprise,Fintech,Healthcare,Marketplaces',
            'stage'       => 'required|in:Seed,Growth',
            'description' => 'nullable|string',
            'logo'        => 'nullable|image|max:2048',
            'is_featured' => 'boolean',
            'is_active'   => 'boolean',
            'order'       => 'integer',
        ]);
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('uploads/portfolio', 'public');
        } else {
            unset($data['logo']);
        }
        $data['is_featured'] = $request->boolean('is_featured');
        $data['is_active']   = $request->boolean('is_active', true);
        $portfolio->update($data);
        return redirect()->route('admin.portfolio.index')->with('success', 'Company updated!');
    }

    public function destroy(PortfolioCompany $portfolio)
    {
        $portfolio->delete();
        return back()->with('success', 'Deleted!');
    }

    public function import(Request $request)
    {
        $request->validate(['csv' => 'required|file|mimes:csv,txt']);
        $handle = fopen($request->file('csv')->getRealPath(), 'r');
        fgetcsv($handle); // skip header
        while (($row = fgetcsv($handle)) !== false) {
            if (count($row) >= 3) {
                PortfolioCompany::updateOrCreate(
                    ['name' => trim($row[0])],
                    [
                        'category'    => trim($row[1]) ?: 'Enterprise',
                        'stage'       => trim($row[2]) ?: 'Seed',
                        'website_url' => isset($row[3]) ? trim($row[3]) ?: null : null,
                        'logo_url'    => isset($row[4]) ? trim($row[4]) ?: null : null,
                        'is_active'   => true,
                    ]
                );
            }
        }
        fclose($handle);
        return back()->with('success', 'Companies imported!');
    }
}
