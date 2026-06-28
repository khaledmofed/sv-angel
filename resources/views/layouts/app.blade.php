<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', setting('site_name','SV Angel'))</title>
  <meta name="description" content="@yield('meta_description', setting('site_tagline','Advocates for founders.'))">
  <link rel="icon" type="image/x-icon" href="/favicon.ico">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="/assets/css/animate.min.css">
  <link rel="stylesheet" href="/assets/css/swiper.min.css">
  <link rel="stylesheet" href="/assets/css/fontawesome-pro.css">
  <link rel="stylesheet" href="/assets/css/odometer.min.css">
  <link rel="stylesheet" href="/assets/css/magnific-popup.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/sva-inner.css">

  @if(setting('custom_css'))
  <style>{!! setting('custom_css') !!}</style>
  @endif

  <style>
    @keyframes hideLoader { to { opacity: 0; visibility: hidden; display: none; } }
    .loader-wrap { animation: hideLoader 0s 4s forwards; }
  </style>

  @stack('styles')
</head>
<body>

  {{-- Page Loader --}}
  <div class="loader-wrap">
    <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
      <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
    </svg>
    <div class="loader-wrap-heading">
      <div class="load-text">
        @foreach(str_split(setting('site_name','SVA')) as $letter)
        <span>{{ $letter }}</span>
        @endforeach
      </div>
    </div>
  </div>

  {{-- Scroll to top --}}
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
  </div>

  {{-- Side Toggle --}}
  <aside class="fix">
    <div class="side-info">
      <div class="side-info-content">
        <div class="offset-widget offset-header">
          <div class="offset-logo">
            <a href="{{ route('home') }}">
              <img src="{{ setting('site_logo', '/assets/img/logo/sva-color.png') }}" class="normal-logo" alt="{{ setting('site_name') }}" style="max-height:40px;">
            </a>
          </div>
          <button id="side-info-close" class="side-info-close">x</button>
        </div>
        <div class="mobile-menu d-xl-none fix"></div>
        <div class="offset-widget-box">
          <h2 class="title">Contact Us</h2>
          <div class="contact-meta">
            @if(setting('contact_address'))
            <div class="contact-item">
              <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
              <span class="text">{{ setting('contact_address') }}</span>
            </div>
            @endif
            @if(setting('contact_email'))
            <div class="contact-item">
              <span class="icon"><i class="fa-solid fa-envelope"></i></span>
              <span class="text"><a href="mailto:{{ setting('contact_email') }}">{{ setting('contact_email') }}</a></span>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </aside>
  <div class="offcanvas-overlay"></div>

  {{-- Header --}}
  <header class="header-area-2">
    <div class="header-main">
      <div class="container large">
        <div class="header-area-2__inner">
          <div class="header__logo">
            <a href="{{ route('home') }}">
              <img src="{{ setting('site_logo', '/assets/img/logo/sva-color.png') }}" alt="{{ setting('site_name') }}" style="height:60px;width:auto;">
            </a>
          </div>
          <div class="header__nav">
            <nav class="main-menu">
              <ul>
                <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                <li class="menu-item-has-children {{ request()->is('portfolio*') ? 'active' : '' }}">
                  <a href="{{ route('portfolio') }}">{{ __('Portfolio') }}</a>
                  <ul class="dp-menu">
                    <li><a href="{{ route('portfolio') }}">{{ __('Overview') }}</a></li>
                    <li><a href="{{ route('portfolio') }}?stage=Seed">{{ __('Seed') }}</a></li>
                    <li><a href="{{ route('portfolio') }}?stage=Growth">{{ __('Growth') }}</a></li>
                  </ul>
                </li>
                <li class="menu-item-has-children {{ request()->is('about*') ? 'active' : '' }}">
                  <a href="{{ route('about') }}">{{ __('About') }}</a>
                  <ul class="dp-menu">
                    <li><a href="{{ route('about') }}">{{ __('Overview') }}</a></li>
                    <li><a href="{{ route('about.approach') }}">{{ __('Approach') }}</a></li>
                    <li><a href="{{ route('about.team') }}">{{ __('Team') }}</a></li>
                    <li><a href="{{ route('faq') }}">{{ __('FAQ') }}</a></li>
                  </ul>
                </li>
                <li class="{{ request()->is('blog*') ? 'active' : '' }}"><a href="{{ route('blog') }}">{{ __('Insights') }}</a></li>
                <li class="{{ request()->is('contact*') ? 'active' : '' }}"><a href="{{ route('contact') }}">{{ __('Contact') }}</a></li>
              </ul>
            </nav>
          </div>
          <div class="header__button d-flex align-items-center gap-3">
            @include('partials.lang-switcher')
            <a href="{{ route('contact') }}" class="btn-primary">{{ __('Get In Touch') }}</a>
          </div>
          <div class="header__navicon d-xl-none">
            <button class="side-toggle"><i class="fa-solid fa-bars"></i></button>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div id="has_smooth" class="has-smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main>
        @yield('content')
      </main>

      {{-- Footer --}}
      <footer class="footer-area-2">
        <div class="footer-bg" data-background="/assets/img/footer/footer-bg-2.png">
          <div class="container">
            <div class="footer-cta">
              <h2 class="footer-cta-title wow fade-in-bottom" data-wow-delay="600ms">
                {{ __("Let's start Something Great Together") }}
              </h2>
            </div>
            <div class="footer-widget-wrapper-box">
              <div class="footer-widget-wrapper">
                <div class="footer-widget-box">
                  <div class="content">
                    <a class="logo" href="{{ route('home') }}">
                      <img src="{{ setting('site_logo_footer', setting('site_logo', '/assets/img/logo/sva-color.png')) }}" alt="{{ setting('site_name') }}" style="height:80px;width:auto;">
                    </a>
                    <p>{{ setting('footer_about', 'SV Angel is a seed fund helping founders build great companies since 1992.') }}</p>
                  </div>
                </div>
                <div class="footer-widget-box">
                  <h2 class="title">{{ __('Portfolio') }}</h2>
                  <ul class="footer-nav-list">
                    <li><a href="{{ route('portfolio') }}">{{ __('Overview') }}</a></li>
                    <li><a href="{{ route('portfolio') }}?stage=Seed">{{ __('Seed') }}</a></li>
                    <li><a href="{{ route('portfolio') }}?stage=Growth">{{ __('Growth') }}</a></li>
                  </ul>
                </div>
                <div class="footer-widget-box">
                  <h2 class="title">{{ __('About') }}</h2>
                  <ul class="footer-nav-list">
                    <li><a href="{{ route('about') }}">{{ __('Overview') }}</a></li>
                    <li><a href="{{ route('about.approach') }}">{{ __('Approach') }}</a></li>
                    <li><a href="{{ route('about.team') }}">{{ __('Team') }}</a></li>
                    <li><a href="{{ route('faq') }}">{{ __('FAQ') }}</a></li>
                  </ul>
                </div>
                <div class="footer-widget-box">
                  <h2 class="title">{{ __('Connect') }}</h2>
                  <ul class="footer-socail">
                    @if(setting('social_linkedin'))<li><a href="{{ setting('social_linkedin') }}" target="_blank"><i class="fa-brands fa-linkedin"></i> LinkedIn</a></li>@endif
                    @if(setting('social_twitter'))<li><a href="{{ setting('social_twitter') }}" target="_blank"><i class="fa-brands fa-x-twitter"></i> X Twitter</a></li>@endif
                    @if(setting('social_medium'))<li><a href="{{ setting('social_medium') }}" target="_blank"><i class="fa-brands fa-medium"></i> Medium</a></li>@endif
                    @if(setting('social_crunchbase'))<li><a href="{{ setting('social_crunchbase') }}" target="_blank"><i class="fa-solid fa-database"></i> Crunchbase</a></li>@endif
                  </ul>
                </div>
              </div>
            </div>
            <div class="copyright-area">
              <div class="copyright-text">
                <p class="text">{{ setting('footer_copyright', '©'.date('Y').' SV Angel') }}</p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  {{-- Fallback: remove preloader if JS fails to load --}}
  <script>
    window.addEventListener('load', function() {
      setTimeout(function() {
        var loader = document.querySelector('.loader-wrap');
        if (loader) { loader.style.display = 'none'; }
      }, 3000);
    });
  </script>
  <script src="/assets/js/jquery-3.7.1.min.js"></script>
  <script src="/assets/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/jquery.meanmenu.min.js"></script>
  <script src="/assets/js/swiper.min.js"></script>
  <script src="/assets/js/gsap.min.js"></script>
  <script src="/assets/js/ScrollSmoother.min.js"></script>
  <script src="/assets/js/ScrollTrigger.min.js"></script>
  <script src="/assets/js/SplitText.min.js"></script>
  <script src="/assets/js/odometer.min.js"></script>
  <script src="/assets/js/waypoints.min.js"></script>
  <script src="/assets/js/wow.min.js"></script>
  <script src="/assets/js/magnific-popup.min.js"></script>
  <script src="/assets/js/main.js"></script>

  @if(setting('custom_js'))
  <script>{!! setting('custom_js') !!}</script>
  @endif

  @stack('scripts')
</body>
</html>
