@extends('layouts.main')

@section('content')
    <div class="card mx-auto mt-2" style="width: 18rem;">
        <img src="{{ $pokemon->sprites }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $pokemon->name }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <button class="btn btn-primary">{{ $pokemon->type }}</button>
            @if ($pokemon->type_two != 'nessuno')
                <button class="btn btn-primary">{{ $pokemon->type_two }}</button>
            @endif
            <br>
            <a href="{{ route('pokemon.index') }}" class="btn btn-dark mt-1"><i class="fa-solid fa-house"></i></a>
        </div>
    </div>
@endsection
