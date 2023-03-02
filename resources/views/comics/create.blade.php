@extends('layouts.main')

@section('title', 'Crea un fumetto')

{{-- HERO INCLUDE --}}
@section('content')
<!-- BLACKBOARD PRODUCTS LIST -->
<section id="comic-show" class="container">
    <h1>Add your comic</h1>

    {{-- BUTTON TO ROUTE COMICS INDEX --}}
    <a class="btn btn-secondary my-3" href="{{ route('comics.index')}}">Indietro</a>

    {{-- SE CI SONO DEGLI ERRORI LI GESTIAMO CON UN IF --}}
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif
    {{-- FORM  con action a comi.store per salvare con metodo POST il novalidate
        ci aiuta a gestire l'errore da php e non da HTML cosi da gestire gli errori--}}
    <form action="{{ route('comics.store') }}" method="POST" novalidate>

        {{-- AUTORIZZO IL TOKEN CSRF  --}}
        @csrf
        {{-- ------------------------ --}}

        <div class="row">

            {{-- SE NEI VALUE degli input METTIAMO gli old mentianiamo i "vecchi campi" che c'erano --}}


            {{-- TITLE --}}
            <div class="col-6">
                <div class="mb-3">
                    <label for="title" class="form-label">Comic title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Title of new Comic" value="{{ old('title')}}" required>
                </div>
            </div>
            
            {{-- SERIES --}}
            <div class="col-6">
                <div class="mb-3">
                    <label for="series" class="form-label">Comic Series</label>
                    <input name="series" type="text" class="form-control" id="series" placeholder="Series of new Comic" value="{{ old('series')}}" required>
                </div>
            </div>

            {{-- PRICE --}}
            <div class="col-6">
                <div class="mb-3">
                    <label for="price" class="form-label">Comic Price</label>
                    <input name="price" type="text" class="form-control" id="price" placeholder="Price of new Comic" value="{{ old('price')}}" required>
                </div>
            </div>

            {{-- THUMB --}}
            <div class="col-6">
                <div class="mb-3">
                    <label for="thumb" class="form-label">Comic Poster</label>
                    <input name="thumb" type="url" class="form-control" id="thumb" placeholder="Url of new Comic Image" value="{{ old('thumb')}}" required>
                </div>
            </div>

            {{-- DESCRIPTION --}}
            <div class="col-6">
                <div class="mb-3">
                    <label for="description" class="form-label">Description of new Comic</label>
                    <textarea name="description" id="description" class="form-control" value="{{ old('description')}}" cols="30"></textarea>
                </div>
            </div>

            {{-- SALE DATE --}}
            <div class="col-6">
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale date</label>
                    <input name="sale_date" type="text" class="form-control" id="sale_date" value="{{ old('sale_date')}}" placeholder="yyyy-mm-dd">
                </div>
            </div>

            {{-- TYPE --}}
            <div class="col-6">
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select class="form-select" id="type" name="type">
                        <option value="" selected>Select Type</option>
                        <option @if (old('type') === '') selected @endif>comic book</option>
                        <option @if (old('type') === 'action book') selected @endif>action book</option>
                        <option @if (old('type') === 'nothing book') selected @endif>nothing book</option>
                      </select>
                </div>
            </div>

            {{-- ARTISTS --}}
            <div class="col-6">
                <div class="mb-3">
                    <label for="artists" class="form-label">Artists of new Comic</label>
                    <textarea name="artists" id="artists" class="form-control" cols="30"></textarea>
                </div>
            </div>

            {{-- WRITERS --}}
            <div class="col-6">
                <div class="mb-3">
                    <label for="writers" class="form-label">Writers of new Comic</label>
                    <textarea name="writers" id="writers" class="form-control" cols="30"></textarea>
                </div>
            </div>


        </div>

        {{-- BUTTON FOR SUBMIT --}}
        <div class="d-flex justify-content-end">
            <button class="btn btn-success my-3" type="submit">Add new Comic</button>
        </div>
    </form>
    
</section>

@endsection
