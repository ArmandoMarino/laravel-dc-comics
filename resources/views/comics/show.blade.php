@extends('layouts.main')

@section('title', $comic->title)

{{-- HERO INCLUDE --}}
@section('content')
<!-- BLACKBOARD PRODUCTS LIST -->
<section id="comic-show" class="d-flex justify-content-center">
    <div class="col-12 col-md-10 col-lg-8">
        <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <h2>{{ $comic->title }}</h2>
        <div class="green-tongue d-flex justify-content-between align-items-center p-2">
            <p>U.S. Price {{ $comic->price }}</p>
            <p>AVAIBLE</p>
        </div>
        <p>{{ $comic->description }}</p>
        {{-- BUTTON --}}
        <a class="btn btn-primary m-3" href="{{ route('comics.index') }}">Indietro</a>
    </div>
    
</section>

@endsection
