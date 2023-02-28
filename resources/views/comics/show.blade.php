@extends('layouts.main')

@section('title', $comic->title)

{{-- HERO INCLUDE --}}
@section('content')
<!-- BLACKBOARD PRODUCTS LIST -->
<section id="comic-show">
    <div class="col-12 col-md-6 col-lg-2">
        <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <p>{{ $comic->title }}</p>
        <p>{{ $comic->description }}</p>
    </div>
</section>
@endsection
