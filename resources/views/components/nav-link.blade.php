@props(['active' => false, 'href' => '#'])

@php
$classes = 'text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300';

if ($active) {
    $classes .= ' text-green-600 font-bold border-b-2 border-green-600';
}
@endphp

<a href="{{ $href }}" class="{{ $classes }}" {{ $attributes->except('href') }}>
    {{ $slot }}
</a>
