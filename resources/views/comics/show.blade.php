@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card flex-row ">
        <img src=" {{$comic->thumb}}" class="card-img-top" style="width:500px;" alt="...">
        <div class="card-body ms-4">
            <h5 class="card-title">{{$comic->title}}</h5>
            <p class="card-text"><strong>Descrizione:</strong> {{$comic->description}}</p>
            <p class="card-text"><strong>Prezzo:</strong> {{$comic->price}}</p>
            <p class="card-text"><strong>Serie:</strong> {{$comic->series}}</p>
            <p class="card-text"><strong>Data d'uscita:</strong> {{$comic->sale_date}}</p>
            <p class="card-text"><strong>Genere:</strong> {{$comic->type}}</p>
            <a href="{{route('comics.index')}}" class="btn btn-secondary"> Torna alla Homepage</a>
        </div>
    </div>
</div>
@endsection