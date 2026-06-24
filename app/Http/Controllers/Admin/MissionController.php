<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function edit()
    {
        return view('admin.mission.edit', [
            'bg_image'    => Setting::get('mission_bg_image', '/assets/img/our-services/mission-statement-bg.png'),
            'video_url'   => Setting::get('mission_video_url', ''),
            'video_thumb' => Setting::get('mission_video_thumb', ''),
            'title'       => Setting::get('mission_title', 'Built on principle'),
            'headline'    => Setting::get('mission_headline', 'Advocates for founders.'),
            'description' => Setting::get('mission_description', 'We have spent decades supporting transformative companies — investing long-term in founders as agents of positive change.'),
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'title'       => 'nullable|string',
            'headline'    => 'nullable|string',
            'description' => 'nullable|string',
            'video_url'   => 'nullable|url',
            'bg_image'    => 'nullable|image|max:4096',
            'video_thumb' => 'nullable|image|max:2048',
        ]);

        Setting::set('mission_title',       $request->title ?? '',       'mission');
        Setting::set('mission_headline',    $request->headline ?? '',    'mission');
        Setting::set('mission_description', $request->description ?? '', 'mission');
        Setting::set('mission_video_url',   $request->video_url ?? '',   'mission');

        if ($request->hasFile('bg_image')) {
            $path = $request->file('bg_image')->store('uploads/mission', 'public');
            Setting::set('mission_bg_image', \Storage::url($path), 'mission');
        }

        if ($request->hasFile('video_thumb')) {
            $path = $request->file('video_thumb')->store('uploads/mission', 'public');
            Setting::set('mission_video_thumb', \Storage::url($path), 'mission');
        }

        return back()->with('success', 'Mission section updated!');
    }
}
