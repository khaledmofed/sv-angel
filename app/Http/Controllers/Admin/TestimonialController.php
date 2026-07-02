<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    private array $locales = ['ja', 'ko', 'es', 'zh-TW', 'vi'];

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
        $data['translations'] = $this->mergeTranslations(new Testimonial(), $request);
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
        $data['translations'] = $this->mergeTranslations($testimonial, $request);
        $testimonial->update($data);
        return redirect()->route('admin.testimonials.index')->with('success', 'Updated!');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return back()->with('success', 'Deleted!');
    }

    private function mergeTranslations(Testimonial $testimonial, Request $request): array
    {
        $translations = $testimonial->translations ?? [];
        foreach ($this->locales as $locale) {
            $t = $request->input("translations.$locale", []);
            if (array_filter($t)) {
                $translations[$locale] = array_merge($translations[$locale] ?? [], array_filter($t));
            }
        }
        return $translations;
    }
}
