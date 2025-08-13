@props(['href', 'active' => false])

<a href="{{ $href }}"
   @class([
       'text-gray-700 hover:text-green-600 transition duration-300 relative group',
       'text-green-600' => $active
   ])>
    {{ $slot }}
    <span @class([
        'absolute bottom-0 left-0 w-full h-0.5 bg-green-500 transition-all duration-300',
        'opacity-100' => $active,
        'opacity-0 group-hover:opacity-100 w-0 group-hover:w-full' => !$active
    ])></span>
</a>
