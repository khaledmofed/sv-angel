@extends('layouts.admin')
@section('title','Mission Statement Section')
@section('content')
<div class="card p-4" style="max-width:800px">
  <form method="POST" action="{{ route('admin.mission.update') }}" enctype="multipart/form-data">
    @csrf

    {{-- Text --}}
    <h6 class="fw-bold mb-3 border-bottom pb-2">Text Content</h6>
    <div class="mb-3">
      <label class="form-label fw-semibold">Sub-title <small class="text-muted">(e.g. "Built on principle")</small></label>
      <input type="text" name="title" class="form-control" value="{{ old('title', $title) }}">
    </div>
    <div class="mb-3">
      <label class="form-label fw-semibold">Main Headline</label>
      <input type="text" name="headline" class="form-control" value="{{ old('headline', $headline) }}">
    </div>
    <div class="mb-4">
      <label class="form-label fw-semibold">Description</label>
      <textarea name="description" class="form-control" rows="3">{{ old('description', $description) }}</textarea>
    </div>

    {{-- Background --}}
    <h6 class="fw-bold mb-3 border-bottom pb-2">Background Image</h6>
    <div class="mb-4">
      @if($bg_image)
      <div class="mb-2">
        <img src="{{ $bg_image }}" style="height:80px;border-radius:6px;object-fit:cover;width:160px;" onerror="this.style.display='none'">
        <small class="d-block text-muted mt-1">{{ $bg_image }}</small>
      </div>
      @endif
      <input type="file" name="bg_image" class="form-control" accept="image/*">
      <small class="text-muted">JPG/PNG/WebP — الخلفية الرمادية خلف النص</small>
    </div>

    {{-- Video --}}
    <h6 class="fw-bold mb-3 border-bottom pb-2">Video Section</h6>
    <div class="mb-3">
      <label class="form-label fw-semibold">Video URL <small class="text-muted">(YouTube أو Vimeo)</small></label>
      <input type="url" name="video_url" class="form-control" value="{{ old('video_url', $video_url) }}" placeholder="https://www.youtube.com/watch?v=...">
      <small class="text-muted">اتركه فارغاً لإخفاء الـ video section</small>
    </div>
    <div class="mb-4">
      <label class="form-label fw-semibold">Video Thumbnail Image</label>
      @if($video_thumb)
      <div class="mb-2">
        <img src="{{ $video_thumb }}" style="height:80px;border-radius:6px;object-fit:cover;width:160px;">
      </div>
      @endif
      <input type="file" name="video_thumb" class="form-control" accept="image/*">
      <small class="text-muted">الصورة التي تظهر مع زر التشغيل</small>
    </div>

    <button class="btn btn-dark">Save Mission Section</button>
  </form>
</div>
@endsection
