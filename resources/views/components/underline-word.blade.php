@props(['text'])
@php
    $classes = "f-ui-1 underline-thickness-1 underline-offset-4 underline  group-hover:decoration-[rgba(var(--text-primary-rgb),0.2)]"
@endphp
<a href="#" class="text-white font-bold">
    <span {{ $attributes->merge(['class' => $classes]) }}>{{ $text }}</span>
</a>
