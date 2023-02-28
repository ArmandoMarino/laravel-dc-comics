@extends('layouts.main')

@section('title', 'COMICS')

{{-- HERO INCLUDE --}}
@section('content')
<!-- BLACKBOARD PRODUCTS LIST -->
<section id="contents-space">
    <div class="blackboard text-white">
        @foreach ($comics as $comic)
        <div class="col-12 col-md-6 col-lg-2">
            <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            <p>{{ $comic->title }}</p>
        </div>
        @endforeach
    </div>
</section>
@endsection