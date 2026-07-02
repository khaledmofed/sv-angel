<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutStoryController extends Controller
{
    private array $locales = ['ja', 'ko', 'es', 'zh-TW', 'vi'];

    private function mergeTranslations(AboutStory $story, Request $request): array
    {
        $translations = $story->translations ?? [];
        foreach ($this->locales as $locale) {
            $t = $request->input("translations.$locale", []);
            if (array_filter($t)) {
                $translations[$locale] = array_merge($translations[$locale] ?? [], array_filter($t));
            }
        }
        return $translations;
    }

    public function index()
    {
        $stories = AboutStory::orderBy('order')->get();
        return view('admin.about_stories.index', compact('stories'));
    }

    public function create()
    {
        return view('admin.about_stories.form', ['story' => new AboutStory()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'number'            => 'required|string|max:10',
            'title'             => 'required|string|max:255',
            'description'       => 'required|string',
            'signature'         => 'nullable|string|max:255',
            'image'             => 'nullable|image|max:4096',
            'image_link'        => 'nullable|url|max:500',
            'second_image'      => 'nullable|image|max:4096',
            'second_image_url'  => 'nullable|url|max:1000',
            'second_image_link' => 'nullable|url|max:500',
            'order'             => 'integer',
            'is_active'         => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('about_stories', 'public');
        }
        if ($request->hasFile('second_image')) {
            $data['second_image'] = $request->file('second_image')->store('about_stories', 'public');
        }
        $data['is_active'] = $request->boolean('is_active');
        $data['translations'] = $this->mergeTranslations(new AboutStory(), $request);

        AboutStory::create($data);
        return redirect()->route('admin.about-stories.index')->with('success', 'Story created!');
    }

    public function edit(AboutStory $aboutStory)
    {
        return view('admin.about_stories.form', ['story' => $aboutStory]);
    }

    public function update(Request $request, AboutStory $aboutStory)
    {
        $data = $request->validate([
            'number'            => 'required|string|max:10',
            'title'             => 'required|string|max:255',
            'description'       => 'required|string',
            'signature'         => 'nullable|string|max:255',
            'image'             => 'nullable|image|max:4096',
            'image_link'        => 'nullable|url|max:500',
            'second_image'      => 'nullable|image|max:4096',
            'second_image_url'  => 'nullable|url|max:1000',
            'second_image_link' => 'nullable|url|max:500',
            'order'             => 'integer',
            'is_active'         => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($aboutStory->image) Storage::disk('public')->delete($aboutStory->image);
            $data['image'] = $request->file('image')->store('about_stories', 'public');
        } else {
            unset($data['image']);
        }
        if ($request->hasFile('second_image')) {
            if ($aboutStory->second_image) Storage::disk('public')->delete($aboutStory->second_image);
            $data['second_image'] = $request->file('second_image')->store('about_stories', 'public');
        } else {
            unset($data['second_image']);
        }
        $data['is_active'] = $request->boolean('is_active');
        $data['translations'] = $this->mergeTranslations($aboutStory, $request);

        $aboutStory->update($data);
        return redirect()->route('admin.about-stories.index')->with('success', 'Story updated!');
    }

    public function destroy(AboutStory $aboutStory)
    {
        if ($aboutStory->image) Storage::disk('public')->delete($aboutStory->image);
        $aboutStory->delete();
        return back()->with('success', 'Deleted!');
    }
}
