@extends('layouts.admin')
@section('title', $step->id ? 'Edit Step' : 'Add Step')
@section('content')
<div class="card p-4" style="max-width:600px">
  <form method="POST" action="{{ $step->id ? route('admin.process.update',$step) : route('admin.process.store') }}">
    @csrf @if($step->id) @method('PUT') @endif
    <div class="row">
      <div class="col-md-3 mb-3"><label class="form-label fw-semibold">Number *</label><input type="text" name="number" class="form-control" value="{{ old('number',$step->number) }}" placeholder="001" required></div>
      <div class="col-md-9 mb-3"><label class="form-label fw-semibold">Title *</label><input type="text" name="title" class="form-control" value="{{ old('title',$step->title) }}" required></div>
    </div>
    <div class="mb-3"><label class="form-label fw-semibold">Description</label><textarea name="description" class="form-control" rows="3">{{ old('description',$step->description) }}</textarea></div>
    <div class="mb-3"><label class="form-label fw-semibold">Order</label><input type="number" name="order" class="form-control" value="{{ old('order',$step->order??0) }}" style="max-width:120px"></div>
    <div class="d-flex gap-2"><button class="btn btn-dark">Save</button><a href="{{ route('admin.process.index') }}" class="btn btn-outline-secondary">Cancel</a></div>
  </form>
</div>
@endsection
