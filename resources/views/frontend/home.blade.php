@extends('layouts.app')
@section('title', setting('site_name','SV Angel') . ' — ' . setting('site_tagline','Advocates for founders.'))

@section('content')

{{-- Hero --}}
@if($hero)
<section class="hero-2">
  <div class="hero-2-bg" style="position:relative;overflow:hidden;">
    <video autoplay muted loop playsinline
           style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;z-index:0;">
      <source src="/assets/video/hero.webm" type="video/webm">
    </video>
    <div style="position:absolute;inset:0;background:rgb(32 32 34 / 72%);z-index:1;"></div>
    <div style="position:relative;z-index:2; height:100%;">
    <div class="container" style="
    display: flex;
    align-items: center;
    height: 100%;
">
      <div class="hero-2__inner">
        <div class="hero-2__content">
          <div class="hero-2-title-wrapper">
            <h1 class="title">{{ setting('site_name','SV Angel') }}</h1>
            <div class="sva-timeline__line timeline-hero">

        <div class="sva-timeline__wave">
          @for($i = 0; $i < 160; $i++)
          <div class="sva-timeline__bar" style="animation-delay: {{ number_format($i * 0.04, 2) }}s;"></div>
          @endfor
        </div>
      </div>
            <!-- @if($hero->video_url)
            <div class="video">
              <a href="#" id="sva-hero-intro-btn">
                <img src="/assets/img/hero-2/intro.png" alt="intro">
              </a>
            </div>
            @endif -->
          </div>
          <div class="hero-2-wrapper">

            <h2 class="sub-title">{!! $hero->headline !!}
                <!-- <img class="circle" src="assets/img/hero/hero-shape.png" alt="image"> -->
            </h2>
           <p>{{ $hero->description }}</p></div>
          @if($hero->cta_text)
          <a href="{{ $hero->cta_url }}" class="btn-primary mt-4">{{ $hero->cta_text }}</a>
          @endif
        </div>
      </div>
      {{-- Text Slider --}}
      <!-- <div class="text-slider-2">
        <div class="text-slider-2__wrapper">
          <div class="swiper text-slider-2__active">
            <div class="swiper-wrapper">
              @foreach($services as $s)
              <div class="swiper-slide"><div class="text-slider-2__item"><h2>{{ $s->title }}</h2></div></div>
              @endforeach
            </div>
          </div>
        </div>
      </div> -->
    </div>
    </div>
  </div>
</section>
@endif

{{-- Brand Logos Marquee --}}
@if($brands->count())
@php
  $row1 = $brands->take(7);
  $row2 = $brands->skip(7);
@endphp
<div style="background:#fff;padding:60px 0;overflow:hidden;">

  {{-- Row 1: scrolls left --}}
  <div class="sva-marquee-track" style="margin-bottom:12px;">
    <div class="sva-marquee sva-marquee--left">
      @foreach([$row1,$row1,$row1] as $set)
        @foreach($set as $brand)
        <a href="{{ $brand->website_url }}" target="_blank" rel="noopener noreferrer" class="sva-logo-card">
          @if($brand->logo_image)
          <img src="{{ Storage::url($brand->logo_image) }}" alt="{{ $brand->name }}">
          @else
          <span>{{ $brand->name }}</span>
          @endif
        </a>
        @endforeach
      @endforeach
    </div>
  </div>

  {{-- Row 2: scrolls right --}}
  @if($row2->count())
  <div class="sva-marquee-track">
    <div class="sva-marquee sva-marquee--right">
      @foreach([$row2,$row2,$row2] as $set)
        @foreach($set as $brand)
        <a href="{{ $brand->website_url }}" target="_blank" rel="noopener noreferrer" class="sva-logo-card">
          @if($brand->logo_image)
          <img src="{{ Storage::url($brand->logo_image) }}" alt="{{ $brand->name }}">
          @else
          <span>{{ $brand->name }}</span>
          @endif
        </a>
        @endforeach
      @endforeach
    </div>
  </div>
  @endif

</div>
@php
  $missionBg    = setting('mission_bg_image', '/assets/img/our-services/mission-statement-bg.png');
  $missionTitle = setting('mission_title', 'Built on principle');
  $missionHead  = setting('mission_headline', setting('site_tagline','Advocates for founders.'));
  $missionDesc  = setting('mission_description', 'We have spent decades supporting transformative companies — investing long-term in founders as agents of positive change.');
  $missionVideo = setting('mission_video_url', '');
  $missionThumb = setting('mission_video_thumb', '');
@endphp

{{-- media-wrapper area start --}}
<style>
@keyframes sva-pulse {
  0%   { box-shadow: 0 0 0 0 rgba(179,138,26,0.55); }
  70%  { box-shadow: 0 0 0 22px rgba(179,138,26,0); }
  100% { box-shadow: 0 0 0 0 rgba(179,138,26,0); }
}
#sva-play-btn { animation: sva-pulse 2s ease-out infinite; }
#sva-play-btn:hover { transform: scale(1.1) !important; background: rgba(179,138,26,1) !important; }
#sva-section-clickable { cursor: pointer; }
</style>
<div class="media-wrapper">
  <div id="sva-section-clickable" style="position:relative;line-height:0;overflow:hidden;">

    {{-- Background video (muted, autoplay, loop) --}}
    <video autoplay muted loop playsinline
           style="width:100%;max-height:110vh;object-fit:cover;display:block;">
      <source src="/assets/video/sv-angel-hero-1080p-v2.mp4" type="video/mp4">
    </video>

    {{-- Play button → bottom-right corner --}}
    <button id="sva-play-btn"
       style="position:absolute;bottom:40px;right:40px;width:80px;height:80px;background:rgba(179,138,26,0.92);border-radius:50%;display:flex;align-items:center;justify-content:center;border:none;cursor:pointer;transition:transform .2s,background .2s;box-shadow:0 8px 30px rgba(0,0,0,.4);z-index:2;">
      <svg width="26" height="26" viewBox="0 0 24 24" fill="white" style="margin-left:4px">
        <polygon points="5,3 19,12 5,21"/>
      </svg>
    </button>
  </div>
</div>

<script>
/* Build modal and append DIRECTLY to document.body so GSAP ScrollSmoother
   transform containers cannot break position:fixed */
(function(){
  var modal = document.createElement('div');
  modal.id = 'sva-video-modal';
  Object.assign(modal.style, {
    display: 'none', position: 'fixed',
    top: '0', left: '0', width: '100%', height: '100%',
    zIndex: '2147483647',
    background: 'rgba(0,0,0,0.94)',
    alignItems: 'center', justifyContent: 'center',
    flexDirection: 'column'
  });

  var closeBtn = document.createElement('button');
  closeBtn.innerHTML = '&times;';
  Object.assign(closeBtn.style, {
    position: 'absolute', top: '16px', right: '20px',
    background: 'rgba(255,255,255,0.15)', border: 'none',
    color: '#fff', fontSize: '36px', width: '50px', height: '50px',
    borderRadius: '50%', cursor: 'pointer', lineHeight: '1',
    display: 'flex', alignItems: 'center', justifyContent: 'center'
  });

  var vid = document.createElement('video');
  vid.id = 'sva-modal-video';
  vid.controls = true;
  vid.setAttribute('playsinline', '');
  vid.setAttribute('preload', 'auto');
  Object.assign(vid.style, {
    width: '90vw', maxWidth: '1280px', maxHeight: '80vh',
    display: 'block', outline: 'none', background: '#000'
  });
  var src = document.createElement('source');
  src.src  = '/assets/video/sv-angel-hero-1080p-v2.mp4';
  src.type = 'video/mp4';
  vid.appendChild(src);

  modal.appendChild(closeBtn);
  modal.appendChild(vid);
  document.body.appendChild(modal);

  /* Play button + entire section clickable */
  function openModal(){
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
    vid.load();
    vid.play();
  }

  var btn = document.getElementById('sva-play-btn');
  btn.addEventListener('click', function(e){ e.stopPropagation(); openModal(); });

  var section = document.getElementById('sva-section-clickable');
  if(section) section.addEventListener('click', openModal);

  function closeModal(){
    modal.style.display = 'none';
    vid.pause();
    vid.currentTime = 0;
    document.body.style.overflow = '';
  }

  closeBtn.addEventListener('click', closeModal);
  modal.addEventListener('click', function(e){ if(e.target === modal) closeModal(); });
  document.addEventListener('keydown', function(e){ if(e.key === 'Escape') closeModal(); });

  /* Hero intro button (top of page) opens the same modal */
  var introBtn = document.getElementById('sva-hero-intro-btn');
  if(introBtn){
    introBtn.addEventListener('click', function(e){
      e.preventDefault();
      modal.style.display = 'flex';
      document.body.style.overflow = 'hidden';
      vid.load();
      vid.play();
    });
  }
})();
</script>
{{-- media-wrapper area end --}}


{{-- Mission Statement --}}
<section class="mission-statement section-space" data-background="{{ $missionBg }}">
  <div class="container">
    <div class="mission-statement__top wow fade-in-bottom" data-wow-delay="600ms">
      <h2 class="sub-title">{{ $missionTitle }}</h2>
      <!-- <div class="mission-statement__item wow fade-in-bottom" data-wow-delay="600ms">
        <h2 class="title">{{ $missionHead }}</h2>
      </div> -->
    </div>
    <div class="mission-statement__content wow fade-in-bottom" data-wow-delay="1000ms">
      <p class="description">{{ $missionDesc }}</p>
      <div class="mission-fact-wrapper">
        {{-- Row 1: 3 items --}}
        <div class="row mb-minus-30 mb-3">
          <div class="col-lg-4 col-md-6">
            <div class="mission-fact-box mission-fact-box--gold">
              <p class="desc">Funded</p>
              <h4>$<span class="odometer" data-count="{{ setting('stat_funded','4') }}">0</span>B+</h4>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="mission-fact-box mission-fact-box--dark">
              <p class="desc">Lead Investments</p>
              <h4><span class="odometer" data-count="{{ setting('stat_lead_investments','35') }}">0</span>+</h4>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="mission-fact-box">
              <p class="desc">Number of Investments</p>
              <h4><span class="odometer" data-count="{{ setting('stat_investments_count','1562') }}">0</span>+</h4>
            </div>
          </div>
        </div>
        {{-- Row 2: 4 items --}}
        <div class="row mb-minus-30">
          <div class="col-lg-3 col-md-6">
            <div class="mission-fact-box mission-fact-box--dark">
              <p class="desc">Diversity Investments</p>
              <h4><span class="odometer" data-count="{{ setting('stat_diversity_investments','290') }}">0</span>+</h4>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="mission-fact-box mission-fact-box--gold">
              <p class="desc">Exits</p>
              <h4><span class="odometer" data-count="{{ setting('stat_exits','510') }}">0</span>+</h4>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="mission-fact-box">
              <p class="desc">AI Companies</p>
              <h4><span class="odometer" data-count="{{ setting('stat_ai_companies','60') }}">0</span>+</h4>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="mission-fact-box mission-fact-box--dark">
              <p class="desc">Fintech &amp; Crypto</p>
              <h4><span class="odometer" data-count="{{ setting('stat_fintech_crypto','34') }}">0</span>+</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- About Stories --}}
<section class="our-services theme-bg-light section-space">
  <div class="container">
    <div class="section-2-title-wrapper wow fade-in-bottom" data-wow-delay="600ms">
      <div class="section-2__top">
        <h2 class="left-sub-title">Our Story</h2>
        <h2 class="right-sub-title">Who We Are</h2>
      </div>
      <!-- <div class="section-2__bottom">
        <h3 class="title">Three decades of backing the world's most transformative founders.</h3>
        <a href="{{ route('about') }}" class="btn-primary btn-black-2">About SV Angel</a>
      </div> -->
    </div>

    {{-- Photo Marquee --}}
    <div class="sva-photo-slide section-space-top">
      <div class="swiper sva-photo-slide__swiper">
        <div class="swiper-wrapper">
          @php
            $slidePhotos = [
              ['url' => 'https://images.ctfassets.net/9546dfueqxy5/5rW8aBKCz7PqeEhsCgbJiZ/6b6804fd3339c2e8a9358d1adfa5ad68/ronandjessica.jpeg?w=400', 'alt' => 'Ron Conway'],
              ['url' => 'https://images.ctfassets.net/9546dfueqxy5/6SXeBoSgHLR5GnjASt5Yp2/ff852f81b78cff19db06f70bbdf5b059/sva-08.jpg?w=400', 'alt' => 'SV Angel'],
              ['url' => 'https://images.ctfassets.net/9546dfueqxy5/5MvyXV6qZ0E9nffDZObiU5/c812ba88df1f6b6c8b52131c92f9cfc8/52749523389_7e4ddef84a_k.jpg?w=400', 'alt' => 'SV Angel'],
              ['url' => 'https://images.ctfassets.net/9546dfueqxy5/692baunArwpxUc5WrsZkug/fdcb3b5138a4b0f3d4d83dbaed75910f/sva-01.jpg?w=400', 'alt' => 'SV Angel'],
              ['url' => 'https://images.ctfassets.net/9546dfueqxy5/5iEqBsR2QJNaxLf4ELX2Hd/66bd89cd7a59b457f110f483b45f23c6/sva-03.jpg?w=400', 'alt' => 'SV Angel'],
              ['url' => 'https://images.ctfassets.net/9546dfueqxy5/8tSl1DtP4k5h03tBpV359/f9750740809891a46fa4a40cd286ab7a/sva-04.jpg?w=400', 'alt' => 'SV Angel'],
              ['url' => 'https://images.ctfassets.net/9546dfueqxy5/1E1SXGW67GtbOCdY0w64sa/6c05097883606dc65e60b9a385af7f9a/IMG_9054.jpg?w=400', 'alt' => 'SV Angel Event'],
              ['url' => 'https://images.ctfassets.net/9546dfueqxy5/5066jyfelRNkVGKFXy302g/249df175f5942592790258d4765c443f/sva-02.jpg?w=400', 'alt' => 'SV Angel'],
              ['url' => 'https://images.ctfassets.net/9546dfueqxy5/5xpTaBIA8BivbJdLNPT7pp/68b15f07382a1ec076db4ebfc943c350/Founder-Summit-Laurene-Powell_010__1_.jpg?w=400', 'alt' => 'Founder Summit'],
            ];
          @endphp
          @foreach($slidePhotos as $photo)
          <div class="swiper-slide">
            <div class="sva-photo-slide__item">
              <img src="{{ $photo['url'] }}" alt="{{ $photo['alt'] }}">
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    {{-- End Photo Marquee --}}

    {{-- Timeline Wave --}}
    <div class="sva-timeline">
      <p class="sva-timeline__year">1992</p>
      <div class="sva-timeline__line">
        <div class="sva-timeline__dot"></div>
        <div class="sva-timeline__wave">
          @for($i = 0; $i < 60; $i++)
          <div class="sva-timeline__bar" style="animation-delay: {{ number_format($i * 0.04, 2) }}s;"></div>
          @endfor
        </div>
        <div class="sva-timeline__dot"></div>
      </div>
      <p class="sva-timeline__year">Now</p>
    </div>
    <p class="sva-timeline__caption">We look forward to the next 30 years of SV Angel, supporting you and future generations of founders.</p>
    {{-- End Timeline Wave --}}

    <div class="our-services__wrapper section-space-top">
      @foreach($aboutStories as $story)
      <div class="our-services__item wow fade-in-bottom" data-wow-delay="600ms">
        <div class="title-wrapper">
          <h3 class="title rr-title-anim">{{ $story->title }} <span>/ {{ $story->number }}</span></h3>
        </div>
        @if($story->second_image || $story->second_image_url || $story->second_image_link)
        <div class="our-services__media our-services__media--dual">
          @php $img1 = $story->image ? Storage::url($story->image) : null; @endphp
          @if($story->image_link)
          <a href="{{ $story->image_link }}" target="_blank" rel="noopener noreferrer" class="our-services__media__img-link">
            @if($img1)<img src="{{ $img1 }}" alt="{{ $story->title }}">@endif
          </a>
          @elseif($img1)
          <div class="our-services__media__img-link"><img src="{{ $img1 }}" alt="{{ $story->title }}"></div>
          @endif
          @php
            $img2 = $story->second_image
              ? Storage::url($story->second_image)
              : ($story->second_image_url ?? null);
          @endphp
          @if($story->second_image_link)
          <a href="{{ $story->second_image_link }}" target="_blank" rel="noopener noreferrer" class="our-services__media__img-link">
            @if($img2)<img src="{{ $img2 }}" alt="{{ $story->title }} 2">@endif
          </a>
          @elseif($img2)
          <div class="our-services__media__img-link"><img src="{{ $img2 }}" alt="{{ $story->title }} 2"></div>
          @endif
          <div class="content">
            @foreach(explode("\n\n", $story->description) as $para)
            <p>{{ trim($para) }}</p>
            @endforeach
            @if($story->signature)
            <p style="margin-top:12px;font-style:italic;color:#a58517;font-weight:600;">{{ $story->signature }}</p>
            @endif
          </div>
        </div>
        @else
        <div class="our-services__media">
          @if($story->image)
            @if($story->image_link)
            <a href="{{ $story->image_link }}" target="_blank" rel="noopener noreferrer" style="display:block;height:100%;">
              <img src="{{ Storage::url($story->image) }}" alt="{{ $story->title }}">
            </a>
            @else
            <img src="{{ Storage::url($story->image) }}" alt="{{ $story->title }}">
            @endif
          @endif
          <div class="content">
            @foreach(explode("\n\n", $story->description) as $para)
            <p>{{ trim($para) }}</p>
            @endforeach
            @if($story->signature)
            <p style="margin-top:12px;font-style:italic;color:#a58517;font-weight:600;">{{ $story->signature }}</p>
            @endif
          </div>
        </div>
        @endif
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- Featured Works --}}
@if($works->count())
<section class="featured-product section-space-top">
  <div class="container">
    <div class="section-2-title-wrapper wow fade-in-bottom" data-wow-delay="600ms">
      <div class="section-2__top">
        <h2 class="left-sub-title">Featured Portfolio</h2>
        <h2 class="right-sub-title">©1992 — {{ date('Y') }}</h2>
      </div>
      <div class="section-2__bottom">
        <h3 class="title">World-changing companies start with meaningful relationships.</h3>
        <a href="{{ route('portfolio') }}" class="btn-primary">View All</a>
      </div>
    </div>
    <div class="featured-product-wrapper section-space-top">
      @foreach($works as $work)
      <div class="featured-product__item wow fade-in-bottom" data-wow-delay="600ms">
        <div class="thumb" data-cursor-text="View">
          <a href="{{ $work->url ?? route('portfolio') }}">
            @if($work->image)
            <img src="{{ Storage::url($work->image) }}" alt="{{ $work->title }}">
            @else
            <img src="/assets/img/featured-product/product-1.jpg" alt="{{ $work->title }}">
            @endif
          </a>
          <h3 class="title rr-title-anim">{{ $work->title }}</h3>
          @if($work->tags)
          <ul class="tags">
            @foreach($work->tags as $tag)<li>{{ $tag }} //</li>@endforeach
          </ul>
          @endif
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif

{{-- Awards --}}
<!-- @if($awards->count())
<section class="our-expertise-7 section-space" data-background="/assets/img/experties2.png">
  <div class="container-fluid">
    <div class="section-title-wrapper wow fade-in-bottom" data-wow-delay="600ms">
      <h2 class="title">ards <span>Awards</span> Awar</h2>
    </div>
  </div>
  <div class="container">
    <div class="our-expertise-inner">
      <div class="our-expertise__top">
        <span>Project</span>
        <span>Awards</span>
        <span>Year</span>
      </div>
      @foreach($awards as $award)
      <div class="our-expertise-item" data-img="/assets/img/portfolio/award.jpg">
        <h2 class="title">{{ $award->project_name }}</h2>
        <h2 class="title">{{ $award->award_name }}</h2>
        <span class="year">{{ '{' . $award->year . '}' }}</span>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif -->

{{-- Testimonials --}}
@if($testimonials->count())
<section class="clients-3 section-space-top">
  <div class="container">
    <div class="section-heading__title">
      <h2 class="title rr-title-anim">What Our Founders Say</h2>
    </div>
    <div class="clients-3__inner">

      {{-- Left column: first 3 thumbnails (static, clickable) --}}
      <div class="wrapper" style="margin-top:0;height:auto;display:flex;flex-direction:column;gap:22px;">
        @foreach($testimonials->take(3) as $t)
        @php
          $photoUrl = $t->author_photo
            ? (str_starts_with($t->author_photo, 'http') ? $t->author_photo : Storage::url($t->author_photo))
            : '/assets/img/client/client-1.png';
        @endphp
        <div class="sva-t-thumb {{ $loop->first ? 'sva-t-active' : '' }}" data-idx="{{ $loop->index }}" style="cursor:pointer;width:210px;height:210px;overflow:hidden;flex-shrink:0;">
          <img src="{{ $photoUrl }}" alt="{{ $t->author_name }}" style="width:100%;height:100%;object-fit:cover;">
        </div>
        @endforeach
      </div>

      {{-- Large photo swiper + extra thumbs below it --}}
      <div class="clients-3__media" style="overflow:visible;display:flex;flex-direction:column;gap:15px;">
        <div class="swiper clients-3__slider" style="width:100%;flex-shrink:0;">
          <div class="swiper-wrapper">
            @foreach($testimonials as $t)
            @php
              $photoUrl = $t->author_photo
                ? (str_starts_with($t->author_photo, 'http') ? $t->author_photo : Storage::url($t->author_photo))
                : '/assets/img/client/client-1.png';
            @endphp
            <div class="swiper-slide">
              <div class="clients-3__thumb">
                <img src="{{ $photoUrl }}" alt="{{ $t->author_name }}">
              </div>
            </div>
            @endforeach
          </div>
        </div>
        {{-- Extra thumbnails (4th, 5th...) below the large photo --}}
        @if($testimonials->count() > 3)
        <div style="display:flex;gap:15px;">
          @foreach($testimonials->skip(3) as $t)
          @php
            $photoUrl = $t->author_photo
              ? (str_starts_with($t->author_photo, 'http') ? $t->author_photo : Storage::url($t->author_photo))
              : '/assets/img/client/client-1.png';
          @endphp
          <div class="sva-t-thumb" data-idx="{{ 3 + $loop->index }}" style="width:210px;height:210px;cursor:pointer;overflow:hidden;flex-shrink:0;">
            <img src="{{ $photoUrl }}" alt="{{ $t->author_name }}" style="width:100%;height:100%;object-fit:cover;">
          </div>
          @endforeach
        </div>
        @endif
      </div>

      {{-- Text quote swiper --}}
      <div class="clients-3__content">
        <div class="swiper-container text__slider">
          <div class="swiper-wrapper">
            @foreach($testimonials as $t)
            <div class="swiper-slide">
              <div class="text">
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="63" height="49" viewBox="0 0 63 49" fill="none">
                    <path d="M5.5405 44.6239C1.9355 40.7949 0 36.5004 0 29.5389C0 17.2889 8.5995 6.30936 21.105 0.880859L24.2305 5.70386C12.558 12.0179 10.276 20.2114 9.366 25.3774C11.2455 24.4044 13.706 24.0649 16.1175 24.2889C22.4315 24.8734 27.4085 30.0569 27.4085 36.5004C27.4085 39.7493 26.1179 42.8651 23.8206 45.1624C21.5232 47.4597 18.4074 48.7504 15.1585 48.7504C13.3618 48.7349 11.5861 48.362 9.93485 47.6536C8.28361 46.9451 6.78983 45.9152 5.5405 44.6239ZM40.5405 44.6239C36.9355 40.7949 35 36.5004 35 29.5389C35 17.2889 43.5995 6.30936 56.105 0.880859L59.2305 5.70386C47.558 12.0179 45.276 20.2114 44.366 25.3774C46.2455 24.4044 48.706 24.0649 51.1175 24.2889C57.4315 24.8734 62.4085 30.0569 62.4085 36.5004C62.4085 39.7493 61.1179 42.8651 58.8206 45.1624C56.5232 47.4597 53.4074 48.7504 50.1585 48.7504C48.3618 48.7349 46.5861 48.362 44.9348 47.6536C43.2836 46.9451 41.7898 45.9152 40.5405 44.6239Z" fill="#B3EC11"/>
                  </svg>
                </div>
                <p>"{{ $t->quote }}"</p>
                <div class="author">
                  <h2 class="name">{{ $t->author_name }}</h2>
                  <span>{{ $t->author_title }}@if($t->author_company), {{ $t->author_company }}@endif</span>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>

      {{-- Navigation arrows --}}
      <div class="clients-3__bottom-wrapper">
        <div class="clients-3__slider__arrow">
          <button class="clients-3__slider__arrow-prev d-flex align-items-center justify-content-center wow clip-t-b" aria-label="Previous slide">
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="29" viewBox="0 0 34 29" fill="none">
              <path d="M14.7143 1L0.999999 14.5M0.999999 14.5L14.7143 28M0.999999 14.5H33" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
          <button class="clients-3__slider__arrow-next d-flex align-items-center justify-content-center wow clip-t-b" aria-label="Next slide">
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="29" viewBox="0 0 34 29" fill="none">
              <path d="M19.2857 1L33 14.5M33 14.5L19.2857 28M33 14.5H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
        </div>
      </div>

    </div>

  </div>
</section>

<style>
.sva-t-thumb { position:relative; transition:.3s; }
.sva-t-thumb img { border-radius:10px; filter:grayscale(100%); transition:filter .3s; width:100%; height:100%; object-fit:cover; }
.sva-t-thumb.sva-t-active img { filter:grayscale(0%); }
.sva-t-thumb.sva-t-active::after {
  border-radius:10px; content:''; position:absolute; inset:0;
  border:3px solid #a68716; pointer-events:none;
}
/* Responsive thumb sizing */
@media (max-width: 1399px) {
  .clients-3__inner .wrapper .sva-t-thumb { width:160px !important; height:160px !important; }
  .clients-3__inner .clients-3__media .sva-t-thumb { width:160px !important; height:160px !important; }
}
@media (max-width: 1199px) {
  .clients-3__inner .wrapper .sva-t-thumb { height:130px !important; }
  .clients-3__inner .clients-3__media .sva-t-thumb { width:130px !important; height:130px !important; }
}
/* Tablet (≤991px): grid becomes 2-col, hide left thumbs */
@media (max-width: 991px) {
  .clients-3__inner .wrapper { display:none !important; }
  .clients-3__inner .clients-3__media .sva-t-thumb { display:none !important; }
}
</style>
@endif

{{-- Inflection Points --}}
<section class="sva-inflection section-space-top">
  <div class="container">
    <div class="sva-inflection__grid">
      <div class="sva-inflection__text">
        <h2 class="sva-inflection__title">Inflection points</h2>
        <p class="sva-inflection__desc">Some of our most impactful work happens at moments where a single decision or connection can dictate the course of a company. We're ready to advise at a moment's notice, helping remove any roadblocks on the path to success.</p>
        <a href="{{ route('contact') }}" class="btn-primary">Reach Out to Us</a>
      </div>
      <div class="sva-inflection__video">
        <video autoplay muted loop playsinline>
          <source src="/assets/video/in.mp4" type="video/mp4">
        </video>
      </div>
    </div>
  </div>
</section>



<style>
.sva-marquee-track{overflow:hidden;white-space:nowrap;}
.sva-marquee{display:inline-flex;gap:12px;}
.sva-marquee--left{animation:sva-scroll-left 35s linear infinite;}
.sva-marquee--right{animation:sva-scroll-right 35s linear infinite;}
.sva-marquee-track:hover .sva-marquee{animation-play-state:paused;}
.sva-logo-card{
  display:inline-flex;align-items:center;justify-content:center;
  width:220px;height:90px;background:#f7f7f7;border-radius:6px;
  padding:16px 24px;flex-shrink:0;transition:background .2s;
}
.sva-logo-card:hover{background:#eee;}
.sva-logo-card img{max-height:70px;max-width:160px;width:auto;height:auto;object-fit:contain;}
.sva-logo-card span{font-weight:700;font-size:14px;color:#333;}
@keyframes sva-scroll-left{
  0%{transform:translateX(0);}
  100%{transform:translateX(-33.333%);}
}
@keyframes sva-scroll-right{
  0%{transform:translateX(-33.333%);}
  100%{transform:translateX(0);}
}
</style>
@endif

{{-- Blog / Insights --}}
@if($posts->count())
<section class="insights theme-bg-light section-space">
  <div class="container-fluid">
    <div class="section-title-wrapper wow fade-in-bottom" data-wow-delay="600ms">
      <h2 class="title">Our <span> efforts at </span> work</h2>
    </div>
  </div>
  <div class="container">
    <div class="insights__inner">
      @foreach($posts as $post)
      @php $postUrl = $post->external_url ?: route('blog.show', $post->slug); @endphp
      <div class="insights__item wow fade-in-bottom" data-wow-delay="600ms">
        <div class="insights__media">
          <a href="{{ $postUrl }}" @if($post->external_url) target="_blank" rel="noopener noreferrer" @endif>
            @if($post->featured_image)
            <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}">
            @else
            <img src="/assets/img/services/services-7.jpg" alt="{{ $post->title }}">
            @endif
          </a>
        </div>
        <div class="insights__content">
          <ul class="insight-list">
            <li><span>{{ $post->category }}</span>{{ $post->read_time }}</li>
          </ul>
          <h2 class="title rr-title-anim">
            <a href="{{ $postUrl }}" @if($post->external_url) target="_blank" rel="noopener noreferrer" @endif>{{ $post->title }}</a>
          </h2>
          <ul class="meta-list">
            <li>{{ $post->author }}</li>
            <li>{{ $post->published_at ? $post->published_at->format('d.m.Y') : '' }}</li>
          </ul>
        </div>
        <div class="insights__btn">
          <a href="{{ $postUrl }}" @if($post->external_url) target="_blank" rel="noopener noreferrer" @endif class="btn-primary btn-black-2">{{ $post->read_time }} →</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif

@endsection
