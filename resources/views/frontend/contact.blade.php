@extends('layouts.app')
@section('title','Contact — ' . setting('site_name'))

@section('content')

<section class="sva-page-hero" style="padding-bottom:60px;">
  <div class="container" style="max-width:700px;">
    <span class="sva-eyebrow">Reach Out</span>
    <h1 class="sva-page-title">Get in Touch</h1>
    <p class="sva-lead sva-lead--light">We read every message and respond to those that align with our investment thesis.</p>
  </div>
</section>

<section class="sva-section sva-section--soft">
  <div class="container">
    <div class="row g-5">

      {{-- Left: info --}}
      <div class="col-lg-4">
        <div class="sva-card" style="position:sticky;top:100px;">
          @if(setting('contact_address'))
          <div class="d-flex gap-3 mb-4">
            <i class="fa-solid fa-location-dot" style="color:var(--sva-gold);margin-top:3px;"></i>
            <p style="margin:0;font-size:15px;color:var(--sva-body);">{{ setting('contact_address') }}</p>
          </div>
          @endif
          @if(setting('contact_email'))
          <div class="d-flex gap-3">
            <i class="fa-solid fa-envelope" style="color:var(--sva-gold);margin-top:3px;"></i>
            <a href="mailto:{{ setting('contact_email') }}" style="font-size:15px;color:var(--sva-ink);text-decoration:none;font-weight:600;">{{ setting('contact_email') }}</a>
          </div>
          @endif
        </div>
      </div>

      {{-- Right: form --}}
      <div class="col-lg-8">
        @if(session('success'))
        <div class="sva-card" style="background:var(--sva-gold-pale);border-color:var(--sva-gold);margin-bottom:24px;">
          <p style="margin:0;color:var(--sva-ink);font-weight:600;">{{ session('success') }}</p>
        </div>
        @endif

        <form method="POST" action="{{ route('contact.store') }}">
          @csrf
          <div class="mb-4">
            <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}"
                   class="sva-field @error('name') is-invalid @enderror">
            @error('name')<div class="invalid-feedback" style="display:block;color:#d03238;font-size:13px;margin-top:6px;">{{ $message }}</div>@enderror
          </div>
          <div class="mb-4">
            <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}"
                   class="sva-field @error('email') is-invalid @enderror">
            @error('email')<div class="invalid-feedback" style="display:block;color:#d03238;font-size:13px;margin-top:6px;">{{ $message }}</div>@enderror
          </div>
          <div class="mb-4">
            <input type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}"
                   class="sva-field">
          </div>
          <div class="mb-5">
            <textarea name="message" placeholder="Your Message" rows="6"
                      class="sva-field @error('message') is-invalid @enderror" style="resize:vertical;">{{ old('message') }}</textarea>
            @error('message')<div class="invalid-feedback" style="display:block;color:#d03238;font-size:13px;margin-top:6px;">{{ $message }}</div>@enderror
          </div>
          <button type="submit" class="sva-btn sva-btn--gold">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
