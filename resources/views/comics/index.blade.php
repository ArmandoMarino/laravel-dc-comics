@extends('layouts.main')

@section('title', 'COMICS')

{{-- HERO INCLUDE --}}
@section('content')
<!-- BLACKBOARD PRODUCTS LIST -->
<section id="contents-space">
    <div class="row g-4 blackboard text-white">
        @foreach ($comics as $comic)
        <div class="col-12 col-md-6 col-lg-2">
            <a href="{{ route('comics.show', $comic->id )}}">
                <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </a>
            <p>{{ $comic->title }}</p>
        </div>
        @endforeach
    </div>
</section>
@endsection