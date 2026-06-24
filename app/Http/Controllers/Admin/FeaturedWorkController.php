<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeaturedWork;
use Illuminate\Http\Request;

class FeaturedWorkController extends Controller
{
    public function index() { return view('admin.featured_works.index', ['works' => FeaturedWork::orderBy('order')->get()]); }
    public function create() { return view('admin.featured_works.form', ['work' => new FeaturedWork()]); }

    public function store(Request $request)
    {
        $data = $request->validate(['title'=>'required|string','image'=>'nullable|image|max:5120','url'=>'nullable|string','is_featured'=>'boolean','is_active'=>'boolean','order'=>'integer']);
        if ($request->hasFile('image')) $data['image'] = $request->file('image')->store('uploads/works','public');
        $data['tags'] = array_filter(array_map('trim', explode(',', $request->input('tags_text',''))));
        $data['is_featured'] = $request->boolean('is_featured');
        $data['is_active'] = $request->boolean('is_active', true);
        FeaturedWork::create($data);
        return redirect()->route('admin.featured-works.index')->with('success','Added!');
    }

    public function edit(FeaturedWork $featuredWork) { return view('admin.featured_works.form', ['work' => $featuredWork]); }

    public function update(Request $request, FeaturedWork $featuredWork)
    {
        $data = $request->validate(['title'=>'required|string','image'=>'nullable|image|max:5120','url'=>'nullable|string','is_featured'=>'boolean','is_active'=>'boolean','order'=>'integer']);
        if ($request->hasFile('image')) $data['image'] = $request->file('image')->store('uploads/works','public');
        else unset($data['image']);
        $data['tags'] = array_filter(array_map('trim', explode(',', $request->input('tags_text',''))));
        $data['is_featured'] = $request->boolean('is_featured');
        $data['is_active'] = $request->boolean('is_active', true);
        $featuredWork->update($data);
        return redirect()->route('admin.featured-works.index')->with('success','Updated!');
    }

    public function destroy(FeaturedWork $featuredWork) { $featuredWork->delete(); return back()->with('success','Deleted!'); }
}
