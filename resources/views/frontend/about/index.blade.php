@extends('layouts.app')
@section('title','About — ' . setting('site_name','SV Angel'))

@section('content')

{{-- Hero: fullscreen split (text left / image right) --}}
<section style="background:#0e0f0c;color:#fff;min-height:100vh;display:flex;align-items:stretch;overflow:hidden;padding-top:80px;">
  <div style="display:flex;width:100%;align-items:stretch;flex-wrap:wrap;">

    {{-- Left: text --}}
    <div style="flex:0 0 55%;max-width:55%;padding:80px 6% 80px 6%;display:flex;flex-direction:column;justify-content:center;">
      <span class="sva-eyebrow">{{ __('Our Story') }}</span>
      <h1 class="sva-page-title" style="font-size:clamp(2.8rem,4.5vw,5rem);margin-bottom:28px;">{{ __('The SV Angel story') }}</h1>
      <p style="font-size:1.15rem;line-height:1.85;color:rgba(255,255,255,.75);max-width:560px;margin-bottom:40px;">
        {{ __('SV Angel grew out of my personal style of investing — hyper-engaged, founder-focused, and community-oriented. Codifying that strategy has helped SV Angel build some of the most iconic companies of our time. Over years of investing, the team has grown around our willingness to roll up our sleeves and assist founders when things get tough. Across our work with Google, Twitter, Meta, Airbnb, Coinbase, Stripe, Pinterest and more, we\'ve seen everything that can go wrong — and right — in company-building, and we share that experience to help founders when it matters most.') }}
      </p>
      <p style="font-size:0.95rem;color:var(--sva-gold);font-weight:600;letter-spacing:.04em;margin-bottom:40px;">— Ron Conway</p>
      <div class="d-flex gap-3 flex-wrap">
        <a href="{{ route('about.approach') }}" class="btn-primary">{{ __('Our Approach') }}</a>
        <a href="{{ route('about.team') }}"     class="sva-btn sva-btn--outline-light">{{ __('Meet the Team') }}</a>
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
        <span class="sva-stat__num">$599.4B+</span>
        <p class="sva-stat__label">{{ __('Total Funded (USD)') }}</p>
      </div>
      <div class="col-6 col-md-4 col-xl-3 sva-stat">
        <span class="sva-stat__num">1,572+</span>
        <p class="sva-stat__label">{{ __('Total Investments') }}</p>
      </div>
      <div class="col-6 col-md-4 col-xl-3 sva-stat">
        <span class="sva-stat__num">11+</span>
        <p class="sva-stat__label">{{ __('Funds Raised') }}</p>
      </div>
      <div class="col-6 col-md-4 col-xl-3 sva-stat">
        <span class="sva-stat__num">290</span>
        <p class="sva-stat__label">{{ __('Diversity Investments') }}</p>
      </div>
      <div class="col-6 col-md-4 col-xl-3 sva-stat">
        <span class="sva-stat__num">513</span>
        <p class="sva-stat__label">{{ __('Exits') }}</p>
      </div>
      <div class="col-6 col-md-4 col-xl-3 sva-stat">
        <span class="sva-stat__num">35</span>
        <p class="sva-stat__label">{{ __('Lead Investments') }}</p>
      </div>
      <div class="col-6 col-md-4 col-xl-3 sva-stat">
        <span class="sva-stat__num">100+</span>
        <p class="sva-stat__label">{{ __('AI, Fintech & Crypto') }}</p>
      </div>
      <div class="col-6 col-md-4 col-xl-3 sva-stat">
        <span class="sva-stat__num">1,472+</span>
        <p class="sva-stat__label">{{ __('Other Sectors') }}</p>
      </div>
    </div>
  </div>
</div>

{{-- Timeline: Pushing progress over time --}}
<section class="sva-section sva-section--dark">
  <div class="container">
    <div class="text-center mb-5">
      <span class="sva-eyebrow">{{ __('Our History') }}</span>
      <h2 class="sva-h2" style="color:#fff;">{{ __('Pushing progress over time') }}</h2>
      <p style="color:rgba(255,255,255,.6);font-size:1.1rem;max-width:560px;margin:0 auto;">
        {{ __('From Ron Conway\'s first angel investments to backing the defining companies of the AI era.') }}
      </p>
    </div>

    <style>
    .sva-tl-wrap { position:relative; }
    .sva-tl-wrap::before { content:''; position:absolute; left:72px; top:0; bottom:0; width:1px; background:rgba(255,255,255,.15); }
    .sva-tl-row { display:grid !important; grid-template-columns:72px 1fr; gap:0; margin-bottom:52px; position:relative; }
    .sva-tl-row:last-child { margin-bottom:0; }
    .sva-tl-left { text-align:right; padding-right:28px; padding-top:5px; }
    .sva-tl-year { font-size:1.1rem; font-weight:800; color:var(--sva-gold); letter-spacing:.04em; display:block; }
    .sva-tl-right { padding-left:36px; padding-bottom:8px; position:relative; }
    .sva-tl-right::before {
      content:''; position:absolute; left:-6px; top:8px;
      width:12px; height:12px; border-radius:50%;
      background:var(--sva-gold); border:2px solid #111;
    }
    .sva-tl-right h5 { font-size:1.35rem; font-weight:700; color:#fff; margin:0 0 10px; }
    .sva-tl-right p  { font-size:1.05rem; line-height:1.8; color:rgba(255,255,255,.6); margin:0; }
    .sva-tl-row--now .sva-tl-right::before { background:#fff; width:14px; height:14px; left:-7px; top:7px; }
    /* Story slider */
    .sva-story-sticky { position:sticky; top:100px; }
    .sva-story-swiper { height:1156px; overflow:hidden; }
    .sva-story-swiper .swiper-slide img {
      width:100%; height:100%; object-fit:cover; display:block; border-radius:14px;
    }
    </style>

    <div class="row align-items-start g-5">

      {{-- Timeline --}}
      <div class="col-lg-7">
        <div class="sva-tl-wrap">
          @php
          $milestones = [
            ['year'=>'1994','title'=>__('The Beginning'),'body'=>__('Ron Conway begins angel investing in Silicon Valley, backing early-stage technology founders with capital and hands-on support.')],
            ['year'=>'1998','title'=>__('Early Internet Wave'),'body'=>__('First major technology investments including Google. Establishes a reputation for founder-first investing and deep operator networks.')],
            ['year'=>'2009','title'=>__('SV Angel Founded'),'body'=>__('SV Angel is formally established as a seed fund, codifying Ron\'s hyper-engaged investing style into a team-driven platform.')],
            ['year'=>'2012','title'=>__('Portfolio Reaches Scale'),'body'=>__('Investments in Airbnb, Pinterest, Twitter, Stripe and dozens more define SV Angel as the most connected seed fund in Silicon Valley.')],
            ['year'=>'2016','title'=>__('Growth Fund Launched'),'body'=>__('SV Angel expands its strategy with a dedicated Growth fund to support portfolio companies as they scale beyond seed stage.')],
            ['year'=>'2020','title'=>__('Historic Exits'),'body'=>__('Airbnb and DoorDash go public on the same day — two landmark portfolio exits representing decades of founder partnership.')],
            ['year'=>'2023','title'=>__('Leading the AI Era'),'body'=>__('Early investments in OpenAI, Anthropic, ElevenLabs, and Sierra position SV Angel at the center of the artificial intelligence revolution.')],
            ['year'=>__('Now'), 'title'=>__('The Next 30 Years'),'body'=>__('We look forward to the next 30 years of SV Angel, supporting you and future generations of founders.'),'now'=>true],
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

      {{-- Vertical story slider — desktop only --}}
      <div class="col-lg-5 d-none d-lg-block">
        <div class="sva-story-sticky">
          <div class="swiper sva-story-swiper">
            <div class="swiper-wrapper">
              @php
              $storyImgs = [
                ['src'=>'https://images.ctfassets.net/9546dfueqxy5/5rW8aBKCz7PqeEhsCgbJiZ/6b6804fd3339c2e8a9358d1adfa5ad68/ronandjessica.jpeg','alt'=>'Ron Conway'],
                ['src'=>'https://images.ctfassets.net/9546dfueqxy5/6SXeBoSgHLR5GnjASt5Yp2/ff852f81b78cff19db06f70bbdf5b059/sva-08.jpg','alt'=>'SV Angel'],
                ['src'=>'https://images.ctfassets.net/9546dfueqxy5/5MvyXV6qZ0E9nffDZObiU5/c812ba88df1f6b6c8b52131c92f9cfc8/52749523389_7e4ddef84a_k.jpg','alt'=>'SV Angel'],
                ['src'=>'https://images.ctfassets.net/9546dfueqxy5/692baunArwpxUc5WrsZkug/fdcb3b5138a4b0f3d4d83dbaed75910f/sva-01.jpg','alt'=>'SV Angel'],
                ['src'=>'https://images.ctfassets.net/9546dfueqxy5/5iEqBsR2QJNaxLf4ELX2Hd/66bd89cd7a59b457f110f483b45f23c6/sva-03.jpg','alt'=>'SV Angel'],
                ['src'=>'https://images.ctfassets.net/9546dfueqxy5/8tSl1DtP4k5h03tBpV359/f9750740809891a46fa4a40cd286ab7a/sva-04.jpg','alt'=>'SV Angel'],
                ['src'=>'https://images.ctfassets.net/9546dfueqxy5/1E1SXGW67GtbOCdY0w64sa/6c05097883606dc65e60b9a385af7f9a/IMG_9054.jpg','alt'=>'SV Angel Event'],
                ['src'=>'https://images.ctfassets.net/9546dfueqxy5/5066jyfelRNkVGKFXy302g/249df175f5942592790258d4765c443f/sva-02.jpg','alt'=>'SV Angel'],
                ['src'=>'https://images.ctfassets.net/9546dfueqxy5/5xpTaBIA8BivbJdLNPT7pp/68b15f07382a1ec076db4ebfc943c350/Founder-Summit-Laurene-Powell_010__1_.jpg','alt'=>'Founder Summit'],
              ];
              @endphp
              @foreach($storyImgs as $img)
              <div class="swiper-slide">
                <img src="{{ $img['src'] }}?w=500&h=320&fit=fill" alt="{{ $img['alt'] }}" loading="lazy">
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function () {
  new Swiper('.sva-story-swiper', {
    direction: 'vertical',
    slidesPerView: 5,
    spaceBetween: 14,
    loop: true,
    speed: 3000,
    autoplay: { delay: 0, disableOnInteraction: false },
    freeMode: { enabled: true, momentum: false },
    allowTouchMove: false,
  });
});
</script>

{{-- Building a better world --}}
<section class="sva-section sva-section--soft bilding-better">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <span class="sva-eyebrow">{{ __('Giving Back') }}</span>
        <h2 class="sva-h2">{{ __('Building a better world') }}</h2>
        <p class="sva-lead" style="margin-bottom:24px;">{{ __('A primary motivator for our work is to shape a more just and equitable society. At SV Angel, we support causes including racial justice, access to healthcare, and reducing income inequality and gun violence. We support The Giving Pledge, and we helped launch sf.citi to leverage the collective power of the tech sector as a force for civic action in San Francisco. When founders join our network, we strongly encourage them to contribute to the betterment of the world around us.') }}</p>
        <a href="https://pledge1percent.org/" target="_blank" rel="noopener noreferrer" class="sva-btn sva-btn--dark">{{ __('Join Pledge 1%') }}</a>
      </div>
      <div class="col-lg-5">
        <div class="row g-3">
          <div class="col-12">
            <img src="{{ asset('storage/about/sf_city.jpg') }}" alt="SF City" class="sva-img" style="height:240px;object-fit:cover;">
          </div>
          <div class="col-12">
            <img src="{{ asset('storage/about/giving_pledge.png') }}" alt="Giving Pledge" class="sva-img" style="height: 200px;object-fit: cover;">
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
        <span class="sva-eyebrow">{{ __('The Future') }}</span>
        <h2 class="sva-h2" style="color:#fff;">{{ __('Our work is never finished') }}</h2>
        <p class="sva-lead sva-lead--light" style="margin-bottom:32px;">{{ __("We're proud of our history, and we're even more excited about the future. As the pace of change continues to accelerate, we're tracking each new sector as well as the bright minds leading the charge. Here's what doesn't change: we're here in service of founders, upholding a moral standard in the ecosystem to ensure that technology is a force for good.") }}</p>
        <div class="d-flex gap-3 flex-wrap">
          <a href="{{ route('about.approach') }}" class="btn-primary">{{ __('Our Approach') }}</a>
          <a href="{{ route('portfolio') }}"       class="sva-btn sva-btn--outline-light">{{ __('View Portfolio') }}</a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
