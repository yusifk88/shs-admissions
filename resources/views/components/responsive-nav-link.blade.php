@props(['active'])

@php
$classes = ($active ?? false)
            ? 'dropdown-item d-flex align-items-center text-danger'
            : 'dropdown-item d-flex align-items-center text-danger';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
