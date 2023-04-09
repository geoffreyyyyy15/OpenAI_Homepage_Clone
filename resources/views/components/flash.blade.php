@if (session()->has('success'))
<div x-data="{ show: true }"
     x-init="setTimeout(() => show = false, 5000)"
     x-show= "show"
>
    <p class="fixed right-2 bottom-2 rounded-xl p-2 text-white bg-gray-900 ">{{ session('success') }}</p>
</div>
@endif
