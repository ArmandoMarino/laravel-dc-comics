@extends('layouts.main')

@section('title', $comic->title)

{{-- HERO INCLUDE --}}
@section('content')
  {{-- BUTTON --}}
  <div class="d-flex justify-content-between">
    <a class="btn btn-primary px-4 m-3" href="{{ route('comics.index') }}">Back</a>
    <a class="btn btn-secondary px-4 m-3" href="{{ route('comics.edit', $comic->id) }}">Edit Comic</a>
    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger m-3">Delete Comic</button>
    </form>
  </div>
 


<section id="comic-show" class="d-flex justify-content-center">
    <div class="col-12 col-md-10 col-lg-8">
        <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <h2>{{ $comic->title }}</h2>
        <div class="green-tongue d-flex justify-content-between align-items-center p-2">
            <p>U.S. Price {{ $comic->price }}</p>
            <p>AVAIBLE</p>
        </div>
        <p>{{ $comic->description }}</p>
    </div>
</section>

@endsection
