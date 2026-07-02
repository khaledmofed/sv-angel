@extends('layouts.admin')
@section('title','Hero Section')

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
<div class="card p-4" style="max-width:860px">
  @if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <form method="POST" action="{{ route('admin.hero.update') }}" enctype="multipart/form-data">
    @csrf

    {{-- English (default) --}}
    <h5 class="mb-3">🇺🇸 English (default)</h5>
    <div class="mb-3">
      <label class="form-label fw-semibold">Site Title (H1)</label>
      <input type="text" name="title" class="form-control" value="{{ old('title',$hero->title) }}">
      <small class="text-muted">The large heading shown in the hero (e.g. "SV Angel")</small>
    </div>
    <div class="mb-3">
      <label class="form-label fw-semibold">Headline *</label>
      <input type="text" name="headline" class="form-control" value="{{ old('headline',$hero->headline) }}" required>
      <small class="text-muted">HTML allowed (e.g. Advocates&lt;br&gt;for founders.)</small>
    </div>
    <div class="mb-3">
      <label class="form-label fw-semibold">Sub-headline</label>
      <input type="text" name="subheadline" class="form-control" value="{{ old('subheadline',$hero->subheadline) }}">
    </div>
    <div class="mb-3">
      <label class="form-label fw-semibold">Description</label>
      <textarea name="description" class="form-control" rows="3">{{ old('description',$hero->description) }}</textarea>
    </div>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">CTA Button Text</label>
        <input type="text" name="cta_text" class="form-control" value="{{ old('cta_text',$hero->cta_text) }}">
      </div>
      <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">CTA Button URL</label>
        <input type="text" name="cta_url" class="form-control" value="{{ old('cta_url',$hero->cta_url) }}">
      </div>
    </div>
    <div class="mb-3">
      <label class="form-label fw-semibold">Video URL (YouTube)</label>
      <input type="text" name="video_url" class="form-control" value="{{ old('video_url',$hero->video_url) }}">
    </div>
    <div class="mb-4">
      <label class="form-label fw-semibold">Background Image</label>
      @if($hero->bg_image)
      <div class="mb-2"><img src="{{ Storage::url($hero->bg_image) }}" style="height:80px;border-radius:4px;"></div>
      @endif
      <input type="file" name="bg_image" class="form-control" accept="image/*">
    </div>

    <hr>
    {{-- Translations --}}
    <h5 class="mb-3">Translations</h5>
    <ul class="nav nav-tabs mb-3" id="heroLangTabs">
      @foreach($locales as $code => $lang)
      <li class="nav-item">
        <button class="nav-link {{ $loop->first ? 'active' : '' }}" type="button"
                data-bs-toggle="tab" data-bs-target="#hero-{{ str_replace('-','_',$code) }}">
          {{ $lang['flag'] }} {{ $lang['name'] }}
        </button>
      </li>
      @endforeach
    </ul>
    <div class="tab-content">
      @foreach($locales as $code => $lang)
      @php $t = $hero->translations[$code] ?? []; $slug = str_replace('-','_',$code); @endphp
      <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="hero-{{ $slug }}">
        <div class="mb-3">
          <label class="form-label fw-semibold">Site Title (H1)</label>
          <input type="text" name="translations[{{ $code }}][title]" class="form-control"
                 value="{{ old("translations.$code.title", $t['title'] ?? '') }}">
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">Headline</label>
          <input type="text" name="translations[{{ $code }}][headline]" class="form-control"
                 value="{{ old("translations.$code.headline", $t['headline'] ?? '') }}">
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">Description</label>
          <textarea name="translations[{{ $code }}][description]" class="form-control" rows="3">{{ old("translations.$code.description", $t['description'] ?? '') }}</textarea>
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">CTA Button Text</label>
          <input type="text" name="translations[{{ $code }}][cta_text]" class="form-control"
                 value="{{ old("translations.$code.cta_text", $t['cta_text'] ?? '') }}">
        </div>
      </div>
      @endforeach
    </div>

    <button class="btn btn-dark mt-3">Save Hero Section</button>
  </form>
</div>
@endsection
