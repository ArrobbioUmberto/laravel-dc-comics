@extends('layouts.app')
@section('content')
<div class="Container">
    <h1>Modifica: {{$comic->title}}</h1>
</div>
<div class="container">
    <form action="{{ route('comics.store',$comic)}}" method=" POST">

        @csrf
        @method('PUT')
        <div class="input-group mb-3">
            <label for="title" class="form-label">Titolo</label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" id="title" name="title" value="{{$comic->title}}">
            </div>
        </div>

        <div class="input-group mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <div class="input-group">
                <textarea class="form-control" id="description" name="description" cols="30" rows="10">
                {{$comic->description}}
                </textarea>
            </div>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine di copertina (url)</label>
            <input class="form-control" type="text" id="thumb" name="thumb" value="{{$comic->thumb}}">
        </div>

        <div class="input-group mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <div class="input-group">
                <span class="input-group-text">$</span>
                <input type="text" placeholder="" class="form-control" aria-label="Amount (to the nearest dollar)" id="price" name="price" value="{{$comic->price}}">
            </div>
        </div>

        <div class="input-group mb-3">
            <label for="series" class="form-label">Serie</label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="" aria-label="Username" id="series" name="series" value="{{$comic->series}}">
            </div>
        </div>

        <div class="input-group mb-3">
            <label for="sale-date" class="form-label">Data d'uscita</label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="" aria-label="Username" id="sale-date" name="sale_date" value="{{$comic->sale_date}}">
            </div>
        </div>

        <div class="input-group">
            <label for="type" class="form-label">Genere</label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" id="type" name="type" value="{{$comic->type}}">
            </div>
        </div>

        <div class="col-auto mt-2">
            <button type="submit" class="btn btn-primary mb-3">Invia i dati</button>
        </div>
</div>

</div>
</form>

@endsection