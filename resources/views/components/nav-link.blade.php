@props(['active'])

@php
$classes = ($active ?? false)
            ? 'btn btn-primary'
            : 'btn btn-primary-outline';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
