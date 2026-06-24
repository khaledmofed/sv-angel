@extends('layouts.admin')
@section('title','Brand Logos')
@section('content')
<div class="d-flex justify-content-between mb-4"><h5 class="fw-bold mb-0">Brand Logos</h5><a href="{{ route('admin.brands.create') }}" class="btn btn-dark btn-sm">+ Add</a></div>
<div class="card"><div class="table-responsive"><table class="table table-hover mb-0">
  <thead class="table-light"><tr><th>Logo</th><th>Name</th><th>Active</th><th>Order</th><th></th></tr></thead>
  <tbody>
    @foreach($brands as $b)
    <tr>
      <td>@if($b->logo_image)<img src="{{ Storage::url($b->logo_image) }}" style="height:30px;max-width:80px;object-fit:contain;">@else—@endif</td>
      <td>{{ $b->name }}</td>
      <td><span class="badge {{ $b->is_active?'bg-success':'bg-secondary' }}">{{ $b->is_active?'Yes':'No' }}</span></td><td>{{ $b->order }}</td>
      <td><a href="{{ route('admin.brands.edit',$b) }}" class="btn btn-sm btn-outline-dark">Edit</a>
      <form method="POST" action="{{ route('admin.brands.destroy',$b) }}" style="display:inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Del</button></form></td>
    </tr>
    @endforeach
  </tbody>
</table></div></div>
@endsection
