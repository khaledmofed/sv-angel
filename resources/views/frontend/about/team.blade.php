@extends('layouts.app')
@section('title','Team — ' . setting('site_name'))

@section('content')

<section class="sva-page-hero" style="padding-bottom:60px;">
  <div class="container text-center" style="max-width:620px;">
    <span class="sva-eyebrow">{{ __('The Team') }}</span>
    <h1 class="sva-page-title">{{ __('Dedicated to founders') }}</h1>
    <p class="sva-lead sva-lead--light" style="margin:0 auto;">{{ __('Small team. Decades of experience.') }}</p>
  </div>
</section>

<section class="sva-section sva-section--soft">
  <div class="container">
    <div class="row g-4">
      @foreach($members as $member)
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="sva-member">
          @if($member->photo)
          <img src="{{ str_starts_with($member->photo, 'http') ? $member->photo : Storage::url($member->photo) }}"
               alt="{{ $member->name }}" class="sva-member__photo">
          @else
          <div class="sva-member__placeholder">
            <span>{{ strtoupper(substr($member->name,0,2)) }}</span>
          </div>
          @endif
          <div class="sva-member__body">
            <p class="sva-member__name">{{ $member->name }}</p>
            <p class="sva-member__role">{{ $member->title }}</p>
            <p class="sva-member__bio">{{ Str::limit($member->bio, 100) }}</p>
            <div class="sva-member__links d-flex gap-2">
              @if($member->twitter_url)
              <a href="{{ $member->twitter_url }}" target="_blank"><i class="fa-brands fa-x"></i></a>
              @endif
              @if($member->linkedin_url)
              <a href="{{ $member->linkedin_url }}" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
              @endif
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
