<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Principle;
use Illuminate\Http\Request;

class PrincipleController extends Controller
{
    public function index()
    {
        $principles = Principle::orderBy('order')->get();
        return view('admin.principles.index', compact('principles'));
    }

    public function create()
    {
        return view('admin.principles.form', ['principle' => new Principle()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'number'         => 'required|string',
            'title'          => 'required|string',
            'description'    => 'nullable|string',
            'quote_text'     => 'nullable|string',
            'quote_author'   => 'nullable|string',
            'quote_position' => 'nullable|string',
            'order'          => 'integer',
            'is_active'      => 'boolean',
        ]);
        $data['is_active'] = $request->boolean('is_active');
        Principle::create($data);
        return redirect()->route('admin.principles.index')->with('success', 'Principle created!');
    }

    public function edit(Principle $principle)
    {
        return view('admin.principles.form', compact('principle'));
    }

    public function update(Request $request, Principle $principle)
    {
        $data = $request->validate([
            'number'         => 'required|string',
            'title'          => 'required|string',
            'description'    => 'nullable|string',
            'quote_text'     => 'nullable|string',
            'quote_author'   => 'nullable|string',
            'quote_position' => 'nullable|string',
            'order'          => 'integer',
            'is_active'      => 'boolean',
        ]);
        $data['is_active'] = $request->boolean('is_active');
        $principle->update($data);
        return redirect()->route('admin.principles.index')->with('success', 'Principle updated!');
    }

    public function destroy(Principle $principle)
    {
        $principle->delete();
        return back()->with('success', 'Deleted!');
    }
}
