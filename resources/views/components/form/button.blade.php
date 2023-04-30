@php
    $classes = "bg-white p-2 rounded-lg transition ease-in-out hover:scale-110 hover:bg-gray-300"
@endphp
<button {{ $attributes->merge(['class' => $classes]) }} type="submit">{{ $slot }}</button>
