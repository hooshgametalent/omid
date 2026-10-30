@props(['items' => []])
<div class="site-container breadcrumb" aria-label="مسیر صفحه">
    <a href="{{ url('/') }}">خانه</a>
    @foreach($items as $label => $href)
        <span>/</span>
        @if($loop->last)<span>{{ $label }}</span>@else<a href="{{ $href }}">{{ $label }}</a>@endif
    @endforeach
</div>
