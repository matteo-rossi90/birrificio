@extends('layouts.main')

@section('content')

<div class="container my-5">

    <div class="text-center">
        <h1>{{$beer->name}}</h1>

        <p>Prezzo: {{$beer->price}}  |  Voto: {{$beer->average}}  |  Slug: {{$beer->slug}}</p>
        <img src="{{$beer->image}}" alt="{{$beer->name}}">

    </div>

</div>


@endsection

@section('titlePage')
    {{$beer->name}}
@endsection
