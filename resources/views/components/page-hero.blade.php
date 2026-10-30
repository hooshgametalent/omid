@props(['eyebrow' => 'فراز سازه کویر', 'title', 'lead' => null])
<section class="page-hero">
    <div class="site-container" style="position:relative;z-index:1">
        <span class="eyebrow">{{ $eyebrow }}</span>
        <h1 class="page-title">{{ $title }}</h1>
        @if($lead)<p class="page-lead">{{ $lead }}</p>@endif
        @if(trim((string) $slot) !== '')<div style="margin-top:24px">{{ $slot }}</div>@endif
    </div>
</section>
