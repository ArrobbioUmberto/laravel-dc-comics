@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <table class="table">
            @foreach ($comics as $comic)
            <thead>
                <tr>
                    <th scope="col">{{$comic->id}}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Titolo:</strong> {{$comic->title}}</td>
                    <td><strong>Descrizione:</strong> {{$comic->description}}</td>
                    <td><img src="{{$comic->thumb}}" alt=""></td>
                    <td><strong>Prezzo:</strong> {{$comic->price}}</td>
                    <td><strong>Serie:</strong> {{$comic->series}}</td>
                    <td><strong>Data d'uscita:</strong> {{$comic->sale_date}}</td>
                    <td><strong>Genere:</strong> {{$comic->type}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection