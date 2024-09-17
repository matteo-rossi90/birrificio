@extends('layouts.main')

@section('content')

<div class="container my-5">

    <table class="table">
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
        <td>
            <a href="{{ route('beers.show', $beer)}}" class="btn btn-primary">Dettagli</a>
        </td>
    </tr>

    @endforeach
  </tbody>
</table>

</div>

@endsection

@section('titlePage')
    Birre
@endsection
