<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Functions\Helper;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_strig=file_get_contents('https://pokeapi.co/api/v2/pokemon/?limit=151&offset=0');

        $pokemons=json_decode($data_strig);


        foreach($pokemons->results as $pokemon){

            $data_string_pokemon=file_get_contents($pokemon->url);

            $pokemon=json_decode($data_string_pokemon);



            $new_pokemon=new Pokemon();
            $new_pokemon->name = $pokemon->name;
            $new_pokemon->slug = Helper ::generateSlug($new_pokemon->name,Pokemon::class);
            $new_pokemon->height = $pokemon->height;
            $new_pokemon->weight = $pokemon->weight;
            $new_pokemon->sprites = $pokemon->sprites->other->{'official-artwork'}->front_default;
            $new_pokemon->type = $pokemon->types[0]->type->name;
            if(isset($pokemon->types[1])){
            $new_pokemon->type_two = $pokemon->types[1]->type->name;}

            $new_pokemon->save();

        }


    }
}