@extends('layouts.admin')
@section('title', $award->id ? 'Edit Award' : 'Add Award')
@section('content')
<div class="card p-4" style="max-width:600px">
  <form method="POST" action="{{ $award->id ? route('admin.awards.update',$award) : route('admin.awards.store') }}" enctype="multipart/form-data">
    @csrf @if($award->id) @method('PUT') @endif
    <div class="mb-3"><label class="form-label fw-semibold">Project Name *</label><input type="text" name="project_name" class="form-control" value="{{ old('project_name',$award->project_name) }}" required></div>
    <div class="mb-3"><label class="form-label fw-semibold">Award Name *</label><input type="text" name="award_name" class="form-control" value="{{ old('award_name',$award->award_name) }}" required></div>
    <div class="mb-3"><label class="form-label fw-semibold">Year *</label><input type="text" name="year" class="form-control" value="{{ old('year',$award->year) }}" required></div>
    <div class="mb-3"><label class="form-label fw-semibold">Image</label><input type="file" name="award_image" class="form-control" accept="image/*"></div>
    <div class="row mb-3">
      <div class="col-md-4"><input type="number" name="order" class="form-control" placeholder="Order" value="{{ old('order',$award->order??0) }}"></div>
      <div class="col-md-4 d-flex align-items-center"><div class="form-check"><input type="checkbox" name="is_active" class="form-check-input" value="1" {{ old('is_active',$award->is_active??true)?'checked':'' }}><label class="form-check-label">Active</label></div></div>
    </div>
    <div class="d-flex gap-2"><button class="btn btn-dark">Save</button><a href="{{ route('admin.awards.index') }}" class="btn btn-outline-secondary">Cancel</a></div>
  </form>
</div>
@endsection
