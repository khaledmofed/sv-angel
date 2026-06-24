<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() { return view('admin.services.index', ['services' => Service::orderBy('order')->get()]); }
    public function create() { return view('admin.services.form', ['service' => new Service()]); }

    public function store(Request $request)
    {
        $data = $request->validate(['title'=>'required|string','number'=>'nullable|string','description'=>'nullable|string','image'=>'nullable|image|max:5120','order'=>'integer','is_active'=>'boolean']);
        if ($request->hasFile('image')) $data['image'] = $request->file('image')->store('uploads/services','public');
        $data['items'] = array_filter(explode("\n", $request->input('items_text', '')));
        $data['is_active'] = $request->boolean('is_active', true);
        Service::create($data);
        return redirect()->route('admin.services.index')->with('success','Added!');
    }

    public function edit(Service $service) { return view('admin.services.form', compact('service')); }

    public function update(Request $request, Service $service)
    {
        $data = $request->validate(['title'=>'required|string','number'=>'nullable|string','description'=>'nullable|string','image'=>'nullable|image|max:5120','order'=>'integer','is_active'=>'boolean']);
        if ($request->hasFile('image')) $data['image'] = $request->file('image')->store('uploads/services','public');
        else unset($data['image']);
        $data['items'] = array_filter(explode("\n", $request->input('items_text', '')));
        $data['is_active'] = $request->boolean('is_active', true);
        $service->update($data);
        return redirect()->route('admin.services.index')->with('success','Updated!');
    }

    public function destroy(Service $service) { $service->delete(); return back()->with('success','Deleted!'); }
}
