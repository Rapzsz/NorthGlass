@props(['dark' => false])
<svg {{ $attributes->class(['brand-logo']) }} viewBox="{{ $dark ? '322 473 359 58' : '643 946 715 114' }}" role="img" aria-label="NorthGlass" xmlns="http://www.w3.org/2000/svg">
    <image href="{{ asset('images/northglass-'.($dark ? 'dark' : 'light').'.png') }}" width="{{ $dark ? 1000 : 2000 }}" height="{{ $dark ? 1000 : 2000 }}" />
</svg>
