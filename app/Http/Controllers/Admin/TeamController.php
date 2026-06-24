<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $members = TeamMember::orderBy('order')->get();
        return view('admin.team.index', compact('members'));
    }

    public function create()
    {
        return view('admin.team.form', ['member' => new TeamMember()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'         => 'required|string',
            'title'        => 'required|string',
            'bio'          => 'nullable|string',
            'twitter_url'  => 'nullable|url',
            'linkedin_url' => 'nullable|url',
            'photo'        => 'nullable|image|max:5120',
            'order'        => 'integer',
            'is_active'    => 'boolean',
        ]);
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads/team', 'public');
        }
        $data['is_active'] = $request->boolean('is_active', true);
        TeamMember::create($data);
        return redirect()->route('admin.team.index')->with('success', 'Team member added!');
    }

    public function edit(TeamMember $team)
    {
        return view('admin.team.form', ['member' => $team]);
    }

    public function update(Request $request, TeamMember $team)
    {
        $data = $request->validate([
            'name'         => 'required|string',
            'title'        => 'required|string',
            'bio'          => 'nullable|string',
            'twitter_url'  => 'nullable|url',
            'linkedin_url' => 'nullable|url',
            'photo'        => 'nullable|image|max:5120',
            'order'        => 'integer',
            'is_active'    => 'boolean',
        ]);
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads/team', 'public');
        } else {
            unset($data['photo']);
        }
        $data['is_active'] = $request->boolean('is_active', true);
        $team->update($data);
        return redirect()->route('admin.team.index')->with('success', 'Updated!');
    }

    public function destroy(TeamMember $team)
    {
        $team->delete();
        return back()->with('success', 'Deleted!');
    }
}
