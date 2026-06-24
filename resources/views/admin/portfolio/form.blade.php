@extends('layouts.admin')
@section('title', $company->id ? 'Edit Company' : 'Add Company')
@section('content')
<div class="card p-4" style="max-width:700px">
  <form method="POST" action="{{ $company->id ? route('admin.portfolio.update',$company) : route('admin.portfolio.store') }}" enctype="multipart/form-data">
    @csrf @if($company->id) @method('PUT') @endif
    <div class="mb-3">
      <label class="form-label fw-semibold">Company Name *</label>
      <input type="text" name="name" class="form-control" value="{{ old('name',$company->name) }}" required>
    </div>
    <div class="mb-3">
      <label class="form-label fw-semibold">Logo</label>
      @php $fLogoSrc = $company->logo ? Storage::url($company->logo) : ($company->logo_url ?: null); @endphp
      @if($fLogoSrc)<div class="mb-2"><img src="{{ $fLogoSrc }}" style="height:40px;" onerror="this.style.display='none'"></div>@endif
      <input type="file" name="logo" class="form-control mb-2" accept="image/*">
      <input type="url" name="logo_url" class="form-control" placeholder="أو أدخل رابط الصورة (URL)" value="{{ old('logo_url', $company->logo_url) }}">
    </div>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Category *</label>
        <select name="category" class="form-select" required>
          @foreach(['AI','Consumer','Crypto','Enterprise','Fintech','Healthcare','Marketplaces'] as $cat)
          <option {{ old('category',$company->category)==$cat?'selected':'' }}>{{ $cat }}</option>
          @endforeach
        </select>
      </div>
      <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Stage *</label>
        <select name="stage" class="form-select" required>
          <option {{ old('stage',$company->stage)=='Seed'?'selected':'' }}>Seed</option>
          <option {{ old('stage',$company->stage)=='Growth'?'selected':'' }}>Growth</option>
        </select>
      </div>
    </div>
    <div class="mb-3">
      <label class="form-label fw-semibold">Website URL</label>
      <input type="url" name="website_url" class="form-control" value="{{ old('website_url',$company->website_url) }}">
    </div>
    <div class="mb-3">
      <label class="form-label fw-semibold">Description</label>
      <textarea name="description" class="form-control" rows="3">{{ old('description',$company->description) }}</textarea>
    </div>
    <div class="row mb-3">
      <div class="col-md-4"><input type="number" name="order" class="form-control" placeholder="Order" value="{{ old('order',$company->order ?? 0) }}"></div>
      <div class="col-md-4 d-flex align-items-center gap-3">
        <div class="form-check">
          <input type="checkbox" name="is_active" class="form-check-input" value="1" {{ old('is_active',$company->is_active ?? true) ? 'checked' : '' }}>
          <label class="form-check-label">Active</label>
        </div>
        <div class="form-check">
          <input type="checkbox" name="is_featured" class="form-check-input" value="1" {{ old('is_featured',$company->is_featured) ? 'checked' : '' }}>
          <label class="form-check-label">Featured</label>
        </div>
      </div>
    </div>
    <div class="d-flex gap-2">
      <button class="btn btn-dark">Save</button>
      <a href="{{ route('admin.portfolio.index') }}" class="btn btn-outline-secondary">Cancel</a>
    </div>
  </form>
</div>
@endsection
