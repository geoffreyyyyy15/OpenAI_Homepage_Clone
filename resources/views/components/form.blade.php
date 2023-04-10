@props(['name', 'type' => 'text'])
<x-form.label name="{{ $name }}" />
<input type="{{ $type }}" name="{{ $name }}" value="{{old($name)}}" class="bg-gray-800 rounded text-sm w-80 p-1  text-white">
<x-form.error name="{{ $name }}" />

