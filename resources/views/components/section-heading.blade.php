@props(['eyebrow' => null, 'title', 'description' => null, 'link' => null, 'linkLabel' => 'مشاهده همه'])
<div class="section-heading">
    <div>
        @if($eyebrow)<span class="eyebrow">{{ $eyebrow }}</span>@endif
        <h2>{{ $title }}</h2>
        @if($description)<p>{{ $description }}</p>@endif
    </div>
    @if($link)<a class="button button--outline" href="{{ $link }}">{{ $linkLabel }}</a>@endif
</div>
