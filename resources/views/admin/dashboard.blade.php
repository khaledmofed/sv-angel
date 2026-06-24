@extends('layouts.admin')
@section('title','Dashboard')

@section('content')
<div class="row g-4 mb-4">
  <div class="col-sm-6 col-lg-3">
    <div class="card stat-card p-4" style="background:linear-gradient(135deg,#667eea,#764ba2);color:#fff;">
      <div class="d-flex justify-content-between align-items-center">
        <div><h3 class="mb-0 fw-bold">{{ $stats['portfolio'] }}</h3><small>Portfolio Companies</small></div>
        <i class="bi bi-grid-3x3-gap" style="font-size:2rem;opacity:.7"></i>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3">
    <div class="card stat-card p-4" style="background:linear-gradient(135deg,#f093fb,#f5576c);color:#fff;">
      <div class="d-flex justify-content-between align-items-center">
        <div><h3 class="mb-0 fw-bold">{{ $stats['team'] }}</h3><small>Team Members</small></div>
        <i class="bi bi-people" style="font-size:2rem;opacity:.7"></i>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3">
    <div class="card stat-card p-4" style="background:linear-gradient(135deg,#4facfe,#00f2fe);color:#fff;">
      <div class="d-flex justify-content-between align-items-center">
        <div><h3 class="mb-0 fw-bold">{{ $stats['posts'] }}</h3><small>Blog Posts</small></div>
        <i class="bi bi-newspaper" style="font-size:2rem;opacity:.7"></i>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3">
    <div class="card stat-card p-4" style="background:linear-gradient(135deg,#43e97b,#38f9d7);color:#fff;">
      <div class="d-flex justify-content-between align-items-center">
        <div><h3 class="mb-0 fw-bold">{{ $stats['messages'] }}</h3><small>Unread Messages</small></div>
        <i class="bi bi-envelope" style="font-size:2rem;opacity:.7"></i>
      </div>
    </div>
  </div>
</div>

<div class="row g-4">
  <div class="col-lg-8">
    <div class="card p-4">
      <h6 class="fw-bold mb-3">Recent Messages</h6>
      @if($recent->count())
      <div class="table-responsive">
        <table class="table table-sm">
          <thead><tr><th>Name</th><th>Email</th><th>Subject</th><th>Date</th><th></th></tr></thead>
          <tbody>
            @foreach($recent as $msg)
            <tr class="{{ !$msg->is_read ? 'fw-semibold' : '' }}">
              <td>{{ $msg->name }}</td>
              <td>{{ $msg->email }}</td>
              <td>{{ Str::limit($msg->subject,30) }}</td>
              <td>{{ $msg->created_at->format('d M Y') }}</td>
              <td><a href="{{ route('admin.messages.show',$msg->id) }}" class="btn btn-sm btn-outline-dark">View</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      @else
      <p class="text-muted">No messages yet.</p>
      @endif
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card p-4">
      <h6 class="fw-bold mb-3">Quick Links</h6>
      <div class="d-grid gap-2">
        <a href="{{ route('admin.portfolio.create') }}" class="btn btn-outline-dark btn-sm">+ Add Company</a>
        <a href="{{ route('admin.blog.create') }}" class="btn btn-outline-dark btn-sm">+ New Blog Post</a>
        <a href="{{ route('admin.team.create') }}" class="btn btn-outline-dark btn-sm">+ Add Team Member</a>
        <a href="{{ route('admin.settings') }}" class="btn btn-outline-dark btn-sm">⚙ Settings</a>
        <a href="{{ route('home') }}" target="_blank" class="btn btn-dark btn-sm">View Site ↗</a>
      </div>
    </div>
  </div>
</div>
@endsection
