<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    public function index() { return view('admin.awards.index', ['awards' => Award::orderBy('order')->get()]); }
    public function create() { return view('admin.awards.form', ['award' => new Award()]); }

    public function store(Request $request)
    {
        $data = $request->validate(['project_name'=>'required|string','award_name'=>'required|string','year'=>'required|string','award_image'=>'nullable|image|max:2048','order'=>'integer','is_active'=>'boolean']);
        if ($request->hasFile('award_image')) $data['award_image'] = $request->file('award_image')->store('uploads/awards','public');
        $data['is_active'] = $request->boolean('is_active', true);
        Award::create($data);
        return redirect()->route('admin.awards.index')->with('success','Added!');
    }

    public function edit(Award $award) { return view('admin.awards.form', compact('award')); }

    public function update(Request $request, Award $award)
    {
        $data = $request->validate(['project_name'=>'required|string','award_name'=>'required|string','year'=>'required|string','award_image'=>'nullable|image|max:2048','order'=>'integer','is_active'=>'boolean']);
        if ($request->hasFile('award_image')) $data['award_image'] = $request->file('award_image')->store('uploads/awards','public');
        else unset($data['award_image']);
        $data['is_active'] = $request->boolean('is_active', true);
        $award->update($data);
        return redirect()->route('admin.awards.index')->with('success','Updated!');
    }

    public function destroy(Award $award) { $award->delete(); return back()->with('success','Deleted!'); }
}
