@extends('layouts.main')

@section('content')

<div class="container my-5">

    <h1>Aggiungi una nuova birra</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error )
                <ul>
                    <li>
                        {{ $error }}
                    </li>
                </ul>
            @endforeach
        </div>
    @endif

    <form action="{{ route('beers.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror " id="name" name="name" placeholder="Inserisci il nome">
            @error('name')
                <small>{{$message}}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="name" name="price" placeholder="Inserisci il prezzo">
            @error('price')
                <small>{{$message}}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="average" class="form-label">Voto</label>
            <input type="number" class="form-control @error('average') is-invalid @enderror" id="name" name="average" placeholder="Inserisci il voto">
            @error('average')
                <small>{{$message}}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="text" class="form-control @error('image') is-invalid @enderror" id="name" name="image" placeholder="Inserisci il link dell'immagine">
            @error('image')
                <small>{{$message}}</small>
            @enderror
        </div>

        <div class="my-5">
            <button class="btn btn-primary" type="submit">Invia</button>
            <button class="btn btn-secondary" type="reset">Annulla</button>
        </div>

    </form>

</div>

@endsection
