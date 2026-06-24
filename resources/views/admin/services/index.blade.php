@extends('layouts.admin')
@section('title','Services')
@section('content')
<div class="d-flex justify-content-between mb-4"><h5 class="fw-bold mb-0">Services</h5><a href="{{ route('admin.services.create') }}" class="btn btn-dark btn-sm">+ Add</a></div>
<div class="card"><div class="table-responsive"><table class="table table-hover mb-0">
  <thead class="table-light"><tr><th>#</th><th>Image</th><th>Number</th><th>Title</th><th>Active</th><th>Order</th><th></th></tr></thead>
  <tbody>
    @foreach($services as $s)
    <tr>
      <td>{{ $s->id }}</td>
      <td>@if($s->image)<img src="{{ Storage::url($s->image) }}" style="height:35px;width:60px;object-fit:cover;border-radius:4px;">@else—@endif</td>
      <td>{{ $s->number }}</td><td>{{ $s->title }}</td>
      <td><span class="badge {{ $s->is_active?'bg-success':'bg-secondary' }}">{{ $s->is_active?'Yes':'No' }}</span></td><td>{{ $s->order }}</td>
      <td><a href="{{ route('admin.services.edit',$s) }}" class="btn btn-sm btn-outline-dark">Edit</a>
      <form method="POST" action="{{ route('admin.services.destroy',$s) }}" style="display:inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Del</button></form></td>
    </tr>
    @endforeach
  </tbody>
</table></div></div>
@endsection
