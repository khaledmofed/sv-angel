@extends('layouts.app')
@section('title','FAQ — ' . setting('site_name'))

@section('content')

<section class="sva-page-hero" style="padding-bottom:60px;">
  <div class="container text-center" style="max-width:600px;">
    <span class="sva-eyebrow">FAQ</span>
    <h1 class="sva-page-title">{{ __('Frequently Asked Questions') }}</h1>
  </div>
</section>

<section class="sva-section sva-section--soft">
  <div class="container" style="max-width:800px;">
    <div class="accordion" id="faqAccordion">
      @foreach($faqs as $faq)
      <div class="sva-faq-item accordion-item border-0">
        <h2 class="accordion-header">
          <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button"
                  data-bs-toggle="collapse" data-bs-target="#faq{{ $faq->id }}">
            {{ $faq->question }}
          </button>
        </h2>
        <div id="faq{{ $faq->id }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" data-bs-parent="#faqAccordion">
          <div class="accordion-body">{{ $faq->answer }}</div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
