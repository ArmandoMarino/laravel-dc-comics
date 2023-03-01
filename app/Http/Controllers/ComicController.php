<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // TUTTI
        // $comics = Comic::all();
        // ORDINATI BY TITLE ALFABETICO
        $comics = Comic::orderBy('title', 'ASC')->get();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $comic = new Comic();

        // NEL MODEL COMIC HO AUTORIZZATO IL FILLABLE ELENCANDO LE PROPRIETA' DEL NUOVO COMIC
        $comic->fill($data);

        $comic->save();

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // CONTROLLO CHE SE l'ID non CORRISPONDE AD UN ID VERO VA IN 404
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
