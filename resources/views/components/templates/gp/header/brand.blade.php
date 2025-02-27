@props([
    'url',
    'logoName',
    'siteName'
    ])

<a href="{{ $url }}" {{ $attributes }}>
    
    @if (isset($logoName))
        <img src="{{ asset('vendor/GP_Template/assets/img/' . $logoName) }}" alt="{{ $logoName }}">
    @elseif (isset($siteName))
        <h1 class="sitename">{{ $siteName }}</h1>
    @endif
</a>
