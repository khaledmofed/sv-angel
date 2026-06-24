<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function edit()
    {
        $hero = Hero::first() ?? new Hero();
        return view('admin.hero.edit', compact('hero'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
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

        $hero->fill($data)->save();

        return back()->with('success', 'Hero section updated!');
    }
}
