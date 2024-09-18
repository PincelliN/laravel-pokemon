<?php

namespace App\Http\Controllers;
use App\Models\Pokemon;
use Illuminate\Http\Request;
use App\Functions\Helper;
use App\Http\Requests\PokemonRequest;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemons=Pokemon::all();

        return view('pokemon.index',compact('pokemons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pokemon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PokemonRequest $request)
    {
        $data=$request->all();
        $data['slug'] = Helper::generateSlug('name',Pokemon::class);
        $new_pokemon= new Pokemon();
        $new_pokemon->fill($data);

        return redirect()->route('pokemon.show',$new_pokemon);

    }

    /**
     * Display the specified resource.
     */
    public function show(Pokemon $pokemon)
    {
        return view('pokemon.show',['pokemon'=> $pokemon]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pokemon $pokemon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PokemonRequest $request, Pokemon $pokemon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pokemon $pokemon)
    {
        //
    }
}