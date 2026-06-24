@extends('layouts.admin')
@section('title', $brand->id ? 'Edit Brand' : 'Add Brand')
@section('content')
<div class="card p-4" style="max-width:500px">
  <form method="POST" action="{{ $brand->id ? route('admin.brands.update',$brand) : route('admin.brands.store') }}" enctype="multipart/form-data">
    @csrf @if($brand->id) @method('PUT') @endif
    <div class="mb-3"><label class="form-label fw-semibold">Name *</label><input type="text" name="name" class="form-control" value="{{ old('name',$brand->name) }}" required></div>
    <div class="mb-3"><label class="form-label fw-semibold">Logo</label>
      @if($brand->logo_image)<div class="mb-2"><img src="{{ Storage::url($brand->logo_image) }}" style="height:40px;"></div>@endif
      <input type="file" name="logo_image" class="form-control" accept="image/*">
    </div>
    <div class="mb-3"><label class="form-label fw-semibold">Website URL</label><input type="url" name="website_url" class="form-control" value="{{ old('website_url',$brand->website_url) }}"></div>
    <div class="row mb-3">
      <div class="col-md-4"><input type="number" name="order" class="form-control" placeholder="Order" value="{{ old('order',$brand->order??0) }}"></div>
      <div class="col-md-4 d-flex align-items-center"><div class="form-check"><input type="checkbox" name="is_active" class="form-check-input" value="1" {{ old('is_active',$brand->is_active??true)?'checked':'' }}><label class="form-check-label">Active</label></div></div>
    </div>
    <div class="d-flex gap-2"><button class="btn btn-dark">Save</button><a href="{{ route('admin.brands.index') }}" class="btn btn-outline-secondary">Cancel</a></div>
  </form>
</div>
@endsection
