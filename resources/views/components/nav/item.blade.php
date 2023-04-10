@props(['route', 'name'])
@php
$classes = 'hover:bg-teal-800 rounded-lg p-2';
@endphp
<li {{ $attributes->merge(['class' => $classes]) }}><a class="mr-3 flex items-center font-bold gap-1"  href="{{ route($route) }}">{{ ucwords($name) }}
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 20 20">
        <path d="M10 14.83l-6.18-6.18a1 1 0 011.41-1.41L10 12l4.77-4.76a1 1 0 011.41 1.41L10 14.83z"/>
      </svg>
    </a> 
</li>
