@props(['text'])
@php
    $classes = "f-ui-1 underline-thickness-1 underline underline-offset-4 hover:decoration-gray-800 group-hover:decoration-[rgba(var(--text-primary-rgb),0.2)]"
@endphp

    <span {{ $attributes->merge(['class' => $classes]) }}><a href="#" class="text-white font-bold">{{ $text }}</a></span>

