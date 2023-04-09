@props(['route', 'name'])
<li class="hover:bg-teal-800 rounded-lg p-2"><a href="{{ route($route) }}">{{ ucwords($name) }}</a></li>
