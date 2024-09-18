@extends('layouts.main')

@section('content')
    <h1>Pokemon Prima Generazione</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Altezza</th>
                <th scope="col">Peso</th>
                <th scope="col">Immagine</th>
                <th scope="col">Tipo 1</th>
                <th scope="col">Tipo 2</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pokemons as $pokemon)
                <tr>
                    <td>{{ $pokemon->id }}</td>
                    <td>{{ $pokemon->name }}</td>
                    <td>{{ $pokemon->height }}</td>
                    <td>{{ $pokemon->weight }}</td>
                    <td><img class="poke" src="{{ $pokemon->sprites }}" alt="{{ $pokemon->name }}"></td>
                    <td>{{ $pokemon->type }}</td>
                    <td>{{ $pokemon->type_two }}</td>
                    <td><a class="btn btn-warning" href="{{ route('pokemon.show', $pokemon) }}"><i
                                class="fa-brands fa-optin-monster"></i></a>
                        {{-- <a href="{{ route('pokomon.edit', $pokemon) }}"></a> --}}
                    </td>




                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
