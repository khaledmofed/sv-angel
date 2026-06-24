@extends('layouts.admin')
@section('title','Featured Works')
@section('content')
<div class="d-flex justify-content-between mb-4"><h5 class="fw-bold mb-0">Featured Works</h5><a href="{{ route('admin.featured-works.create') }}" class="btn btn-dark btn-sm">+ Add</a></div>
<div class="card"><div class="table-responsive"><table class="table table-hover mb-0">
  <thead class="table-light"><tr><th>Image</th><th>Title</th><th>Featured</th><th>Active</th><th>Order</th><th></th></tr></thead>
  <tbody>
    @foreach($works as $w)
    <tr>
      <td>@if($w->image)<img src="{{ Storage::url($w->image) }}" style="height:35px;width:60px;object-fit:cover;border-radius:4px;">@else—@endif</td>
      <td>{{ $w->title }}</td>
      <td><span class="badge {{ $w->is_featured?'bg-warning text-dark':'bg-secondary' }}">{{ $w->is_featured?'Yes':'No' }}</span></td>
      <td><span class="badge {{ $w->is_active?'bg-success':'bg-secondary' }}">{{ $w->is_active?'Yes':'No' }}</span></td><td>{{ $w->order }}</td>
      <td><a href="{{ route('admin.featured-works.edit',$w) }}" class="btn btn-sm btn-outline-dark">Edit</a>
      <form method="POST" action="{{ route('admin.featured-works.destroy',$w) }}" style="display:inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Del</button></form></td>
    </tr>
    @endforeach
  </tbody>
</table></div></div>
@endsection
