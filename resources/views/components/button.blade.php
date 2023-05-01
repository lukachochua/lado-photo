@props(['withoutClasses' => null])

@php

$classes = 'font-custom py-4 px-4 text-white font-bold hover:text-white relative transition duration-400 ease-in-out text-lg
hover:border-t-2 border-white';

if ($withoutClasses) {
    foreach ($withoutClasses as $class) {
        $classes = str_replace($class, '', $classes);
    }
}

@endphp


<a {{ $attributes->merge(['class' => $classes ]) }}>
    {{ $slot }}
</a>