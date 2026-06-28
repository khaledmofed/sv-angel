@extends('layouts.app')
@section('title','Portfolio — ' . setting('site_name'))

@section('content')

<section class="sva-page-hero" style="padding-bottom:60px;">
  <div class="container text-center" style="max-width:680px;">
    <span class="sva-eyebrow">{{ __('Investments') }}</span>
    <h1 class="sva-page-title">{{ __('Our Portfolio') }}</h1>
    <p class="sva-lead sva-lead--light" style="margin:0 auto;">{{ __('World-changing companies start with meaningful relationships.') }}</p>
  </div>
</section>

<section class="sva-section sva-section--soft">
  <div class="container">

    {{-- Filters --}}
    <div class="d-flex flex-wrap gap-2 justify-content-center mb-3">
      <button class="sva-filter-pill active" data-filter="all">{{ __('All') }}</button>
      <button class="sva-filter-pill" data-filter="AI">{{ __('AI') }}</button>
      <button class="sva-filter-pill" data-filter="Crypto">{{ __('Crypto') }}</button>
      <button class="sva-filter-pill" data-filter="Fintech">{{ __('Fintech') }}</button>
      <!-- <button class="sva-filter-pill" data-filter="Healthcare">Healthcare + Bio</button>
      <button class="sva-filter-pill" data-filter="Marketplaces">Marketplaces</button> -->
    </div>
    <div class="d-flex gap-2 justify-content-center mb-5">
      <button class="sva-filter-pill active" data-stage="all">{{ __('All Stages') }}</button>
      <button class="sva-filter-pill" data-stage="Seed">{{ __('Seed') }}</button>
      <button class="sva-filter-pill" data-stage="Growth">{{ __('Growth') }}</button>
    </div>

    {{-- Grid --}}
    <div class="row g-3" id="portfolioGrid">
      @foreach($companies as $company)
      <div class="col-6 col-sm-4 col-md-3 col-lg-2 portfolio-item"
           data-category="{{ $company->category }}"
           data-stage="{{ $company->stage }}">
        @php
          $logoSrc = $company->logo ? Storage::url($company->logo) : $company->logo_url;
          $siteUrl = $company->website_url;
        @endphp
        @if($siteUrl)
        <a href="{{ $siteUrl }}" target="_blank" rel="noopener noreferrer" class="sva-portfolio-card" style="text-decoration:none;color:inherit;">
        @else
        <div class="sva-portfolio-card">
        @endif
          @if($logoSrc)
          <img src="{{ $logoSrc }}" alt="{{ $company->name }}" style="max-height:60px;max-width:100%;object-fit:contain;margin-bottom:0;" onerror="this.style.display='none'">
          @else
          <div style="height:40px;display:flex;align-items:center;justify-content:center;margin-bottom:8px;">
            <span style="font-weight:700;font-size:13px;">{{ strtoupper(substr($company->name,0,3)) }}</span>
          </div>
          @endif
          <p class="sva-portfolio-card__name">{{ $company->name }}</p>
        @if($siteUrl)
        </a>
        @else
        </div>
        @endif
      </div>
      @endforeach
    </div>

    <div id="noResults" class="text-center py-5 d-none">
      <p style="color:var(--sva-mute);">No companies found.</p>
    </div>
  </div>
</section>

@endsection

@push('scripts')
<script>
(function(){
  var params = new URLSearchParams(window.location.search);
  var activeFilter = params.get('filter') || 'all';
  var activeStage  = params.get('stage')  || 'all';

  function applyFilters(){
    var items = document.querySelectorAll('.portfolio-item');
    var shown = 0;
    items.forEach(function(item){
      var cat = item.dataset.category, stage = item.dataset.stage;
      var show = (activeFilter==='all' || cat===activeFilter) && (activeStage==='all' || stage===activeStage);
      item.style.display = show ? '' : 'none';
      if(show) shown++;
    });
    document.getElementById('noResults').classList.toggle('d-none', shown > 0);
  }

  function syncButtons(){
    document.querySelectorAll('[data-filter]').forEach(function(b){
      b.classList.toggle('active', b.dataset.filter === activeFilter);
    });
    document.querySelectorAll('[data-stage]').forEach(function(b){
      b.classList.toggle('active', b.dataset.stage === activeStage);
    });
  }

  document.querySelectorAll('[data-filter]').forEach(function(btn){
    btn.addEventListener('click', function(){
      activeFilter = this.dataset.filter;
      syncButtons();
      applyFilters();
    });
  });
  document.querySelectorAll('[data-stage]').forEach(function(btn){
    btn.addEventListener('click', function(){
      activeStage = this.dataset.stage;
      syncButtons();
      applyFilters();
    });
  });

  // Apply on load (handles URL params from nav dropdown)
  syncButtons();
  applyFilters();
})();
</script>
@endpush
