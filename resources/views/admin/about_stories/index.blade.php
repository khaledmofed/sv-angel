@extends('layouts.admin')
@section('title','About Stories')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h5 class="mb-0 fw-bold">About Stories <small class="text-muted fw-normal">(Our Story section on homepage)</small></h5>
  <a href="{{ route('admin.about-stories.create') }}" class="btn btn-dark btn-sm">+ Add Story</a>
</div>

@if(session('success'))
  <div class="alert alert-success alert-dismissible fade show">{{ session('success') }}<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
@endif

<div class="card">
  <div class="table-responsive">
    <table class="table table-hover mb-0 align-middle">
      <thead class="table-light">
        <tr>
          <th width="60">#</th>
          <th width="80">Image</th>
          <th width="60">No.</th>
          <th>Title</th>
          <th>Description</th>
          <th width="80">Active</th>
          <th width="60">Order</th>
          <th width="120"></th>
        </tr>
      </thead>
      <tbody>
        @forelse($stories as $s)
        <tr>
          <td>{{ $s->id }}</td>
          <td>
            @if($s->image)
              <img src="{{ Storage::url($s->image) }}" style="width:60px;height:45px;object-fit:cover;border-radius:4px;">
            @else
              <div style="width:60px;height:45px;background:#eee;border-radius:4px;display:flex;align-items:center;justify-content:center;color:#aaa;font-size:18px;">
                <i class="bi bi-image"></i>
              </div>
            @endif
          </td>
          <td><strong>{{ $s->number }}</strong></td>
          <td>{{ $s->title }}</td>
          <td style="max-width:300px;"><span style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">{{ $s->description }}</span></td>
          <td><span class="badge {{ $s->is_active ? 'bg-success' : 'bg-secondary' }}">{{ $s->is_active ? 'Yes' : 'No' }}</span></td>
          <td>{{ $s->order }}</td>
          <td>
            <a href="{{ route('admin.about-stories.edit', $s) }}" class="btn btn-sm btn-outline-dark">Edit</a>
            <form method="POST" action="{{ route('admin.about-stories.destroy', $s) }}" style="display:inline" onsubmit="return confirm('Delete this story?')">
              @csrf @method('DELETE')
              <button class="btn btn-sm btn-outline-danger">Del</button>
            </form>
          </td>
        </tr>
        @empty
        <tr><td colspan="8" class="text-center text-muted py-4">No stories yet. <a href="{{ route('admin.about-stories.create') }}">Add one</a>.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
