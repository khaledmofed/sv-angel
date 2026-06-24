@extends('layouts.app')
@section('title','Our Approach — ' . setting('site_name'))

@section('content')

<section class="sva-page-hero" style="padding-bottom:60px;">
  <div class="container text-center" style="max-width:720px;">
    <span class="sva-eyebrow">Philosophy</span>
    <h1 class="sva-page-title">Built on Principle</h1>
    <p class="sva-lead sva-lead--light" style="margin:0 auto;">Principles guiding our investment partnerships.</p>
  </div>
</section>

<section class="sva-section">
  <div class="container">
    @foreach($principles as $p)
    <div class="sva-principle">
      <div class="row align-items-start g-4">
        <div class="col-lg-4">
          <p class="sva-principle__num">{{ $p->number }}</p>
          <h2 class="sva-principle__title">{{ $p->title }}</h2>
        </div>
        <div class="col-lg-8">
          @if($p->quote_text)
          <div class="sva-blockquote">
            <p>"{{ $p->quote_text }}"</p>
            <footer>— {{ $p->quote_author }}, <small style="color:var(--sva-mute);">{{ $p->quote_position }}</small></footer>
          </div>
          @endif
          <p class="sva-lead">{{ $p->description }}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>

@endsection
