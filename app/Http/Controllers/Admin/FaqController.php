<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index() { return view('admin.faqs.index', ['faqs' => Faq::orderBy('order')->get()]); }
    public function create() { return view('admin.faqs.form', ['faq' => new Faq()]); }

    public function store(Request $request)
    {
        $data = $request->validate(['question'=>'required|string','answer'=>'required|string','order'=>'integer','is_active'=>'boolean']);
        $data['is_active'] = $request->boolean('is_active', true);
        Faq::create($data);
        return redirect()->route('admin.faqs.index')->with('success','Added!');
    }

    public function edit(Faq $faq) { return view('admin.faqs.form', compact('faq')); }

    public function update(Request $request, Faq $faq)
    {
        $data = $request->validate(['question'=>'required|string','answer'=>'required|string','order'=>'integer','is_active'=>'boolean']);
        $data['is_active'] = $request->boolean('is_active', true);
        $faq->update($data);
        return redirect()->route('admin.faqs.index')->with('success','Updated!');
    }

    public function destroy(Faq $faq) { $faq->delete(); return back()->with('success','Deleted!'); }
}
