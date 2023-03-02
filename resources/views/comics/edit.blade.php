@extends('layouts.main')

@section('title', 'Edit Comic')

{{-- HERO INCLUDE --}}
@section('content')
<!-- BLACKBOARD PRODUCTS LIST -->
<section id="comic-show" class="container">
    <h1>Add your comic</h1>

    {{-- BUTTON TO ROUTE COMICS INDEX --}}
    <a class="btn btn-secondary my-3" href="{{ route('comics.index')}}">Indietro</a>

   @include('includes.comics.form')
    
</section>

@endsection
