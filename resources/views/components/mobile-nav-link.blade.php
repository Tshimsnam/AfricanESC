@props(['href', 'active' => false, 'icon' => null])

<a href="{{ $href }}"
   @class([
       'block px-3 py-2 rounded-md text-base font-medium',
       'text-white bg-green-600' => $active,
       'text-gray-700 hover:text-green-600 hover:bg-green-50' => !$active
   ])>
    @if($icon)
        <i class="{{ $icon }} mr-2"></i>
    @endif
    {{ $slot }}
</a>
