<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    private array $locales = ['ja', 'ko', 'es', 'zh-TW', 'vi'];

    public function edit()
    {
        $hero = Hero::first() ?? new Hero();
        return view('admin.hero.edit', compact('hero'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'title'       => 'nullable|string',
            'headline'    => 'required|string',
            'subheadline' => 'nullable|string',
            'description' => 'nullable|string',
            'cta_text'    => 'nullable|string',
            'cta_url'     => 'nullable|string',
            'video_url'   => 'nullable|string',
            'bg_image'    => 'nullable|image|max:5120',
        ]);

        $hero = Hero::first() ?? new Hero();

        if ($request->hasFile('bg_image')) {
            $data['bg_image'] = $request->file('bg_image')->store('uploads/hero', 'public');
        } else {
            unset($data['bg_image']);
        }

        $translations = $hero->translations ?? [];
        foreach ($this->locales as $locale) {
            $t = $request->input("translations.$locale", []);
            if (array_filter($t)) {
                $translations[$locale] = array_merge($translations[$locale] ?? [], array_filter($t));
            }
        }
        $data['translations'] = $translations;

        $hero->fill($data)->save();

        return back()->with('success', 'Hero section updated!');
    }
}
