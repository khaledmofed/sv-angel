@extends('layouts.admin')
@section('title','Process Steps')
@section('content')
<div class="d-flex justify-content-between mb-4"><h5 class="fw-bold mb-0">Process Steps</h5><a href="{{ route('admin.process.create') }}" class="btn btn-dark btn-sm">+ Add</a></div>
<div class="card"><div class="table-responsive"><table class="table table-hover mb-0">
  <thead class="table-light"><tr><th>Number</th><th>Title</th><th>Order</th><th></th></tr></thead>
  <tbody>
    @foreach($steps as $s)
    <tr>
      <td><strong>{{ $s->number }}</strong></td><td>{{ $s->title }}</td><td>{{ $s->order }}</td>
      <td><a href="{{ route('admin.process.edit',$s) }}" class="btn btn-sm btn-outline-dark">Edit</a>
      <form method="POST" action="{{ route('admin.process.destroy',$s) }}" style="display:inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Del</button></form></td>
    </tr>
    @endforeach
  </tbody>
</table></div></div>
@endsection
