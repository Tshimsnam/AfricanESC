@props(['active' => false])

<a {{ $attributes->class([
    'text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300',
    'text-green-600 font-bold border-b-2 border-green-600' => $active
]) }}>
    {{ $slot }}
</a>
