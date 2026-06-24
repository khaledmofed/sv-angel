@extends('layouts.admin')
@section('title','Message from ' . $message->name)
@section('content')
<div class="card p-4" style="max-width:700px">
  <div class="mb-3"><a href="{{ route('admin.messages.index') }}" class="btn btn-outline-secondary btn-sm">← Back</a></div>
  <table class="table table-bordered">
    <tr><th style="width:120px">From</th><td>{{ $message->name }}</td></tr>
    <tr><th>Email</th><td><a href="mailto:{{ $message->email }}">{{ $message->email }}</a></td></tr>
    <tr><th>Subject</th><td>{{ $message->subject ?: '—' }}</td></tr>
    <tr><th>Date</th><td>{{ $message->created_at->format('d M Y, H:i') }}</td></tr>
    <tr><th>Message</th><td style="white-space:pre-wrap">{{ $message->message }}</td></tr>
  </table>
  <form method="POST" action="{{ route('admin.messages.destroy',$message->id) }}" onsubmit="return confirm('Delete?')">
    @csrf @method('DELETE')
    <button class="btn btn-outline-danger btn-sm">Delete Message</button>
  </form>
</div>
@endsection
