@extends('layouts.admin')
@section('title','Portfolio Companies')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
  <h5 class="mb-0 fw-bold">Portfolio Companies ({{ $companies->total() }})</h5>
  <div class="d-flex gap-2">
    <a href="{{ route('admin.portfolio.create') }}" class="btn btn-dark btn-sm">+ Add</a>
    <button class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#importModal">↑ Import CSV</button>
  </div>
</div>

{{-- Filters --}}
<div class="card p-3 mb-3">
  <form class="row g-2" method="GET">
    <div class="col-md-4"><input type="text" name="search" class="form-control form-control-sm" placeholder="Search..." value="{{ request('search') }}"></div>
    <div class="col-md-3">
      <select name="category" class="form-select form-select-sm">
        <option value="">All Categories</option>
        @foreach(['AI','Consumer','Crypto','Enterprise','Fintech','Healthcare','Marketplaces'] as $c)
        <option {{ request('category')==$c?'selected':'' }}>{{ $c }}</option>
        @endforeach
      </select>
    </div>
    <div class="col-md-2">
      <select name="stage" class="form-select form-select-sm">
        <option value="">All Stages</option>
        <option {{ request('stage')=='Seed'?'selected':'' }}>Seed</option>
        <option {{ request('stage')=='Growth'?'selected':'' }}>Growth</option>
      </select>
    </div>
    <div class="col-md-1"><button class="btn btn-dark btn-sm w-100">Filter</button></div>
    <div class="col-md-1"><a href="{{ route('admin.portfolio.index') }}" class="btn btn-outline-secondary btn-sm w-100">Reset</a></div>
  </form>
</div>

<div class="card">
  <div class="table-responsive">
    <table class="table table-hover mb-0">
      <thead class="table-light"><tr><th>Logo</th><th>Name</th><th>Category</th><th>Stage</th><th>Active</th><th></th></tr></thead>
      <tbody>
        @foreach($companies as $c)
        <tr>
          @php
            $logoSrc = $c->logo ? Storage::url($c->logo) : ($c->logo_url ?: null);
          @endphp
          <td>@if($logoSrc)<img src="{{ $logoSrc }}" style="height:30px;width:60px;object-fit:contain;" onerror="this.style.display='none';this.nextElementSibling.style.display=''"><span style="display:none">—</span>@else—@endif</td>
          <td>{{ $c->name }}</td>
          <td><span class="badge bg-secondary">{{ $c->category }}</span></td>
          <td><span class="badge {{ $c->stage=='Growth'?'bg-success':'bg-info' }}">{{ $c->stage }}</span></td>
          <td><span class="badge {{ $c->is_active?'bg-success':'bg-secondary' }}">{{ $c->is_active?'Yes':'No' }}</span></td>
          <td>
            <a href="{{ route('admin.portfolio.edit',$c) }}" class="btn btn-sm btn-outline-dark">Edit</a>
            <form method="POST" action="{{ route('admin.portfolio.destroy',$c) }}" style="display:inline" onsubmit="return confirm('Delete?')">
              @csrf @method('DELETE') <button class="btn btn-sm btn-outline-danger">Del</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<div class="mt-3">{{ $companies->links() }}</div>

{{-- Import Modal --}}
<div class="modal fade" id="importModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"><h5 class="modal-title">Import CSV</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
      <div class="modal-body">
        <p class="text-muted small">CSV format: <code>name, category, stage, website_url, logo_url</code></p>
        <form method="POST" action="{{ route('admin.portfolio.import') }}" enctype="multipart/form-data">
          @csrf
          <input type="file" name="csv" class="form-control mb-3" accept=".csv,.txt">
          <button class="btn btn-dark">Import</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
