{{--

@props(['active' => false]) // membuat variable dengan nama active false,
key active ini akan di set di attribute tag component ini
props ini akan menerima data dari componen parent,

--}}
@props(['active' => false])

@php
    $classes = ($active ?? false) ? 'nav-link active' : 'nav-link'
@endphp

<li class="nav-item">
    <a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>
