@php

$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
    // dd($prefix)
    // dd($route)

@endphp

<aside class="widget widget-nav-menu">
    <ul class="widget-menu">
        <li class="{{ ($route == 'building.page') ? 'active': '' }}"><a href="{{ route('building.page') }}">Building Construction</a></li>
        <li class="{{ ($route == 'eletrical.page') ? 'active': '' }}"><a href="{{ route('eletrical.page') }}">Electrical Installation</a></li>
        <li class="{{ ($route == 'interiors.page') ? 'active': '' }}"><a href="{{ route('interiors.page') }}">Interiors &amp; Exteriors Decorator</a></li>
        <li class="{{ ($route == 'manufacturing.page') ? 'active': '' }}"><a href="{{ route('manufacturing.page') }}">Bottle &amp; Pure Water</a></li>
        <li class="{{ ($route == 'agriculture.page') ? 'active': '' }}"><a href="{{ route('agriculture.page') }}">Agriculture</a></li>
        <li class="{{ ($route == 'agriculture.page') ? 'active': '' }}"><a href="{{ route('agriculture.page') }}">Fumigation &amp; Pest COntrol</a></li>
    </ul>
</aside>