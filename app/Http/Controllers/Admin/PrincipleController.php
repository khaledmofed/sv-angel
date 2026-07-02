<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Principle;
use Illuminate\Http\Request;

class PrincipleController extends Controller
{
    private array $locales = ['ja', 'ko', 'es', 'zh-TW', 'vi'];

    private function mergeTranslations(Principle $principle, Request $request): array
    {
        $translations = $principle->translations ?? [];
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
        $data['translations'] = $this->mergeTranslations(new Principle(), $request);
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
        $data['translations'] = $this->mergeTranslations($principle, $request);
        $principle->update($data);
        return redirect()->route('admin.principles.index')->with('success', 'Principle updated!');
    }

    public function destroy(Principle $principle)
    {
        $principle->delete();
        return back()->with('success', 'Deleted!');
    }
}
