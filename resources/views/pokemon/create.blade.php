@extends('layouts.main')

@section('content')
    <form class="bg bg-white p-5" action="{{ route('pokemon.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="alert alert-danger mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="height" class="form-label">Altezza (in cm)</label>
            <input type="number" class="form-control" id="height" name="height" value="{{ old('height') }}" required>
            @error('height')
                <div class="alert alert-danger mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="weight" class="form-label">Peso (in kg)</label>
            <input type="number" class="form-control" id="weight" name="weight" value="{{ old('weight') }}" required>
            @error('weight')
                <div class="alert alert-danger mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sprites" class="form-label">Sprites (URL)</label>
            <input type="text" class="form-control" id="sprites" name="sprites" value="{{ old('sprites') }}">
            @error('sprites')
                <div class="alert alert-danger mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}" required>
            @error('type')
                <div class="alert alert-danger mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type_two" class="form-label">Tipo 2 (opzionale)</label>
            <input type="text" class="form-control" id="type_two" name="type_two" value="{{ old('type_two') }}">
            @error('type_two')
                <div class="alert alert-danger mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button class="btn btn-success" type="submit"><i class="fa-solid fa-file-import"></i> Crea Pokémon</button>
        <button class="btn btn-danger" type="reset"><i class="fa-solid fa-xmark"></i> Annulla</button>
    </form>
@endsection
