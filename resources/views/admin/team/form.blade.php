@extends('layouts.admin')
@section('title', $member->id ? 'Edit Member' : 'Add Member')

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
<div class="card p-4" style="max-width:760px">
  <form method="POST" action="{{ $member->id ? route('admin.team.update',$member) : route('admin.team.store') }}" enctype="multipart/form-data">
    @csrf @if($member->id) @method('PUT') @endif

    <h5 class="mb-3">🇺🇸 English (default)</h5>
    <div class="row">
      <div class="col-md-6 mb-3"><label class="form-label fw-semibold">Name *</label><input type="text" name="name" class="form-control" value="{{ old('name',$member->name) }}" required></div>
      <div class="col-md-6 mb-3"><label class="form-label fw-semibold">Title *</label><input type="text" name="title" class="form-control" value="{{ old('title',$member->title) }}" required></div>
    </div>
    <div class="mb-3">
      <label class="form-label fw-semibold">Photo</label>
      @if($member->photo)<div class="mb-2"><img src="{{ Storage::url($member->photo) }}" style="height:60px;border-radius:50%;"></div>@endif
      <input type="file" name="photo" class="form-control" accept="image/*">
    </div>
    <div class="mb-3"><label class="form-label fw-semibold">Bio</label><textarea name="bio" class="form-control" rows="4">{{ old('bio',$member->bio) }}</textarea></div>
    <div class="row">
      <div class="col-md-6 mb-3"><label class="form-label fw-semibold">Twitter URL</label><input type="url" name="twitter_url" class="form-control" value="{{ old('twitter_url',$member->twitter_url) }}"></div>
      <div class="col-md-6 mb-3"><label class="form-label fw-semibold">LinkedIn URL</label><input type="url" name="linkedin_url" class="form-control" value="{{ old('linkedin_url',$member->linkedin_url) }}"></div>
    </div>
    <div class="row mb-3">
      <div class="col-md-4"><input type="number" name="order" class="form-control" placeholder="Order" value="{{ old('order',$member->order ?? 0) }}"></div>
      <div class="col-md-4 d-flex align-items-center"><div class="form-check"><input type="checkbox" name="is_active" class="form-check-input" value="1" {{ old('is_active',$member->is_active??true)?'checked':'' }}><label class="form-check-label">Active</label></div></div>
    </div>

    <hr>
    <h5 class="mb-3">Translations</h5>
    <ul class="nav nav-tabs mb-3" id="teamLangTabs">
      @foreach($locales as $code => $lang)
      <li class="nav-item">
        <button class="nav-link {{ $loop->first ? 'active' : '' }}" type="button"
                data-bs-toggle="tab" data-bs-target="#team-{{ str_replace('-','_',$code) }}">
          {{ $lang['flag'] }} {{ $lang['name'] }}
        </button>
      </li>
      @endforeach
    </ul>
    <div class="tab-content">
      @foreach($locales as $code => $lang)
      @php
        $t = $member->translations[$code] ?? [];
        $slug = str_replace('-','_',$code);
      @endphp
      <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="team-{{ $slug }}">
        <div class="mb-3">
          <label class="form-label fw-semibold">Title</label>
          <input type="text" name="translations[{{ $code }}][title]" class="form-control"
                 value="{{ old("translations.$code.title", $t['title'] ?? '') }}">
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">Bio</label>
          <textarea name="translations[{{ $code }}][bio]" class="form-control" rows="4">{{ old("translations.$code.bio", $t['bio'] ?? '') }}</textarea>
        </div>
      </div>
      @endforeach
    </div>

    <div class="d-flex gap-2 mt-3"><button class="btn btn-dark">Save</button><a href="{{ route('admin.team.index') }}" class="btn btn-outline-secondary">Cancel</a></div>
  </form>
</div>
@endsection
