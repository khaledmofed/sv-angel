@php
$languages = [
    'en'    => ['fi'=>'us','label'=>'EN','name'=>'English'],
    'ja'    => ['fi'=>'jp','label'=>'JA','name'=>'日本語'],
    'ko'    => ['fi'=>'kr','label'=>'KO','name'=>'한국어'],
    'es'    => ['fi'=>'es','label'=>'ES','name'=>'Español'],
    'zh-TW' => ['fi'=>'tw','label'=>'ZH','name'=>'繁體中文'],
    'vi'    => ['fi'=>'vn','label'=>'VI','name'=>'Tiếng Việt'],
];
$current = app()->getLocale();
$cur     = $languages[$current] ?? $languages['en'];
@endphp

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css">

<div class="sva-lang-switcher" id="langSwitcher">
  <button class="sva-lang-btn" id="langBtn" type="button" aria-haspopup="true" aria-expanded="false">
    <span class="fi fi-{{ $cur['fi'] }} sva-lang-flag"></span>
    <span class="sva-lang-code">{{ $cur['label'] }}</span>
    <i class="fa-solid fa-chevron-down sva-lang-chevron"></i>
  </button>
  <div class="sva-lang-dropdown" id="langDropdown" role="menu">
    @foreach($languages as $code => $lang)
    <a href="{{ route('lang.switch', $code) }}"
       class="sva-lang-option {{ $current === $code ? 'active' : '' }}"
       role="menuitem">
      <span class="fi fi-{{ $lang['fi'] }} sva-lang-flag"></span>
      <span class="sva-lang-option-name">{{ $lang['name'] }}</span>
    </a>
    @endforeach
  </div>
</div>

<style>
.sva-lang-flag { width:20px; height:15px; border-radius:2px; flex-shrink:0; }
.sva-lang-switcher { position:relative; display:inline-flex; align-items:center; }
.sva-lang-btn {
  display:flex; align-items:center; gap:7px;
  background:transparent; border:1px solid rgba(255,255,255,.25);
  border-radius:20px; padding:5px 12px 5px 8px; cursor:pointer;
  font-size:12px; font-weight:700; color:var(--sva-ink,#fff);
  letter-spacing:.04em; transition:border-color .2s, background .2s;
  white-space:nowrap;
}
.sva-lang-btn:hover { border-color:var(--sva-gold,#a58517); background:rgba(255,255,255,.06); }
.sva-lang-code { font-family:'Bricolage Grotesque',sans-serif;color:#fff; }
.sva-lang-chevron { font-size:9px; transition:transform .25s; color:rgba(255,255,255,.6); }
.sva-lang-switcher.open .sva-lang-chevron { transform:rotate(180deg); }
.sva-lang-dropdown {
  display:none; position:absolute; top:calc(100% + 8px); right:0;
  background:#fff; border-radius:14px;
  box-shadow:0 12px 40px rgba(0,0,0,.18); min-width:176px;
  padding:6px; z-index:9999; border:1px solid rgba(0,0,0,.06);
}
.sva-lang-switcher.open .sva-lang-dropdown { display:block; animation:svaLangFade .15s ease; }
@keyframes svaLangFade { from { opacity:0; transform:translateY(-6px); } to { opacity:1; transform:none; } }
.sva-lang-option {
  display:flex; align-items:center; gap:10px;
  padding:9px 12px; border-radius:8px; font-size:13px;
  font-weight:500; color:#111; text-decoration:none;
  transition:background .12s;
}
.sva-lang-option:hover { background:#f5f3ee; }
.sva-lang-option.active { background:#fdf6e3; font-weight:700; color:#8a6e0b; }
.sva-lang-option-name { font-family:'Bricolage Grotesque',sans-serif; }
</style>

<script>
(function(){
  var sw = document.getElementById('langSwitcher');
  var btn = document.getElementById('langBtn');
  if(!sw||!btn) return;
  btn.addEventListener('click', function(e){ e.stopPropagation(); sw.classList.toggle('open'); });
  document.addEventListener('click', function(){ sw.classList.remove('open'); });
})();
</script>
