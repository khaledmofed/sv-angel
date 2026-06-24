@extends('layouts.admin')
@section('title','Team Members')
@section('content')
<div class="d-flex justify-content-between mb-4">
  <h5 class="fw-bold mb-0">Team Members</h5>
  <a href="{{ route('admin.team.create') }}" class="btn btn-dark btn-sm">+ Add</a>
</div>
<div class="card"><div class="table-responsive"><table class="table table-hover mb-0">
  <thead class="table-light"><tr><th>Photo</th><th>Name</th><th>Title</th><th>Active</th><th>Order</th><th></th></tr></thead>
  <tbody>
    @foreach($members as $m)
    <tr>
      <td>@if($m->photo)<img src="{{ Storage::url($m->photo) }}" style="height:35px;width:35px;border-radius:50%;object-fit:cover;">@else—@endif</td>
      <td>{{ $m->name }}</td><td>{{ $m->title }}</td>
      <td><span class="badge {{ $m->is_active?'bg-success':'bg-secondary' }}">{{ $m->is_active?'Yes':'No' }}</span></td>
      <td>{{ $m->order }}</td>
      <td>
        <a href="{{ route('admin.team.edit',$m) }}" class="btn btn-sm btn-outline-dark">Edit</a>
        <form method="POST" action="{{ route('admin.team.destroy',$m) }}" style="display:inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Del</button></form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table></div></div>
@endsection
