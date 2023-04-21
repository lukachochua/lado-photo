@props(['withoutClasses' => null])

@php

$classes = 'py-2 px-4 text-white font-bold hover:text-gray-600 relative transition duration-400 ease-in-out text-lg
hover:border-t-2 border-gray-500';

if ($withoutClasses) {
    foreach ($withoutClasses as $class) {
        $classes = str_replace($class, '', $classes);
    }
}

@endphp


<a {{ $attributes->merge(['class' => $classes ]) }}>
    {{ $slot }}
</a>