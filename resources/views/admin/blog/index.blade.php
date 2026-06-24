@extends('layouts.admin')
@section('title','Blog Posts')
@section('content')
<div class="d-flex justify-content-between mb-3 flex-wrap gap-2">
  <h5 class="fw-bold mb-0">Blog Posts</h5>
  <a href="{{ route('admin.blog.create') }}" class="btn btn-dark btn-sm">+ New Post</a>
</div>
<div class="card mb-3 p-3"><form class="d-flex gap-2" method="GET">
  <select name="status" class="form-select form-select-sm" style="max-width:150px">
    <option value="">All Status</option>
    <option {{ request('status')=='published'?'selected':'' }}>published</option>
    <option {{ request('status')=='draft'?'selected':'' }}>draft</option>
  </select>
  <button class="btn btn-dark btn-sm">Filter</button>
  <a href="{{ route('admin.blog.index') }}" class="btn btn-outline-secondary btn-sm">Reset</a>
</form></div>
<div class="card"><div class="table-responsive"><table class="table table-hover mb-0">
  <thead class="table-light"><tr><th>Title</th><th>Author</th><th>Status</th><th>Published</th><th></th></tr></thead>
  <tbody>
    @foreach($posts as $p)
    <tr>
      <td>{{ Str::limit($p->title,50) }}</td><td>{{ $p->author }}</td>
      <td><span class="badge {{ $p->status=='published'?'bg-success':'bg-secondary' }}">{{ $p->status }}</span></td>
      <td>{{ $p->published_at?->format('d M Y') ?? '—' }}</td>
      <td><a href="{{ route('admin.blog.edit',$p) }}" class="btn btn-sm btn-outline-dark">Edit</a>
      <form method="POST" action="{{ route('admin.blog.destroy',$p) }}" style="display:inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Del</button></form></td>
    </tr>
    @endforeach
  </tbody>
</table></div></div>
<div class="mt-3">{{ $posts->links() }}</div>
@endsection
