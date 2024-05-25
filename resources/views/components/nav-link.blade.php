@props(['active' => false])

<a class="{{ $active ? 'nav-link active': 'nav-link'}}"
{{ $attributes }}
> {{ $slot }}</a>
