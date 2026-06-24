@extends('layouts.admin')
@section('title', $faq->id ? 'Edit FAQ' : 'Add FAQ')
@section('content')
<div class="card p-4" style="max-width:700px">
  <form method="POST" action="{{ $faq->id ? route('admin.faqs.update',$faq) : route('admin.faqs.store') }}">
    @csrf @if($faq->id) @method('PUT') @endif
    <div class="mb-3"><label class="form-label fw-semibold">Question *</label><input type="text" name="question" class="form-control" value="{{ old('question',$faq->question) }}" required></div>
    <div class="mb-3"><label class="form-label fw-semibold">Answer *</label><textarea name="answer" class="form-control" rows="4" required>{{ old('answer',$faq->answer) }}</textarea></div>
    <div class="row mb-3">
      <div class="col-md-4"><input type="number" name="order" class="form-control" placeholder="Order" value="{{ old('order',$faq->order??0) }}"></div>
      <div class="col-md-4 d-flex align-items-center"><div class="form-check"><input type="checkbox" name="is_active" class="form-check-input" value="1" {{ old('is_active',$faq->is_active??true)?'checked':'' }}><label class="form-check-label">Active</label></div></div>
    </div>
    <div class="d-flex gap-2"><button class="btn btn-dark">Save</button><a href="{{ route('admin.faqs.index') }}" class="btn btn-outline-secondary">Cancel</a></div>
  </form>
</div>
@endsection
