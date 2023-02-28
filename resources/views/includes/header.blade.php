@php
// LINKS IMPORTATI DA config ma non usati qui
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
            {{-- @foreach ($links as $link) --}}
            <li>
                <a class="nav-link @if (Route::is('home')) active @endif" href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a class="nav-link @if (Route::is('comics.index')) active @endif" href="{{ route('comics.index') }}">Comics</a>
            </li>
            {{-- @endforeach --}}

        </ul>
    </nav>
</header>