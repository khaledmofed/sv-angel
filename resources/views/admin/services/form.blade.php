@extends('layouts.admin')
@section('title', $service->id ? 'Edit Service' : 'Add Service')
@section('content')
<div class="card p-4" style="max-width:700px">
  <form method="POST" action="{{ $service->id ? route('admin.services.update',$service) : route('admin.services.store') }}" enctype="multipart/form-data">
    @csrf @if($service->id) @method('PUT') @endif
    <div class="row">
      <div class="col-md-3 mb-3"><label class="form-label fw-semibold">Number</label><input type="text" name="number" class="form-control" value="{{ old('number',$service->number) }}" placeholder="01"></div>
      <div class="col-md-9 mb-3"><label class="form-label fw-semibold">Title *</label><input type="text" name="title" class="form-control" value="{{ old('title',$service->title) }}" required></div>
    </div>
    <div class="mb-3"><label class="form-label fw-semibold">Description</label><textarea name="description" class="form-control" rows="3">{{ old('description',$service->description) }}</textarea></div>
    <div class="mb-3">
      <label class="form-label fw-semibold">Image</label>
      @if($service->image)<div class="mb-2"><img src="{{ Storage::url($service->image) }}" style="height:60px;border-radius:4px;"></div>@endif
      <input type="file" name="image" class="form-control" accept="image/*">
    </div>
    <div class="mb-3">
      <label class="form-label fw-semibold">Bullet Items <small class="text-muted">(one per line)</small></label>
      <textarea name="items_text" class="form-control" rows="4" placeholder="Logo & Visual Identity&#10;Brand Guidelines&#10;Art Direction">{{ old('items_text', $service->items ? implode("\n",$service->items) : '') }}</textarea>
    </div>
    <div class="row mb-3">
      <div class="col-md-4"><input type="number" name="order" class="form-control" placeholder="Order" value="{{ old('order',$service->order??0) }}"></div>
      <div class="col-md-4 d-flex align-items-center"><div class="form-check"><input type="checkbox" name="is_active" class="form-check-input" value="1" {{ old('is_active',$service->is_active??true)?'checked':'' }}><label class="form-check-label">Active</label></div></div>
    </div>
    <div class="d-flex gap-2"><button class="btn btn-dark">Save</button><a href="{{ route('admin.services.index') }}" class="btn btn-outline-secondary">Cancel</a></div>
  </form>
</div>
@endsection
