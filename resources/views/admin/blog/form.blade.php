@extends('layouts.admin')
@section('title', $post->id ? 'Edit Post' : 'New Post')

@php
$locales = [
    'ja'    => ['flag'=>'🇯🇵','name'=>'Japanese'],
    'ko'    => ['flag'=>'🇰🇷','name'=>'Korean'],
    'es'    => ['flag'=>'🇪🇸','name'=>'Spanish'],
    'zh-TW' => ['flag'=>'🇹🇼','name'=>'Traditional Chinese'],
    'vi'    => ['flag'=>'🇻🇳','name'=>'Vietnamese'],
];
@endphp

@section('content')
<div class="card p-4">
  <form method="POST" action="{{ $post->id ? route('admin.blog.update',$post) : route('admin.blog.store') }}" enctype="multipart/form-data">
    @csrf @if($post->id) @method('PUT') @endif
    <div class="row">
      <div class="col-md-8">
        <h5 class="mb-3">🇺🇸 English (default)</h5>
        <div class="mb-3"><label class="form-label fw-semibold">Title *</label><input type="text" name="title" class="form-control" value="{{ old('title',$post->title) }}" required></div>
        <div class="mb-3"><label class="form-label fw-semibold">Slug</label><input type="text" name="slug" class="form-control" value="{{ old('slug',$post->slug) }}" placeholder="auto-generated"></div>
        <div class="mb-3"><label class="form-label fw-semibold">Excerpt</label><textarea name="excerpt" class="form-control" rows="2">{{ old('excerpt',$post->excerpt) }}</textarea></div>
        <div class="mb-3"><label class="form-label fw-semibold">Content</label><textarea name="content" class="form-control" rows="15">{{ old('content',$post->content) }}</textarea></div>

        <hr>
        {{-- Translations --}}
        <h5 class="mb-3">Translations</h5>
        <ul class="nav nav-tabs mb-3" id="blogLangTabs">
          @foreach($locales as $code => $lang)
          <li class="nav-item">
            <button class="nav-link {{ $loop->first ? 'active' : '' }}" type="button"
                    data-bs-toggle="tab" data-bs-target="#blog-{{ str_replace('-','_',$code) }}">
              {{ $lang['flag'] }} {{ $lang['name'] }}
            </button>
          </li>
          @endforeach
        </ul>
        <div class="tab-content">
          @foreach($locales as $code => $lang)
          @php
            $t = $post->translations[$code] ?? [];
            $slug2 = str_replace('-','_',$code);
          @endphp
          <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="blog-{{ $slug2 }}">
            <div class="mb-3">
              <label class="form-label fw-semibold">Title</label>
              <input type="text" name="translations[{{ $code }}][title]" class="form-control"
                     value="{{ old("translations.$code.title", $t['title'] ?? '') }}">
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold">Excerpt</label>
              <textarea name="translations[{{ $code }}][excerpt]" class="form-control" rows="2">{{ old("translations.$code.excerpt", $t['excerpt'] ?? '') }}</textarea>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label class="form-label fw-semibold">Status</label>
          <select name="status" class="form-select">
            <option {{ old('status',$post->status)=='draft'?'selected':'' }}>draft</option>
            <option {{ old('status',$post->status)=='published'?'selected':'' }}>published</option>
          </select>
        </div>
        <div class="mb-3"><label class="form-label fw-semibold">Published At</label><input type="date" name="published_at" class="form-control" value="{{ old('published_at', $post->published_at?->format('Y-m-d')) }}"></div>
        <div class="mb-3"><label class="form-label fw-semibold">Author</label><input type="text" name="author" class="form-control" value="{{ old('author',$post->author) }}"></div>
        <div class="mb-3"><label class="form-label fw-semibold">Read Time</label><input type="text" name="read_time" class="form-control" value="{{ old('read_time',$post->read_time) }}" placeholder="5 mins"></div>
        <div class="mb-3"><label class="form-label fw-semibold">Category</label><input type="text" name="category" class="form-control" value="{{ old('category',$post->category) }}"></div>
        <div class="mb-3">
          <label class="form-label fw-semibold">External URL</label>
          <input type="text" name="external_url" class="form-control" value="{{ old('external_url',$post->external_url) }}" placeholder="https://...">
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">Featured Image</label>
          @if($post->featured_image)<div class="mb-2"><img src="{{ Storage::url($post->featured_image) }}" style="width:100%;border-radius:4px;"></div>@endif
          <input type="file" name="featured_image" class="form-control" accept="image/*">
        </div>
        <hr>
        <div class="mb-3"><label class="form-label fw-semibold">Meta Title</label><input type="text" name="meta_title" class="form-control" value="{{ old('meta_title',$post->meta_title) }}"></div>
        <div class="mb-3"><label class="form-label fw-semibold">Meta Description</label><textarea name="meta_description" class="form-control" rows="2">{{ old('meta_description',$post->meta_description) }}</textarea></div>
      </div>
    </div>
    <div class="d-flex gap-2 mt-2"><button class="btn btn-dark">Save Post</button><a href="{{ route('admin.blog.index') }}" class="btn btn-outline-secondary">Cancel</a></div>
  </form>
</div>
@endsection
