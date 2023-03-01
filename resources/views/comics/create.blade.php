@extends('layouts.main')

@section('title', 'Crea un fumetto')

{{-- HERO INCLUDE --}}
@section('content')
<!-- BLACKBOARD PRODUCTS LIST -->
<section id="comic-show" class="container">
    <h1>Add your comic</h1>
    <a class="btn btn-secondary" href="{{ route('comics.index')}}">Indietro</a>
    <form action="">
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="title" class="form-label">Comic title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Title of new Comic">
                </div>
            </div>
            
            <div class="col-6">
                <div class="mb-3">
                    <label for="series" class="form-label">Comic Series</label>
                    <input name="series" type="text" class="form-control" id="series" placeholder="Series of new Comic">
                </div>
            </div>

            <div class="col-6">
                <div class="mb-3">
                    <label for="price" class="form-label">Comic Price</label>
                    <input name="price" type="number" class="form-control" id="price" placeholder="Price of new Comic">
                </div>
            </div>

            <div class="col-6">
                <div class="mb-3">
                    <label for="thumb" class="form-label">Comic Poster</label>
                    <input name="thumb" type="url" class="form-control" id="thumb" placeholder="Url of new Comic Image">
                </div>
            </div>

            <div class="col-6">
                <div class="mb-3">
                    <label for="description" class="form-label">Description of new Comic</label>
                    <textarea name="description" id="description" class="form-control" cols="30"></textarea>
                </div>
            </div>

            <div class="col-6">
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale date</label>
                    <input name="sale_date" type="text" class="form-control" id="sale_date" placeholder="MM/DD/YYYY">
                </div>
            </div>

            <div class="col-6">
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select class="form-select" id="type" name="type">
                        <option value="" selected>Select Type</option>
                        <option>comic book</option>
                        <option>--</option>
                        <option>--</option>
                      </select>
                </div>
            </div>


        </div>
        
    </form>
    
</section>

@endsection
