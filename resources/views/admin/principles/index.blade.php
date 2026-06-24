@extends('layouts.admin')
@section('title','Principles')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h5 class="mb-0 fw-bold">Principles</h5>
  <a href="{{ route('admin.principles.create') }}" class="btn btn-dark btn-sm">+ Add</a>
</div>
<div class="card">
  <div class="table-responsive">
    <table class="table table-hover mb-0">
      <thead class="table-light"><tr><th>#</th><th>Number</th><th>Title</th><th>Author</th><th>Active</th><th>Order</th><th></th></tr></thead>
      <tbody>
        @foreach($principles as $p)
        <tr>
          <td>{{ $p->id }}</td>
          <td><strong>{{ $p->number }}</strong></td>
          <td>{{ $p->title }}</td>
          <td>{{ $p->quote_author }}</td>
          <td><span class="badge {{ $p->is_active ? 'bg-success' : 'bg-secondary' }}">{{ $p->is_active ? 'Yes' : 'No' }}</span></td>
          <td>{{ $p->order }}</td>
          <td>
            <a href="{{ route('admin.principles.edit',$p) }}" class="btn btn-sm btn-outline-dark">Edit</a>
            <form method="POST" action="{{ route('admin.principles.destroy',$p) }}" style="display:inline" onsubmit="return confirm('Delete?')">
              @csrf @method('DELETE')
              <button class="btn btn-sm btn-outline-danger">Del</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
