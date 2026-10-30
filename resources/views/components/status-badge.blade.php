@props(['type' => 'dark'])
<span {{ $attributes->class(['badge', 'badge--'.$type]) }}>{{ $slot }}</span>
