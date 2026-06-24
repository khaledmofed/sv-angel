@extends('layouts.admin')
@section('title','Hero Section')

@section('content')
<div class="card p-4" style="max-width:800px">
  <form method="POST" action="{{ route('admin.hero.update') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label class="form-label fw-semibold">Headline *</label>
      <input type="text" name="headline" class="form-control" value="{{ old('headline',$hero->headline) }}" required>
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
    <button class="btn btn-dark">Save Hero Section</button>
  </form>
</div>
@endsection
