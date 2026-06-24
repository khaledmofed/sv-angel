@extends('layouts.admin')
@section('title', $work->id ? 'Edit Work' : 'Add Work')
@section('content')
<div class="card p-4" style="max-width:600px">
  <form method="POST" action="{{ $work->id ? route('admin.featured-works.update',$work) : route('admin.featured-works.store') }}" enctype="multipart/form-data">
    @csrf @if($work->id) @method('PUT') @endif
    <div class="mb-3"><label class="form-label fw-semibold">Title *</label><input type="text" name="title" class="form-control" value="{{ old('title',$work->title) }}" required></div>
    <div class="mb-3"><label class="form-label fw-semibold">Image</label>
      @if($work->image)<div class="mb-2"><img src="{{ Storage::url($work->image) }}" style="height:60px;border-radius:4px;"></div>@endif
      <input type="file" name="image" class="form-control" accept="image/*">
    </div>
    <div class="mb-3"><label class="form-label fw-semibold">Tags <small class="text-muted">(comma separated)</small></label>
      <input type="text" name="tags_text" class="form-control" value="{{ old('tags_text', $work->tags ? implode(', ',$work->tags) : '') }}" placeholder="Branding, Design, Development"></div>
    <div class="mb-3"><label class="form-label fw-semibold">URL</label><input type="text" name="url" class="form-control" value="{{ old('url',$work->url) }}"></div>
    <div class="row mb-3">
      <div class="col-md-3"><input type="number" name="order" class="form-control" placeholder="Order" value="{{ old('order',$work->order??0) }}"></div>
      <div class="col-md-5 d-flex align-items-center gap-3">
        <div class="form-check"><input type="checkbox" name="is_featured" class="form-check-input" value="1" {{ old('is_featured',$work->is_featured)?'checked':'' }}><label class="form-check-label">Featured</label></div>
        <div class="form-check"><input type="checkbox" name="is_active" class="form-check-input" value="1" {{ old('is_active',$work->is_active??true)?'checked':'' }}><label class="form-check-label">Active</label></div>
      </div>
    </div>
    <div class="d-flex gap-2"><button class="btn btn-dark">Save</button><a href="{{ route('admin.featured-works.index') }}" class="btn btn-outline-secondary">Cancel</a></div>
  </form>
</div>
@endsection
