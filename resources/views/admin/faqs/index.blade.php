@extends('layouts.admin')
@section('title','FAQs')
@section('content')
<div class="d-flex justify-content-between mb-4">
  <h5 class="fw-bold mb-0">FAQs</h5>
  <a href="{{ route('admin.faqs.create') }}" class="btn btn-dark btn-sm">+ Add</a>
</div>

{{-- Language filter tabs --}}
@php $langs = ['en'=>'🇺🇸 EN','ja'=>'🇯🇵 JA','ko'=>'🇰🇷 KO','es'=>'🇪🇸 ES','zh-TW'=>'🇹🇼 ZH','vi'=>'🇻🇳 VI']; @endphp
<ul class="nav nav-pills mb-3">
  <li class="nav-item"><a class="nav-link {{ !request('lang') ? 'active' : '' }}" href="{{ route('admin.faqs.index') }}">All</a></li>
  @foreach($langs as $code=>$label)
  <li class="nav-item"><a class="nav-link {{ request('lang')===$code ? 'active' : '' }}" href="{{ route('admin.faqs.index').'?lang='.urlencode($code) }}">{{ $label }}</a></li>
  @endforeach
</ul>

<div class="card"><div class="table-responsive"><table class="table table-hover mb-0">
  <thead class="table-light"><tr><th>Lang</th><th>Question</th><th>Active</th><th>Order</th><th></th></tr></thead>
  <tbody>
    @foreach($faqs as $f)
    <tr>
      <td><span class="badge bg-secondary">{{ strtoupper($f->lang) }}</span></td>
      <td>{{ Str::limit($f->question,70) }}</td>
      <td><span class="badge {{ $f->is_active?'bg-success':'bg-secondary' }}">{{ $f->is_active?'Yes':'No' }}</span></td>
      <td>{{ $f->order }}</td>
      <td>
        <a href="{{ route('admin.faqs.edit',$f) }}" class="btn btn-sm btn-outline-dark">Edit</a>
        <form method="POST" action="{{ route('admin.faqs.destroy',$f) }}" style="display:inline" onsubmit="return confirm('Delete?')">
          @csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Del</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table></div></div>
@endsection
