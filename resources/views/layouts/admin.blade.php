<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin — @yield('title','Dashboard') | {{ setting('site_name','SV Angel') }}</title>
  <link rel="icon" type="image/x-icon" href="/favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <style>
    body { background:#f7f7f7; }
    .sidebar { width:250px; min-height:100vh; background:#000000; position:fixed; top:0; left:0; z-index:1000; overflow-y:auto; }
    .sidebar-brand { padding:20px; border-bottom:1px solid rgba(255,255,255,.1); }
    .sidebar .nav-link { color:rgba(255,255,255,.65); padding:10px 20px; display:flex; align-items:center; gap:10px; transition:.2s; border-radius:0; }
    .sidebar .nav-link:hover { color:#fff; background:rgba(179,138,26,.15); }
    .sidebar .nav-link.active { color:#a58517; background:rgba(179,138,26,.1); border-left:3px solid #a58517; }
    .sidebar .nav-section { color:rgba(255,255,255,.3); font-size:11px; font-weight:600; text-transform:uppercase; padding:15px 20px 5px; letter-spacing:.05em; }
    .main-content { margin-left:250px; min-height:100vh; }
    .topbar { background:#fff; border-bottom:1px solid #e6e6e6; padding:12px 25px; display:flex; justify-content:space-between; align-items:center; position:sticky; top:0; z-index:100; }
    .content-area { padding:25px; }
    .card { border:none; box-shadow:0 1px 4px rgba(0,0,0,.06); border-radius:8px; }
    .stat-card { border-radius:8px; border:none; }
    .badge-unread { background:#a58517; color:#fff; border-radius:50px; font-size:10px; padding:2px 7px; }
    .btn-dark { background:#000; border-color:#000; }
    .btn-dark:hover { background:#2b2b2b; border-color:#2b2b2b; }
    .btn-outline-dark { border-color:#000; color:#000; }
    .btn-outline-dark:hover { background:#000; color:#fff; }
    .table-light { background:#f9f9f9 !important; }
    .badge.bg-success { background:#2b2b2b !important; }
    .badge.bg-info { background:#a58517 !important; color:#fff !important; }
    @media(max-width:768px){ .sidebar{width:0;overflow:hidden;} .main-content{margin-left:0;} }
  </style>
  @stack('styles')
</head>
<body>

{{-- Sidebar --}}
<div class="sidebar">
  <div class="sidebar-brand">
    <img src="{{ setting('site_logo', '/assets/img/logo/sva-white.png') }}" alt="{{ setting('site_name','SV Angel') }}" style="max-height:36px;max-width:160px;filter:brightness(0) invert(1);">
    <small style="display:block;color:rgba(255,255,255,.5);font-size:11px;margin-top:4px;">Admin Panel</small>
  </div>
  <nav class="pt-2">
    <div class="nav-section">Main</div>
    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
      <i class="bi bi-speedometer2"></i> Dashboard
    </a>

    <div class="nav-section">Content</div>
    <a href="{{ route('admin.hero.edit') }}" class="nav-link {{ request()->routeIs('admin.hero*') ? 'active' : '' }}">
      <i class="bi bi-layout-text-window-reverse"></i> Hero Section
    </a>
    <a href="{{ route('admin.mission.edit') }}" class="nav-link {{ request()->routeIs('admin.mission*') ? 'active' : '' }}">
      <i class="bi bi-megaphone"></i> Mission Statement
    </a>
    <a href="{{ route('admin.about-stories.index') }}" class="nav-link {{ request()->routeIs('admin.about-stories*') ? 'active' : '' }}">
      <i class="bi bi-journal-text"></i> About Stories
    </a>
    <a href="{{ route('admin.principles.index') }}" class="nav-link {{ request()->routeIs('admin.principles*') ? 'active' : '' }}">
      <i class="bi bi-list-stars"></i> Principles
    </a>
    <a href="{{ route('admin.portfolio.index') }}" class="nav-link {{ request()->routeIs('admin.portfolio*') ? 'active' : '' }}">
      <i class="bi bi-grid-3x3-gap"></i> Portfolio
    </a>
    <a href="{{ route('admin.team.index') }}" class="nav-link {{ request()->routeIs('admin.team*') ? 'active' : '' }}">
      <i class="bi bi-people"></i> Team
    </a>
    <a href="{{ route('admin.testimonials.index') }}" class="nav-link {{ request()->routeIs('admin.testimonials*') ? 'active' : '' }}">
      <i class="bi bi-chat-quote"></i> Testimonials
    </a>
    <a href="{{ route('admin.awards.index') }}" class="nav-link {{ request()->routeIs('admin.awards*') ? 'active' : '' }}">
      <i class="bi bi-trophy"></i> Awards
    </a>
    <a href="{{ route('admin.services.index') }}" class="nav-link {{ request()->routeIs('admin.services*') ? 'active' : '' }}">
      <i class="bi bi-briefcase"></i> Services
    </a>
    <a href="{{ route('admin.featured-works.index') }}" class="nav-link {{ request()->routeIs('admin.featured-works*') ? 'active' : '' }}">
      <i class="bi bi-images"></i> Featured Works
    </a>
    <a href="{{ route('admin.process.index') }}" class="nav-link {{ request()->routeIs('admin.process*') ? 'active' : '' }}">
      <i class="bi bi-diagram-3"></i> Process Steps
    </a>
    <a href="{{ route('admin.brands.index') }}" class="nav-link {{ request()->routeIs('admin.brands*') ? 'active' : '' }}">
      <i class="bi bi-star"></i> Brand Logos
    </a>
    <a href="{{ route('admin.blog.index') }}" class="nav-link {{ request()->routeIs('admin.blog*') ? 'active' : '' }}">
      <i class="bi bi-newspaper"></i> Blog Posts
    </a>
    <a href="{{ route('admin.faqs.index') }}" class="nav-link {{ request()->routeIs('admin.faqs*') ? 'active' : '' }}">
      <i class="bi bi-question-circle"></i> FAQs
    </a>

    <div class="nav-section">System</div>
    <a href="{{ route('admin.settings') }}" class="nav-link {{ request()->routeIs('admin.settings*') ? 'active' : '' }}">
      <i class="bi bi-gear"></i> Settings
    </a>
    <a href="{{ route('admin.messages.index') }}" class="nav-link {{ request()->routeIs('admin.messages*') ? 'active' : '' }}">
      <i class="bi bi-envelope"></i> Messages
    </a>

    <div class="nav-section">Site</div>
    <a href="{{ route('home') }}" target="_blank" class="nav-link">
      <i class="bi bi-box-arrow-up-right"></i> View Site
    </a>
    <form method="POST" action="{{ route('admin.logout') }}">
      @csrf
      <button type="submit" class="nav-link border-0 bg-transparent w-100 text-start">
        <i class="bi bi-box-arrow-right"></i> Logout
      </button>
    </form>
  </nav>
</div>

{{-- Main --}}
<div class="main-content">
  <div class="topbar">
    <h6 class="mb-0 fw-semibold">@yield('title','Dashboard')</h6>
    <div class="d-flex align-items-center gap-3">
      <small class="text-muted">{{ auth()->user()->name }}</small>
    </div>
  </div>
  <div class="content-area">

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <ul class="mb-0">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    @yield('content')
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
