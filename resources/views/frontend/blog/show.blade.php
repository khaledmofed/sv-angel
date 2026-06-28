@extends('layouts.app')
@section('title', $post->meta_title ?? $post->title)
@section('meta_description', $post->meta_description ?? $post->excerpt)

@section('content')

<section class="sva-page-hero" style="padding-bottom:60px;">
  <div class="container" style="max-width:800px;">
    <a href="{{ route('blog') }}" class="sva-eyebrow" style="text-decoration:none;">← {{ __('Back to Insights') }}</a>
    <h1 class="sva-page-title">{{ $post->title }}</h1>
    <p style="color:rgba(255,255,255,.45);font-size:13px;margin:0;">
      {{ __('By') }} {{ $post->author }} · {{ $post->published_at?->format('d M Y') }} · {{ $post->read_time }}
    </p>
  </div>
</section>

<section class="sva-section">
  <div class="container" style="max-width:800px;">
    @if($post->featured_image)
    <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" class="sva-img" style="margin-bottom:40px;max-height:480px;">
    @endif
    <div style="font-size:1.05rem;line-height:1.85;color:var(--sva-body);">
      {!! nl2br(e($post->content)) !!}
    </div>
    <div style="margin-top:48px;padding-top:32px;border-top:1px solid var(--sva-border);">
      <a href="{{ route('blog') }}" class="sva-btn sva-btn--outline-dark">← {{ __('All Insights') }}</a>
    </div>
  </div>
</section>

@endsection
