@props(['title'])
@php
$classes = "flex sm:block bg-black p-10 m-5"    
@endphp
<h1 class="text-white">Research</h1>
<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
