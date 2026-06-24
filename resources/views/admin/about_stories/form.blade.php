@extends('layouts.admin')
@section('title', $story->id ? 'Edit Story' : 'New Story')
@section('content')
<div class="card p-4" style="max-width:780px">
  <form method="POST"
        action="{{ $story->id ? route('admin.about-stories.update',$story) : route('admin.about-stories.store') }}"
        enctype="multipart/form-data">
    @csrf
    @if($story->id) @method('PUT') @endif

    @if($errors->any())
      <div class="alert alert-danger"><ul class="mb-0">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
    @endif

    <div class="row">
      <div class="col-md-3 mb-3">
        <label class="form-label fw-semibold">Number *</label>
        <input type="text" name="number" class="form-control" value="{{ old('number',$story->number) }}" placeholder="01" required>
        <small class="text-muted">e.g. 01, 02, 03</small>
      </div>
      <div class="col-md-9 mb-3">
        <label class="form-label fw-semibold">Title *</label>
        <input type="text" name="title" class="form-control" value="{{ old('title',$story->title) }}" required>
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label fw-semibold">Description *</label>
      <textarea name="description" class="form-control" rows="5" required>{{ old('description',$story->description) }}</textarea>
      <small class="text-muted">This text appears on hover over the image.</small>
    </div>

    <div class="mb-3">
      <label class="form-label fw-semibold">Signature <small class="text-muted">(optional, shown in italic gold)</small></label>
      <input type="text" name="signature" class="form-control" value="{{ old('signature',$story->signature) }}" placeholder="— Ron Conway">
    </div>

    <div class="mb-3">
      <label class="form-label fw-semibold">Image</label>
      @if($story->image)
        <div class="mb-2">
          <img src="{{ Storage::url($story->image) }}" style="height:120px;border-radius:6px;object-fit:cover;">
          <small class="d-block text-muted mt-1">Current image — upload a new one to replace it.</small>
        </div>
      @endif
      <input type="file" name="image" class="form-control" accept="image/*">
      <small class="text-muted">Recommended: landscape 16:9, min 800×450px.</small>
    </div>

    <div class="mb-3">
      <label class="form-label fw-semibold">Image Link <small class="text-muted">(optional — clicking image opens this URL)</small></label>
      <input type="url" name="image_link" class="form-control" value="{{ old('image_link', $story->image_link) }}" placeholder="https://example.com">
    </div>

    <hr class="my-3">
    <p class="fw-semibold mb-2">Second Image <small class="text-muted">(shown side by side with the first image)</small></p>

    <div class="mb-3">
      <label class="form-label fw-semibold">Second Image <small class="text-muted">(upload file)</small></label>
      @if($story->second_image)
        <div class="mb-2">
          <img src="{{ Storage::url($story->second_image) }}" style="height:120px;border-radius:6px;object-fit:cover;">
          <small class="d-block text-muted mt-1">Current second image — upload a new one to replace it.</small>
        </div>
      @endif
      <input type="file" name="second_image" class="form-control" accept="image/*">
    </div>

    <div class="mb-3">
      <label class="form-label fw-semibold">Second Image URL <small class="text-muted">(external URL — used if no file uploaded)</small></label>
      @if($story->second_image_url && !$story->second_image)
        <div class="mb-2">
          <img src="{{ $story->second_image_url }}" style="height:80px;border-radius:6px;object-fit:cover;">
        </div>
      @endif
      <input type="url" name="second_image_url" class="form-control" value="{{ old('second_image_url', $story->second_image_url) }}" placeholder="https://example.com/image.jpg">
    </div>

    <div class="mb-3">
      <label class="form-label fw-semibold">Second Image Link <small class="text-muted">(optional)</small></label>
      <input type="url" name="second_image_link" class="form-control" value="{{ old('second_image_link', $story->second_image_link) }}" placeholder="https://example.com">
    </div>
    <hr class="my-3">

    <div class="row">
      <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Order</label>
        <input type="number" name="order" class="form-control" value="{{ old('order',$story->order ?? 0) }}">
        <small class="text-muted">Lower number = shown first.</small>
      </div>
      <div class="col-md-6 mb-3 d-flex align-items-end pb-1">
        <div class="form-check">
          <input type="checkbox" name="is_active" class="form-check-input" id="is_active" value="1"
            {{ old('is_active', $story->is_active ?? true) ? 'checked' : '' }}>
          <label class="form-check-label" for="is_active">Active (visible on site)</label>
        </div>
      </div>
    </div>

    <div class="d-flex gap-2 pt-2 border-top">
      <button class="btn btn-dark px-4">Save Story</button>
      <a href="{{ route('admin.about-stories.index') }}" class="btn btn-outline-secondary">Cancel</a>
    </div>
  </form>
</div>
@endsection
