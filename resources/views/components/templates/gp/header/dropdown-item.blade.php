@props(['children', 'name'])

<li class="dropdown">
    <a href="#">
        <span>{{ $name }}</span> 
        <i class="bi bi-chevron-down toggle-dropdown"></i>
    </a>
    <ul>
        {!! $children !!}
    </ul>
</li>
