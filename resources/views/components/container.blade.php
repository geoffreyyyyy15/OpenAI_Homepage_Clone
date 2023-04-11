@props(['title'])
@php
$classes = "flex sm:block bg-black p-10 m-5"
@endphp
<h1 class="text-white p-2 m-5" style="font-size: 40px">{{ $title }}</h1>
<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
