@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block text-deep-red hover:text-pastel-red text-[10px] font-bold transition-all duration-200'
            : 'block text-deep-red hover:text-pastel-red text-[10px] font-bold transition-all duration-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <span class="inline-block px-1.5 py-0.5 rounded-md {{ $active ? 'bg-deep-red text-red-100' : '' }}">
        {{ $slot }}
    </span>
</a>
