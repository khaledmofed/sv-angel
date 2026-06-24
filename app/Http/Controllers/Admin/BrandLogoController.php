<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BrandLogo;
use Illuminate\Http\Request;

class BrandLogoController extends Controller
{
    public function index() { return view('admin.brands.index', ['brands' => BrandLogo::orderBy('order')->get()]); }
    public function create() { return view('admin.brands.form', ['brand' => new BrandLogo()]); }

    public function store(Request $request)
    {
        $data = $request->validate(['name'=>'required|string','logo_image'=>'nullable|image|max:2048','website_url'=>'nullable|url','is_active'=>'boolean','order'=>'integer']);
        if ($request->hasFile('logo_image')) $data['logo_image'] = $request->file('logo_image')->store('uploads/brands','public');
        $data['is_active'] = $request->boolean('is_active', true);
        BrandLogo::create($data);
        return redirect()->route('admin.brands.index')->with('success','Added!');
    }

    public function edit(BrandLogo $brand) { return view('admin.brands.form', compact('brand')); }

    public function update(Request $request, BrandLogo $brand)
    {
        $data = $request->validate(['name'=>'required|string','logo_image'=>'nullable|image|max:2048','website_url'=>'nullable|url','is_active'=>'boolean','order'=>'integer']);
        if ($request->hasFile('logo_image')) $data['logo_image'] = $request->file('logo_image')->store('uploads/brands','public');
        else unset($data['logo_image']);
        $data['is_active'] = $request->boolean('is_active', true);
        $brand->update($data);
        return redirect()->route('admin.brands.index')->with('success','Updated!');
    }

    public function destroy(BrandLogo $brand) { $brand->delete(); return back()->with('success','Deleted!'); }
}
