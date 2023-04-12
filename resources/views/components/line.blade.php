@php
    $classes = "bg-white m-2"
@endphp
<hr {{ $attributes->merge(['class' => $classes]) }}>
