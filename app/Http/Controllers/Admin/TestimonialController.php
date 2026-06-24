<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('order')->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.form', ['testimonial' => new Testimonial()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'quote'          => 'required|string',
            'author_name'    => 'required|string',
            'author_title'   => 'nullable|string',
            'author_company' => 'nullable|string',
            'author_photo'   => 'nullable|image|max:2048',
            'order'          => 'integer',
            'is_active'      => 'boolean',
        ]);
        if ($request->hasFile('author_photo')) {
            $data['author_photo'] = $request->file('author_photo')->store('uploads/testimonials', 'public');
        }
        $data['is_active'] = $request->boolean('is_active', true);
        Testimonial::create($data);
        return redirect()->route('admin.testimonials.index')->with('success', 'Added!');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.form', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $data = $request->validate([
            'quote'          => 'required|string',
            'author_name'    => 'required|string',
            'author_title'   => 'nullable|string',
            'author_company' => 'nullable|string',
            'author_photo'   => 'nullable|image|max:2048',
            'order'          => 'integer',
            'is_active'      => 'boolean',
        ]);
        if ($request->hasFile('author_photo')) {
            $data['author_photo'] = $request->file('author_photo')->store('uploads/testimonials', 'public');
        } else { unset($data['author_photo']); }
        $data['is_active'] = $request->boolean('is_active', true);
        $testimonial->update($data);
        return redirect()->route('admin.testimonials.index')->with('success', 'Updated!');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return back()->with('success', 'Deleted!');
    }
}
