@extends('layouts.admin')
@section('title', isset($testimonial) && $testimonial->id ? 'Edit Testimonial' : 'Add Testimonial')

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
<div class="card p-4" style="max-width:700px">
  <form method="POST" action="{{ isset($testimonial) && $testimonial->id ? route('admin.testimonials.update',$testimonial) : route('admin.testimonials.store') }}" enctype="multipart/form-data">
    @csrf @if(isset($testimonial) && $testimonial->id) @method('PUT') @endif

    {{-- English --}}
    <h5 class="mb-3">🇺🇸 English (default)</h5>
    <div class="mb-3"><label class="form-label fw-semibold">Quote *</label><textarea name="quote" class="form-control" rows="4" required>{{ old('quote',$testimonial->quote??'') }}</textarea></div>
    <div class="row">
      <div class="col-md-4 mb-3"><label class="form-label fw-semibold">Author Name *</label><input type="text" name="author_name" class="form-control" value="{{ old('author_name',$testimonial->author_name??'') }}" required></div>
      <div class="col-md-4 mb-3"><label class="form-label fw-semibold">Title</label><input type="text" name="author_title" class="form-control" value="{{ old('author_title',$testimonial->author_title??'') }}"></div>
      <div class="col-md-4 mb-3"><label class="form-label fw-semibold">Company</label><input type="text" name="author_company" class="form-control" value="{{ old('author_company',$testimonial->author_company??'') }}"></div>
    </div>
    <div class="mb-3"><label class="form-label fw-semibold">Photo</label>
      @if(isset($testimonial) && $testimonial->author_photo)<div class="mb-2"><img src="{{ Storage::url($testimonial->author_photo) }}" style="height:50px;border-radius:50%;"></div>@endif
      <input type="file" name="author_photo" class="form-control" accept="image/*">
    </div>
    <div class="row mb-3">
      <div class="col-md-4"><input type="number" name="order" class="form-control" placeholder="Order" value="{{ old('order',$testimonial->order??0) }}"></div>
      <div class="col-md-4 d-flex align-items-center"><div class="form-check"><input type="checkbox" name="is_active" class="form-check-input" value="1" {{ old('is_active',$testimonial->is_active??true)?'checked':'' }}><label class="form-check-label">Active</label></div></div>
    </div>

    <hr>
    {{-- Translations --}}
    <h5 class="mb-3">Translations</h5>
    <ul class="nav nav-tabs mb-3" id="testimonialLangTabs">
      @foreach($locales as $code => $lang)
      <li class="nav-item">
        <button class="nav-link {{ $loop->first ? 'active' : '' }}" type="button"
                data-bs-toggle="tab" data-bs-target="#testimonial-{{ str_replace('-','_',$code) }}">
          {{ $lang['flag'] }} {{ $lang['name'] }}
        </button>
      </li>
      @endforeach
    </ul>
    <div class="tab-content">
      @foreach($locales as $code => $lang)
      @php
        $t = (isset($testimonial) && $testimonial->translations) ? ($testimonial->translations[$code] ?? []) : [];
        $slug = str_replace('-','_',$code);
      @endphp
      <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="testimonial-{{ $slug }}">
        <div class="mb-3">
          <label class="form-label fw-semibold">Quote</label>
          <textarea name="translations[{{ $code }}][quote]" class="form-control" rows="4">{{ old("translations.$code.quote", $t['quote'] ?? '') }}</textarea>
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">Author Title <small class="text-muted">(e.g. Co-Founder & CEO)</small></label>
          <input type="text" name="translations[{{ $code }}][author_title]" class="form-control"
                 value="{{ old("translations.$code.author_title", $t['author_title'] ?? '') }}">
        </div>
      </div>
      @endforeach
    </div>

    <div class="d-flex gap-2 mt-3"><button class="btn btn-dark">Save</button><a href="{{ route('admin.testimonials.index') }}" class="btn btn-outline-secondary">Cancel</a></div>
  </form>
</div>
@endsection
