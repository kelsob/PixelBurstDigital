@props(['active'])

@php
$classes = ($active ?? false)
            ? 'whitespace-nowrap inline-flex text-blue-900 hover:text-pastel-red text-[10px] font-bold transition-all duration-200'
            : 'whitespace-nowrap inline-flex text-blue-900 hover:text-pastel-red text-[10px] font-bold transition-all duration-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <span class="px-1.5 py-0.5 rounded-md whitespace-nowrap {{ $active ? 'bg-blue-900 text-red-100' : '' }}">
        {{ $slot }}
    </span>
</a>
