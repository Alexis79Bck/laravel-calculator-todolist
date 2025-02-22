@props(['menuHtml'])

<nav {{ $attributes }}>
    <ul>
        {!! $menuHtml !!}
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>