@extends('layouts.main')

@section('title', 'COMICS')

{{-- HERO INCLUDE --}}
@section('content')
<!-- BLACKBOARD PRODUCTS LIST -->
<section id="contents-comics">
    <div class="blackboard">
        @foreach ($comics as $comic)
        <div class="product-card">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            <p>{{ $comic->title }}</p>
        </div>
        @endforeach
    </div>
</section>
@endsection