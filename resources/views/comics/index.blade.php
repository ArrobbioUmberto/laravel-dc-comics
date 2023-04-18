@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 me-auto">
            <a class="btn btn-primary" href="{{route('comics.create')}}">Nuovo Comics</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <table class="table">


            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col"></th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data d'uscita</th>
                    <th scope="col">Genere</th>

                </tr>
            </thead>

            <tbody>
                @foreach ($comics as $comic)
                <tr>
                    <td><a href="{{route('comics.show', $comic->id)}}"> {{$comic->title}}</a></td>
                    <td>{{$comic->description}}</td>
                    <td><img src="{{$comic->thumb}}" alt=""></td>
                    <td>{{$comic->price}}</td>
                    <td> {{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td class="d-flex border-0 gap-2 ">
                        <a class="btn btn-secondary btn-sm" href="{{ route('comics.edit',$comic->id) }}">Edit</a>
                        <form action="{{route('comics.destroy',$comic)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>


        </table>
    </div>
</div>
@endsection