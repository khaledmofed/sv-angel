@extends('layouts.admin')
@section('title', $principle->id ? 'Edit Principle' : 'New Principle')

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
<div class="card p-4" style="max-width:800px">
  <form method="POST" action="{{ $principle->id ? route('admin.principles.update',$principle) : route('admin.principles.store') }}">
    @csrf @if($principle->id) @method('PUT') @endif

    {{-- English (default) --}}
    <h5 class="mb-3">🇺🇸 English (default)</h5>
    <div class="row">
      <div class="col-md-3 mb-3">
        <label class="form-label fw-semibold">Number *</label>
        <input type="text" name="number" class="form-control" value="{{ old('number',$principle->number) }}" placeholder="01" required>
      </div>
      <div class="col-md-9 mb-3">
        <label class="form-label fw-semibold">Title *</label>
        <input type="text" name="title" class="form-control" value="{{ old('title',$principle->title) }}" required>
      </div>
    </div>
    <div class="mb-3">
      <label class="form-label fw-semibold">Description</label>
      <textarea name="description" class="form-control" rows="3">{{ old('description',$principle->description) }}</textarea>
    </div>
    <div class="mb-3">
      <label class="form-label fw-semibold">Quote</label>
      <textarea name="quote_text" class="form-control" rows="3">{{ old('quote_text',$principle->quote_text) }}</textarea>
    </div>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Quote Author</label>
        <input type="text" name="quote_author" class="form-control" value="{{ old('quote_author',$principle->quote_author) }}">
      </div>
      <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Author Position</label>
        <input type="text" name="quote_position" class="form-control" value="{{ old('quote_position',$principle->quote_position) }}">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Order</label>
        <input type="number" name="order" class="form-control" value="{{ old('order',$principle->order ?? 0) }}">
      </div>
      <div class="col-md-6 mb-3 d-flex align-items-end">
        <div class="form-check">
          <input type="checkbox" name="is_active" class="form-check-input" id="is_active" value="1" {{ old('is_active',$principle->is_active ?? true) ? 'checked' : '' }}>
          <label class="form-check-label" for="is_active">Active</label>
        </div>
      </div>
    </div>

    <hr>
    {{-- Translations --}}
    <h5 class="mb-3">Translations</h5>
    <ul class="nav nav-tabs mb-3" id="pLangTabs">
      @foreach($locales as $code => $lang)
      <li class="nav-item">
        <button class="nav-link {{ $loop->first ? 'active' : '' }}" type="button"
                data-bs-toggle="tab" data-bs-target="#p-{{ str_replace('-','_',$code) }}">
          {{ $lang['flag'] }} {{ $lang['name'] }}
        </button>
      </li>
      @endforeach
    </ul>
    <div class="tab-content">
      @foreach($locales as $code => $lang)
      @php $t = ($principle->translations ?? [])[$code] ?? []; $slug = str_replace('-','_',$code); @endphp
      <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="p-{{ $slug }}">
        <div class="mb-3">
          <label class="form-label fw-semibold">Title</label>
          <input type="text" name="translations[{{ $code }}][title]" class="form-control"
                 value="{{ old("translations.$code.title", $t['title'] ?? '') }}">
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">Description</label>
          <textarea name="translations[{{ $code }}][description]" class="form-control" rows="3">{{ old("translations.$code.description", $t['description'] ?? '') }}</textarea>
        </div>
      </div>
      @endforeach
    </div>

    <div class="d-flex gap-2 mt-3">
      <button class="btn btn-dark">Save</button>
      <a href="{{ route('admin.principles.index') }}" class="btn btn-outline-secondary">Cancel</a>
    </div>
  </form>
</div>
@endsection
