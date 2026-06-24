@extends('layouts.admin')
@section('title','Messages')
@section('content')
<h5 class="fw-bold mb-4">Contact Messages</h5>
<div class="card"><div class="table-responsive"><table class="table table-hover mb-0">
  <thead class="table-light"><tr><th>Name</th><th>Email</th><th>Subject</th><th>Date</th><th>Status</th><th></th></tr></thead>
  <tbody>
    @foreach($messages as $m)
    <tr class="{{ !$m->is_read ? 'fw-semibold' : '' }}">
      <td>{{ $m->name }}</td><td>{{ $m->email }}</td>
      <td>{{ Str::limit($m->subject,40) }}</td>
      <td>{{ $m->created_at->format('d M Y') }}</td>
      <td><span class="badge {{ $m->is_read?'bg-secondary':'bg-danger' }}">{{ $m->is_read?'Read':'Unread' }}</span></td>
      <td class="d-flex gap-1">
        <a href="{{ route('admin.messages.show',$m->id) }}" class="btn btn-sm btn-outline-dark">View</a>
        <form method="POST" action="{{ route('admin.messages.destroy',$m->id) }}" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Del</button></form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table></div></div>
<div class="mt-3">{{ $messages->links() }}</div>
@endsection
