@props(['title', 'excerpt', 'hidden', 'file'])
@php
    $path = asset("images/$file")
@endphp
<div class="mb-5">
    <img src="{{ $path }}" alt="img" style="width:500px; height: 300px" {{$hidden}}>
    <h2 class="font-bold text-white text-xl mb-3">{{ $title }}</h2>
    <a href="#" class="relative">
        <span class="f-ui-1 underline-thickness-1 underline underline-offset-4 hover:decoration-gray-800 group-hover:decoration-[rgba(var(--text-primary-rgb),0.2)]">{{ $excerpt }}</span>
    </a>
</div>
