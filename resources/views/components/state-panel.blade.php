@props(['title', 'message', 'type' => 'warning', 'action' => null, 'href' => '/demo'])
<div class="panel" style="padding:48px;text-align:center">
    <x-status-badge :type="$type">وضعیت نمایشی</x-status-badge>
    <h2 style="font-size:24px;font-weight:950;margin:18px 0 8px">{{ $title }}</h2>
    <p class="muted" style="max-width:620px;margin:0 auto">{{ $message }}</p>
    @if($action)<a class="button button--primary" style="margin-top:22px" href="{{ url($href) }}">{{ $action }}</a>@endif
</div>
