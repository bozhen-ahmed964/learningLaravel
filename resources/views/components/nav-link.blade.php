@props(['active' => false])
<a {{ $attributes }}
    class=" block py-2 px-3 text-white  {{ $active ? 'py-2 px-3 rounded bg-cyan-600  ' : 'hover:text-blue-700'}}"
    aria-current="{{ $active ? 'page' : 'false' }}">{{ $slot }}</a>
