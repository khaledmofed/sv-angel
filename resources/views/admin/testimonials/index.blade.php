@extends('layouts.admin')
@section('title','Testimonials')
@section('content')
<div class="d-flex justify-content-between mb-4"><h5 class="fw-bold mb-0">Testimonials</h5><a href="{{ route('admin.testimonials.create') }}" class="btn btn-dark btn-sm">+ Add</a></div>
<div class="card"><div class="table-responsive"><table class="table table-hover mb-0">
  <thead class="table-light"><tr><th>Photo</th><th>Author</th><th>Company</th><th>Active</th><th>Order</th><th></th></tr></thead>
  <tbody>
    @foreach($testimonials as $t)
    <tr>
      <td>@if($t->author_photo)<img src="{{ Storage::url($t->author_photo) }}" style="height:35px;width:35px;border-radius:50%;object-fit:cover;">@else—@endif</td>
      <td>{{ $t->author_name }}</td><td>{{ $t->author_company }}</td>
      <td><span class="badge {{ $t->is_active?'bg-success':'bg-secondary' }}">{{ $t->is_active?'Yes':'No' }}</span></td><td>{{ $t->order }}</td>
      <td><a href="{{ route('admin.testimonials.edit',$t) }}" class="btn btn-sm btn-outline-dark">Edit</a>
      <form method="POST" action="{{ route('admin.testimonials.destroy',$t) }}" style="display:inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Del</button></form></td>
    </tr>
    @endforeach
  </tbody>
</table></div></div>
@endsection
