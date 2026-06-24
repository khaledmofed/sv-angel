@extends('layouts.admin')
@section('title','Awards')
@section('content')
<div class="d-flex justify-content-between mb-4"><h5 class="fw-bold mb-0">Awards</h5><a href="{{ route('admin.awards.create') }}" class="btn btn-dark btn-sm">+ Add</a></div>
<div class="card"><div class="table-responsive"><table class="table table-hover mb-0">
  <thead class="table-light"><tr><th>Project</th><th>Award</th><th>Year</th><th>Active</th><th>Order</th><th></th></tr></thead>
  <tbody>
    @foreach($awards as $a)
    <tr>
      <td>{{ $a->project_name }}</td><td>{{ $a->award_name }}</td><td>{{ $a->year }}</td>
      <td><span class="badge {{ $a->is_active?'bg-success':'bg-secondary' }}">{{ $a->is_active?'Yes':'No' }}</span></td><td>{{ $a->order }}</td>
      <td><a href="{{ route('admin.awards.edit',$a) }}" class="btn btn-sm btn-outline-dark">Edit</a>
      <form method="POST" action="{{ route('admin.awards.destroy',$a) }}" style="display:inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Del</button></form></td>
    </tr>
    @endforeach
  </tbody>
</table></div></div>
@endsection
