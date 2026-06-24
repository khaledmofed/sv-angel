@extends('layouts.app')
@section('title','About — ' . setting('site_name','SV Angel'))

@section('content')

{{-- Hero --}}
<section class="sva-page-hero">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <span class="sva-eyebrow">Our Story</span>
        <h1 class="sva-page-title">The SV Angel story</h1>
        <p class="sva-lead sva-lead--light sva-lead--narrow">SV Angel grew out of my personal style of investing — hyper-engaged, founder-focused, and community-oriented. Codifying that strategy has helped SV Angel build some of the most iconic companies of our time. Over years of investing, the team has grown around our willingness to roll up our sleeves and assist founders when things get tough. Across our work with Google, Twitter, Meta, Airbnb, Coinbase, Stripe, Pinterest and more, we've seen everything that can go wrong — and right — in company-building, and we share that experience to help founders when it matters most.</p>
        <div class="d-flex gap-3 flex-wrap mt-5">
          <a href="{{ route('about.approach') }}" class="sva-btn sva-btn--gold">Our Approach</a>
          <a href="{{ route('about.team') }}"     class="sva-btn sva-btn--outline-light">Meet the Team</a>
        </div>
      </div>
      <div class="col-lg-5">
        <img src="{{ asset('storage/about/ron_and_topher.jpg') }}" alt="Ron and Topher Conway" class="sva-img" style="max-height:520px;">
      </div>
    </div>
  </div>
</section>

{{-- Stats bar --}}
<div class="sva-stat-bar">
  <div class="container">
    <div class="row text-center g-4">
      <div class="col-6 col-md-3 sva-stat">
        <span class="sva-stat__num">30+</span>
        <p class="sva-stat__label">Years Investing</p>
      </div>
      <div class="col-6 col-md-3 sva-stat">
        <span class="sva-stat__num">200+</span>
        <p class="sva-stat__label">Portfolio Companies</p>
      </div>
      <div class="col-6 col-md-3 sva-stat">
        <span class="sva-stat__num">$1T+</span>
        <p class="sva-stat__label">Combined Valuation</p>
      </div>
      <div class="col-6 col-md-3 sva-stat">
        <span class="sva-stat__num">∞</span>
        <p class="sva-stat__label">Commitment to Founders</p>
      </div>
    </div>
  </div>
</div>

{{-- Pushing progress --}}
<section class="sva-section">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5">
        <img src="{{ asset('storage/about/team_group.png') }}" alt="SV Angel Team" class="sva-img">
      </div>
      <div class="col-lg-7">
        <span class="sva-eyebrow">Our History</span>
        <h2 class="sva-h2">Pushing progress over time</h2>
        <p class="sva-lead">We look forward to the next 30 years of SV Angel, supporting you and future generations of founders.</p>
      </div>
    </div>
  </div>
</section>

{{-- Building a better world --}}
<section class="sva-section sva-section--soft">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <span class="sva-eyebrow">Giving Back</span>
        <h2 class="sva-h2">Building a better world</h2>
        <p class="sva-lead" style="margin-bottom:24px;">A primary motivator for our work is to shape a more just and equitable society. At SV Angel, we support causes including racial justice, access to healthcare, and reducing income inequality and gun violence. We support The Giving Pledge, and we helped launch sf.citi to leverage the collective power of the tech sector as a force for civic action in San Francisco. When founders join our network, we strongly encourage them to contribute to the betterment of the world around us.</p>
        <a href="https://pledge1percent.org/" target="_blank" rel="noopener noreferrer" class="sva-btn sva-btn--dark">Join Pledge 1%</a>
      </div>
      <div class="col-lg-5">
        <div class="row g-3">
          <div class="col-12">
            <img src="{{ asset('storage/about/sf_city.jpg') }}" alt="SF City" class="sva-img" style="height:240px;">
          </div>
          <div class="col-12">
            <img src="{{ asset('storage/about/giving_pledge.png') }}" alt="Giving Pledge" class="sva-img" style="height:180px;background:var(--sva-border);">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Unwavering commitment --}}
<section class="sva-section sva-section--dark">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5">
        <img src="{{ asset('storage/about/yellow_notepads.jpg') }}" alt="Yellow notepads" class="sva-img" style="max-height:440px;">
      </div>
      <div class="col-lg-7">
        <span class="sva-eyebrow">Values</span>
        <h2 class="sva-h2">Unwavering commitment</h2>
        <p class="sva-lead sva-lead--light">We are committed to operating with the highest ethical standards. This means being transparent with founders, treating everyone with respect, and always putting the interests of our portfolio companies first.</p>
      </div>
    </div>
  </div>
</section>

{{-- Our work is never finished --}}
<section class="sva-section">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <span class="sva-eyebrow">The Future</span>
        <h2 class="sva-h2">Our work is never finished</h2>
        <p class="sva-lead" style="margin-bottom:32px;">We're proud of our history, and we're even more excited about the future. As the pace of change continues to accelerate, we're tracking each new sector as well as the bright minds leading the charge. Here's what doesn't change: we're here in service of founders, upholding a moral standard in the ecosystem to ensure that technology is a force for good.</p>
        <div class="d-flex gap-3 flex-wrap">
          <a href="{{ route('about.approach') }}" class="sva-btn sva-btn--dark">Our Approach</a>
          <a href="{{ route('portfolio') }}"       class="sva-btn sva-btn--outline-dark">View Portfolio</a>
        </div>
      </div>
      <div class="col-lg-5">
        <img src="{{ asset('storage/about/team_meeting.jpg') }}" alt="SV Angel Team Meeting" class="sva-img" style="max-height:480px;">
      </div>
    </div>
  </div>
</section>

@endsection
