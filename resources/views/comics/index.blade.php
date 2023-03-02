@extends('layouts.main')

@section('title', 'COMICS')

{{-- HERO INCLUDE --}}
@section('content')
<!-- BLACKBOARD PRODUCTS LIST -->
<section id="contents-space">
    {{-- CREATE BTN to comics.create e settatto il ComicController con il return della view --}}
    <a class="btn btn-primary m-3" href="{{ route('comics.create')}}">Add Comic</a>

    <div class="row g-4 blackboard text-white">
        @foreach ($comics as $comic)
        <div class="col-12 col-md-6 col-lg-2 d-flex flex-column justify-content-between">
            {{-- SHOW --}}
            <a href="{{ route('comics.show', $comic->id )}}">
                <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </a>
            <p>{{ $comic->title }}</p>
            {{-- EDIT --}}
            <a class="btn btn-warning m-3" href="{{ route('comics.edit', $comic->id)}}">Edit</a>
        </div>
        @endforeach
    </div>
</section>
@endsection