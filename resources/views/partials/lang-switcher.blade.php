@php
$languages = [
    'en'    => ['flag'=>'🇺🇸','label'=>'EN','name'=>'English'],
    'ja'    => ['flag'=>'🇯🇵','label'=>'JA','name'=>'日本語'],
    'ko'    => ['flag'=>'🇰🇷','label'=>'KO','name'=>'한국어'],
    'es'    => ['flag'=>'🇪🇸','label'=>'ES','name'=>'Español'],
    'zh-TW' => ['flag'=>'🇹🇼','label'=>'ZH','name'=>'繁體中文'],
    'vi'    => ['flag'=>'🇻🇳','label'=>'VI','name'=>'Tiếng Việt'],
];
$current = app()->getLocale();
$cur     = $languages[$current] ?? $languages['en'];
@endphp

<div class="sva-lang-switcher" id="langSwitcher">
  <button class="sva-lang-btn" id="langBtn" type="button" aria-haspopup="true" aria-expanded="false">
    <span>{{ $cur['flag'] }}</span>
    <span class="sva-lang-code">{{ $cur['label'] }}</span>
    <i class="fa-solid fa-chevron-down sva-lang-chevron"></i>
  </button>
  <div class="sva-lang-dropdown" id="langDropdown" role="menu">
    @foreach($languages as $code => $lang)
    <a href="{{ route('lang.switch', $code) }}"
       class="sva-lang-option {{ $current === $code ? 'active' : '' }}"
       role="menuitem">
      <span>{{ $lang['flag'] }}</span>
      <span>{{ $lang['name'] }}</span>
    </a>
    @endforeach
  </div>
</div>

<style>
.sva-lang-switcher { position:relative; display:inline-flex; align-items:center; }
.sva-lang-btn {
  display:flex; align-items:center; gap:6px;
  background:transparent; border:1px solid rgba(255,255,255,.25);
  border-radius:20px; padding:5px 12px; cursor:pointer;
  font-size:12px; font-weight:700; color:var(--sva-ink);
  letter-spacing:.04em; transition:border-color .2s;
}
.sva-lang-btn:hover { border-color:var(--sva-gold); }
.sva-lang-code { font-family:'Bricolage Grotesque',sans-serif; }
.sva-lang-chevron { font-size:9px; transition:transform .25s; }
.sva-lang-switcher.open .sva-lang-chevron { transform:rotate(180deg); }
.sva-lang-dropdown {
  display:none; position:absolute; top:calc(100% + 8px); right:0;
  background:#fff; border-radius:12px;
  box-shadow:0 8px 32px rgba(0,0,0,.14); min-width:168px;
  padding:8px; z-index:9999;
}
.sva-lang-switcher.open .sva-lang-dropdown { display:block; }
.sva-lang-option {
  display:flex; align-items:center; gap:10px;
  padding:9px 12px; border-radius:8px; font-size:13px;
  font-weight:500; color:#111; text-decoration:none;
  transition:background .15s;
}
.sva-lang-option:hover { background:#f5f3ee; }
.sva-lang-option.active { background:var(--sva-gold-pale,#fdf8ee); font-weight:700; color:var(--sva-gold,#a58517); }
</style>

<script>
(function(){
  var sw = document.getElementById('langSwitcher');
  var btn = document.getElementById('langBtn');
  if(!sw||!btn) return;
  btn.addEventListener('click', function(e){
    e.stopPropagation();
    sw.classList.toggle('open');
  });
  document.addEventListener('click', function(){ sw.classList.remove('open'); });
})();
</script>
