<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::all()->keyBy('key');
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $group = $request->input('group', 'general');
        $data  = $request->except(['_token', 'group', 'logo', 'logo_footer', 'favicon']);

        foreach ($data as $key => $value) {
            Setting::set($key, $value, $group);
        }

        if ($group === 'branding') {
            if ($request->hasFile('logo')) {
                $request->validate(['logo' => 'image|max:2048']);
                $ext = $request->file('logo')->getClientOriginalExtension();
                $filename = 'sva-color.' . $ext;
                $request->file('logo')->move(public_path('assets/img/logo'), $filename);
                Setting::set('site_logo', '/assets/img/logo/' . $filename, 'branding');
            }
        }

        if ($group === 'branding_footer') {
            if ($request->hasFile('logo_footer')) {
                $request->validate(['logo_footer' => 'image|max:2048']);
                $ext = $request->file('logo_footer')->getClientOriginalExtension();
                $filename = 'sva-footer.' . $ext;
                $request->file('logo_footer')->move(public_path('assets/img/logo'), $filename);
                Setting::set('site_logo_footer', '/assets/img/logo/' . $filename, 'branding');
            }
        }

        if ($group === 'branding_favicon') {
            if ($request->hasFile('favicon')) {
                $request->validate(['favicon' => 'mimes:ico,png,jpg,svg|max:512']);
                $request->file('favicon')->move(public_path(), 'favicon.ico');
            }
        }

        return back()->with('success', 'Settings saved successfully!');
    }
}
