<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogAdminController extends Controller
{
    private array $locales = ['ja', 'ko', 'es', 'zh-TW', 'vi'];

    public function index(Request $request)
    {
        $query = BlogPost::query();
        if ($request->filled('status')) $query->where('status', $request->status);
        $posts = $query->latest()->paginate(15);
        return view('admin.blog.index', compact('posts'));
    }

    public function create() { return view('admin.blog.form', ['post' => new BlogPost()]); }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'            => 'required|string',
            'slug'             => 'nullable|string|unique:blog_posts,slug',
            'excerpt'          => 'nullable|string',
            'content'          => 'nullable|string',
            'featured_image'   => 'nullable|image|max:5120',
            'category'         => 'nullable|string',
            'author'           => 'nullable|string',
            'read_time'        => 'nullable|string',
            'status'           => 'in:draft,published',
            'published_at'     => 'nullable|date',
            'external_url'     => 'nullable|url',
            'meta_title'       => 'nullable|string',
            'meta_description' => 'nullable|string',
        ]);
        $data['slug'] = $data['slug'] ?? Str::slug($data['title']);
        if ($request->hasFile('featured_image')) $data['featured_image'] = $request->file('featured_image')->store('uploads/blog','public');
        $data['translations'] = $this->mergeTranslations(new BlogPost(), $request);
        BlogPost::create($data);
        return redirect()->route('admin.blog.index')->with('success','Post created!');
    }

    public function edit(BlogPost $blog) { return view('admin.blog.form', ['post' => $blog]); }

    public function update(Request $request, BlogPost $blog)
    {
        $data = $request->validate([
            'title'            => 'required|string',
            'slug'             => 'nullable|string|unique:blog_posts,slug,'.$blog->id,
            'excerpt'          => 'nullable|string',
            'content'          => 'nullable|string',
            'featured_image'   => 'nullable|image|max:5120',
            'category'         => 'nullable|string',
            'author'           => 'nullable|string',
            'read_time'        => 'nullable|string',
            'status'           => 'in:draft,published',
            'published_at'     => 'nullable|date',
            'external_url'     => 'nullable|url',
            'meta_title'       => 'nullable|string',
            'meta_description' => 'nullable|string',
        ]);
        $data['slug'] = $data['slug'] ?? Str::slug($data['title']);
        if ($request->hasFile('featured_image')) $data['featured_image'] = $request->file('featured_image')->store('uploads/blog','public');
        else unset($data['featured_image']);
        $data['translations'] = $this->mergeTranslations($blog, $request);
        $blog->update($data);
        return redirect()->route('admin.blog.index')->with('success','Post updated!');
    }

    public function destroy(BlogPost $blog) { $blog->delete(); return back()->with('success','Deleted!'); }

    private function mergeTranslations(BlogPost $post, Request $request): array
    {
        $translations = $post->translations ?? [];
        foreach ($this->locales as $locale) {
            $t = $request->input("translations.$locale", []);
            if (array_filter($t)) {
                $translations[$locale] = array_merge($translations[$locale] ?? [], array_filter($t));
            }
        }
        return $translations;
    }
}
