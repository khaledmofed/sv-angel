@extends('layouts.admin')
@section('title','Settings')

@section('content')
<ul class="nav nav-tabs mb-4" id="settingsTabs">
  <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#general">General</a></li>
  <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#branding">Branding</a></li>
  <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#contact">Contact</a></li>
  <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#social">Social</a></li>
  <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#scripts">Custom Scripts</a></li>
</ul>

<div class="tab-content">

  {{-- Branding --}}
  <div class="tab-pane fade" id="branding">
    <div class="card p-4" style="max-width:600px">

      {{-- Logo (Header) --}}
      <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data" class="mb-4">
        @csrf
        <input type="hidden" name="group" value="branding">
        <h6 class="fw-bold mb-3">Header Logo</h6>
        @php $currentLogo = $settings['site_logo']->value ?? '/assets/img/logo/sva-color.png'; @endphp
        <div class="mb-3">
          <img src="{{ $currentLogo }}" alt="Current Logo" style="height:60px;background:#f0f0f0;padding:8px;border-radius:6px;">
        </div>
        <div class="mb-3">
          <label class="form-label">Upload New Logo <small class="text-muted">(PNG/JPG/SVG, max 2MB)</small></label>
          <input type="file" name="logo" class="form-control" accept="image/*">
        </div>
        <button class="btn btn-dark btn-sm">Save Header Logo</button>
      </form>

      <hr>

      {{-- Logo (Footer) --}}
      <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data" class="mb-4 mt-4">
        @csrf
        <input type="hidden" name="group" value="branding_footer">
        <h6 class="fw-bold mb-3">Footer Logo</h6>
        @php $footerLogo = $settings['site_logo_footer']->value ?? '/assets/img/logo/sva-color.png'; @endphp
        <div class="mb-3">
          <img src="{{ $footerLogo }}" alt="Current Footer Logo" style="height:60px;background:#111;padding:8px;border-radius:6px;">
        </div>
        <div class="mb-3">
          <label class="form-label">Upload New Footer Logo <small class="text-muted">(PNG/JPG/SVG, max 2MB)</small></label>
          <input type="file" name="logo_footer" class="form-control" accept="image/*">
        </div>
        <button class="btn btn-dark btn-sm">Save Footer Logo</button>
      </form>

      <hr>

      {{-- Favicon --}}
      <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data" class="mt-4">
        @csrf
        <input type="hidden" name="group" value="branding_favicon">
        <h6 class="fw-bold mb-3">Favicon</h6>
        <div class="mb-3">
          <img src="/favicon.ico?v={{ time() }}" alt="Current Favicon" style="width:32px;height:32px;border:1px solid #ddd;border-radius:4px;padding:2px;">
        </div>
        <div class="mb-3">
          <label class="form-label">Upload New Favicon <small class="text-muted">(.ico / .png, max 512KB)</small></label>
          <input type="file" name="favicon" class="form-control" accept=".ico,.png,.svg">
        </div>
        <button class="btn btn-dark btn-sm">Save Favicon</button>
      </form>

    </div>
  </div>
  {{-- General --}}
  <div class="tab-pane fade show active" id="general">
    <div class="card p-4">
      <form method="POST" action="{{ route('admin.settings.update') }}">
        @csrf
        <input type="hidden" name="group" value="general">
        @foreach(['site_name'=>'Site Name','site_tagline'=>'Site Tagline','footer_copyright'=>'Footer Copyright','stat_funded'=>'Total Funded (e.g. 599.4)','stat_investments_count'=>'Total Investments','stat_funds_raised'=>'Funds Raised','stat_diversity_investments'=>'Diversity Investments','stat_exits'=>'Exits','stat_lead_investments'=>'Lead Investments','stat_ai_fintech_crypto'=>'AI, Fintech & Crypto','stat_other_sectors'=>'Other Sectors'] as $key=>$label)
        <div class="mb-3">
          <label class="form-label fw-semibold">{{ $label }}</label>
          <input type="text" name="{{ $key }}" class="form-control" value="{{ $settings[$key]->value ?? '' }}">
        </div>
        @endforeach
        <button class="btn btn-dark">Save General Settings</button>
      </form>
    </div>
  </div>

  {{-- Contact --}}
  <div class="tab-pane fade" id="contact">
    <div class="card p-4">
      <form method="POST" action="{{ route('admin.settings.update') }}">
        @csrf
        <input type="hidden" name="group" value="contact">
        @foreach(['contact_address'=>'Address','contact_email'=>'Email','contact_phone'=>'Phone'] as $key=>$label)
        <div class="mb-3">
          <label class="form-label fw-semibold">{{ $label }}</label>
          <input type="text" name="{{ $key }}" class="form-control" value="{{ $settings[$key]->value ?? '' }}">
        </div>
        @endforeach
        <button class="btn btn-dark">Save Contact Settings</button>
      </form>
    </div>
  </div>

  {{-- Social --}}
  <div class="tab-pane fade" id="social">
    <div class="card p-4">
      <form method="POST" action="{{ route('admin.settings.update') }}">
        @csrf
        <input type="hidden" name="group" value="social">
        @foreach(['social_linkedin'=>'LinkedIn URL','social_twitter'=>'Twitter/X URL','social_medium'=>'Medium URL','social_crunchbase'=>'Crunchbase URL'] as $key=>$label)
        <div class="mb-3">
          <label class="form-label fw-semibold">{{ $label }}</label>
          <input type="url" name="{{ $key }}" class="form-control" value="{{ $settings[$key]->value ?? '' }}">
        </div>
        @endforeach
        <button class="btn btn-dark">Save Social Links</button>
      </form>
    </div>
  </div>

  {{-- Scripts --}}
  <div class="tab-pane fade" id="scripts">
    <div class="card p-4">
      <form method="POST" action="{{ route('admin.settings.update') }}">
        @csrf
        <input type="hidden" name="group" value="scripts">
        <div class="mb-3">
          <label class="form-label fw-semibold">Custom CSS <small class="text-muted">(injected in &lt;head&gt;)</small></label>
          <textarea name="custom_css" class="form-control font-monospace" rows="8" placeholder="/* Your custom CSS here */">{{ $settings['custom_css']->value ?? '' }}</textarea>
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">Custom JavaScript <small class="text-muted">(injected before &lt;/body&gt;)</small></label>
          <textarea name="custom_js" class="form-control font-monospace" rows="8" placeholder="// Your custom JS here">{{ $settings['custom_js']->value ?? '' }}</textarea>
        </div>
        <button class="btn btn-dark">Save Scripts</button>
      </form>
    </div>
  </div>
</div>
@endsection
