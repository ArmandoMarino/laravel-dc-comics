@php
  $links = config('menu'); 
@endphp

<header class="container">
    <figure id="logo-header">
        <a href="{{ route('home') }}">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC_Logo">
        </a>
    </figure>
    <nav>
        <ul>
            @foreach ($links as $link)
            <li>
                <a href="{{ route($link['route_name']) }}">{{$link['text']}}</a>
            </li>
            @endforeach

        </ul>
    </nav>
</header>