@props(['column'])
@php
    $classes = "grid grid-cols-$column  gap-10   text-white "
@endphp
<div {{ $attributes->merge(['class' => $classes ]) }}>
    {{ $slot }}
</div>
