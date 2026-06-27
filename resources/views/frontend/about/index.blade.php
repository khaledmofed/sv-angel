@extends('layouts.app')
@section('title','About — ' . setting('site_name','SV Angel'))

@section('content')

{{-- Hero: fullscreen split (text left / image right) --}}
<section style="background:#0e0f0c;color:#fff;min-height:100vh;display:flex;align-items:stretch;overflow:hidden;padding-top:80px;">
  <div style="display:flex;width:100%;align-items:stretch;flex-wrap:wrap;">

    {{-- Left: text --}}
    <div style="flex:0 0 55%;max-width:55%;padding:80px 6% 80px 6%;display:flex;flex-direction:column;justify-content:center;">
      <span class="sva-eyebrow">Our Story</span>
      <h1 class="sva-page-title" style="font-size:clamp(2.8rem,4.5vw,5rem);margin-bottom:28px;">The SV Angel story</h1>
      <p style="font-size:1.15rem;line-height:1.85;color:rgba(255,255,255,.75);max-width:560px;margin-bottom:40px;">
        SV Angel grew out of my personal style of investing — hyper-engaged, founder-focused, and community-oriented. Codifying that strategy has helped SV Angel build some of the most iconic companies of our time. Over years of investing, the team has grown around our willingness to roll up our sleeves and assist founders when things get tough. Across our work with Google, Twitter, Meta, Airbnb, Coinbase, Stripe, Pinterest and more, we've seen everything that can go wrong — and right — in company-building, and we share that experience to help founders when it matters most.
      </p>
      <p style="font-size:0.95rem;color:var(--sva-gold);font-weight:600;letter-spacing:.04em;margin-bottom:40px;">— Ron Conway</p>
      <div class="d-flex gap-3 flex-wrap">
        <a href="{{ route('about.approach') }}" class="sva-btn sva-btn--gold">Our Approach</a>
        <a href="{{ route('about.team') }}"     class="sva-btn sva-btn--outline-light">Meet the Team</a>
      </div>
    </div>

    {{-- Right: image flush --}}
    <div style="flex:0 0 45%;max-width:45%;position:relative;min-height:500px;">
      <img src="{{ asset('storage/about/ron_and_topher.jpg') }}"
           alt="Ron and Topher Conway"
           style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:top center;">
      <div style="position:absolute;inset:0;background:linear-gradient(to right,#0e0f0c 0%,transparent 25%);"></div>
    </div>

  </div>
</section>

{{-- Responsive fix for mobile --}}
<style>
@media(max-width:991px){
  section[style*="min-height:100vh"] > div > div:first-child { flex:0 0 100% !important;max-width:100% !important;padding:60px 24px 40px !important; }
  section[style*="min-height:100vh"] > div > div:last-child  { flex:0 0 100% !important;max-width:100% !important;min-height:320px !important;position:relative !important; }
}
</style>

{{-- Stats bar --}}
<div class="sva-stat-bar">
  <div class="container">
    <div class="row text-center g-4">
      <div class="col-6 col-md-4 col-xl-3 sva-stat">
        <span class="sva-stat__num">$4B+</span>
        <p class="sva-stat__label">Funded</p>
      </div>
      <div class="col-6 col-md-4 col-xl-3 sva-stat">
        <span class="sva-stat__num">1,562+</span>
        <p class="sva-stat__label">Number of Investments</p>
      </div>
      <div class="col-6 col-md-4 col-xl-3 sva-stat">
        <span class="sva-stat__num">510+</span>
        <p class="sva-stat__label">Exits</p>
      </div>
      <div class="col-6 col-md-4 col-xl-3 sva-stat">
        <span class="sva-stat__num">290+</span>
        <p class="sva-stat__label">Diversity Investments</p>
      </div>
      <div class="col-6 col-md-4 col-xl-3 sva-stat">
        <span class="sva-stat__num">35+</span>
        <p class="sva-stat__label">Lead Investments</p>
      </div>
      <div class="col-6 col-md-4 col-xl-3 sva-stat">
        <span class="sva-stat__num">60+</span>
        <p class="sva-stat__label">AI Companies</p>
      </div>
      <div class="col-6 col-md-4 col-xl-3 sva-stat">
        <span class="sva-stat__num">34+</span>
        <p class="sva-stat__label">Fintech &amp; Crypto</p>
      </div>
    </div>
  </div>
</div>

{{-- Timeline: Pushing progress over time --}}
<section class="sva-section sva-section--dark">
  <div class="container">
    <div class="text-center mb-5">
      <span class="sva-eyebrow">Our History</span>
      <h2 class="sva-h2" style="color:#fff;">Pushing progress over time</h2>
      <p style="color:rgba(255,255,255,.6);font-size:1.05rem;max-width:560px;margin:0 auto;">
        From Ron Conway's first angel investments to backing the defining companies of the AI era.
      </p>
    </div>

    <style>
    .sva-tl-wrap { position:relative; max-width:760px; margin:0 auto; }
    .sva-tl-wrap::before { content:''; position:absolute; left:56px; top:0; bottom:0; width:1px; background:rgba(255,255,255,.12); }
    .sva-tl-row { display:grid !important; grid-template-columns:56px 1fr; gap:0; margin-bottom:40px; position:relative; }
    .sva-tl-row:last-child { margin-bottom:0; }
    .sva-tl-left { text-align:right; padding-right:28px; padding-top:3px; }
    .sva-tl-year { font-size:.9rem; font-weight:800; color:var(--sva-gold); letter-spacing:.04em; display:block; }
    .sva-tl-right { padding-left:32px; padding-bottom:8px; position:relative; }
    .sva-tl-right::before {
      content:''; position:absolute; left:-5px; top:6px;
      width:11px; height:11px; border-radius:50%;
      background:var(--sva-gold); border:2px solid #111;
    }
    .sva-tl-right h5 { font-size:1rem; font-weight:700; color:#fff; margin:0 0 6px; }
    .sva-tl-right p  { font-size:.92rem; line-height:1.75; color:rgba(255,255,255,.58); margin:0; }
    .sva-tl-row--now .sva-tl-right::before { background:#fff; width:13px; height:13px; left:-6px; top:5px; }
    </style>

    <div class="sva-tl-wrap">
      @php
      $milestones = [
        ['year'=>'1994','title'=>'The Beginning','body'=>'Ron Conway begins angel investing in Silicon Valley, backing early-stage technology founders with capital and hands-on support.'],
        ['year'=>'1998','title'=>'Early Internet Wave','body'=>'First major technology investments including Google. Establishes a reputation for founder-first investing and deep operator networks.'],
        ['year'=>'2009','title'=>'SV Angel Founded','body'=>'SV Angel is formally established as a seed fund, codifying Ron\'s hyper-engaged investing style into a team-driven platform.'],
        ['year'=>'2012','title'=>'Portfolio Reaches Scale','body'=>'Investments in Airbnb, Pinterest, Twitter, Stripe and dozens more define SV Angel as the most connected seed fund in Silicon Valley.'],
        ['year'=>'2016','title'=>'Growth Fund Launched','body'=>'SV Angel expands its strategy with a dedicated Growth fund to support portfolio companies as they scale beyond seed stage.'],
        ['year'=>'2020','title'=>'Historic Exits','body'=>'Airbnb and DoorDash go public on the same day — two landmark portfolio exits representing decades of founder partnership.'],
        ['year'=>'2023','title'=>'Leading the AI Era','body'=>'Early investments in OpenAI, Anthropic, ElevenLabs, and Sierra position SV Angel at the center of the artificial intelligence revolution.'],
        ['year'=>'Now', 'title'=>'The Next 30 Years','body'=>'We look forward to the next 30 years of SV Angel, supporting you and future generations of founders.','now'=>true],
      ];
      @endphp
      @foreach($milestones as $m)
      <div class="sva-tl-row {{ !empty($m['now']) ? 'sva-tl-row--now' : '' }}">
        <div class="sva-tl-left"><span class="sva-tl-year">{{ $m['year'] }}</span></div>
        <div class="sva-tl-right">
          <h5>{{ $m['title'] }}</h5>
          <p>{{ $m['body'] }}</p>
        </div>
      </div>
      @endforeach
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
            <img src="{{ asset('storage/about/sf_city.jpg') }}" alt="SF City" class="sva-img" style="height:240px;object-fit:cover;">
          </div>
          <div class="col-12">
            <img src="{{ asset('storage/about/giving_pledge.png') }}" alt="Giving Pledge" class="sva-img" style="height:180px;object-fit:contain;background:#e8e4da;padding:20px;">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Our work is never finished --}}
<section class="sva-section sva-section--dark">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <img src="{{ asset('storage/about/team_meeting.jpg') }}" alt="SV Angel Team" class="sva-img" style="max-height:500px;object-fit:cover;">
      </div>
      <div class="col-lg-6">
        <span class="sva-eyebrow">The Future</span>
        <h2 class="sva-h2" style="color:#fff;">Our work is never finished</h2>
        <p class="sva-lead sva-lead--light" style="margin-bottom:32px;">We're proud of our history, and we're even more excited about the future. As the pace of change continues to accelerate, we're tracking each new sector as well as the bright minds leading the charge. Here's what doesn't change: we're here in service of founders, upholding a moral standard in the ecosystem to ensure that technology is a force for good.</p>
        <div class="d-flex gap-3 flex-wrap">
          <a href="{{ route('about.approach') }}" class="sva-btn sva-btn--gold">Our Approach</a>
          <a href="{{ route('portfolio') }}"       class="sva-btn sva-btn--outline-light">View Portfolio</a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
