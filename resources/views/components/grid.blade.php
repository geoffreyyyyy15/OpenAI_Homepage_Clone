@props(['column'])
@php
    $classes = "grid grid-cols-$column gap-4 text-white xs:block xl:inline-flex lg:inline-flex"
@endphp
<div {{ $attributes->merge(['class' => $classes ]) }}>
    {{ $slot }}
</div>
