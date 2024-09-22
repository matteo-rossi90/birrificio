@extends('layouts.main')

@section('content')

<div class="container my-5">

    @if (session('delete'))

    <div class="alert alert-success">
        {{session('delete')}}
    </div>

    @endif

    <div class="container d-flex justify-content-center my-5">
        <form class="d-flex" action="{{route('beers.index')}}" method="GET">
            <input class="form-control me-2" type="text" name="to-search" placeholder="Cerca la tua birra">
            <button class="btn btn-primary" type="submit">
                <i class="fa-solid fa-search"></i>
            </button>
        </form>
    </div>

    <table class="table text-center">
    <thead>
        <tr>
        <th scope="col">#id</th>
        <th scope="col">Nome</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $beers as $beer )

        <tr>
            <td>{{$beer->id}}</td>
            <td>{{$beer->name}}</td>
            <td>{{$beer->price}}</td>
            <td class>
                <a href="{{ route('beers.show', $beer)}}" class="btn btn-primary">
                    <i class="fa-solid fa-eye"></i>
                </a>
                <a href="{{ route('beers.edit', $beer)}}" class="btn btn-warning">
                    <i class="fa-solid fa-pencil"></i>
                </a>
                <form class="d-inline" onsubmit="return confirm('Vuoi proprio eliminare la birra chiamata {{$beer->name}} ?')" action="{{ route('beers.destroy', $beer) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>

        @endforeach
    </tbody>
    </table>

{{$beers->links()}}

</div>

@endsection

@section('titlePage')
    Birre
@endsection
