@extends('layouts.app')
@section('title','Insights — ' . setting('site_name'))

@section('content')

<section class="sva-page-hero" style="padding-bottom:60px;">
  <div class="container" style="max-width:700px;">
    <span class="sva-eyebrow">{{ __('Insights') }}</span>
    <h1 class="sva-page-title">{{ __('Ideas & Perspectives') }}</h1>
    <p class="sva-lead sva-lead--light">{{ __('Thinking from the SV Angel team on startups, technology, and the future.') }}</p>
  </div>
</section>

<section class="sva-section sva-section--soft">
  <div class="container">
    <div class="row g-4">
      @foreach($posts as $post)
      <div class="col-md-6 col-lg-4">
        <div class="sva-blog-card">
          <a href="{{ route('blog.show', $post->slug) }}">
            @if($post->featured_image)
            <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" class="sva-blog-card__img">
            @else
            <img src="/assets/img/services/services-7.jpg" alt="{{ $post->title }}" class="sva-blog-card__img">
            @endif
          </a>
          <div class="sva-blog-card__body">
            <p class="sva-blog-card__meta">{{ $post->author }} · {{ $post->published_at?->format('d M Y') }} · {{ $post->read_time }}</p>
            <h3 class="sva-blog-card__title">
              <a href="{{ route('blog.show', $post->slug) }}">{{ $post->translate('title') }}</a>
            </h3>
            <p class="sva-blog-card__excerpt">{{ Str::limit($post->translate('excerpt'), 100) }}</p>
            <a href="{{ route('blog.show', $post->slug) }}" class="sva-blog-card__link">{{ __('Read More') }}</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="mt-5">{{ $posts->links() }}</div>
  </div>
</section>

@endsection
