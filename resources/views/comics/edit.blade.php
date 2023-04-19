@extends('layouts.app')
@section('content')
<div class="Container">
    <h1>Modifica: {{$comic->title}}</h1>
</div>
<div class="container">
    <form action="{{ route('comics.update',$comic)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="input-group mb-3">
            <label for="title" class="form-label">Titolo</label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" id="title" name="title" value="{{old('title',$comic->title)}}">
                @error('title')
                <div class="invalid-feedback">
                    {{$$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="input-group mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <div class="input-group">
                <textarea class="form-control" id="description" name="description" cols="30" rows="10">
                {{$comic->description}}
                </textarea>
                @error('title')
                <div class="invalid-feedback">
                    {{$$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine di copertina (url)</label>
            <input class="form-control" type="text" id="thumb" name="thumb" value="{{old('thumb',$comic->thumb)}}">
            @error('thumb')
            <div class="invalid-feedback">
                {{$$message}}
            </div>
            @enderror
        </div>

        <div class="input-group mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <div class="input-group">
                <span class="input-group-text">$</span>
                <input type="text" placeholder="" class="form-control" aria-label="Amount (to the nearest dollar)" id="price" name="price" value="{{old('price',$comic->price)}}">
                @error('price')
                <div class="invalid-feedback">
                    {{$$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="input-group mb-3">
            <label for="series" class="form-label">Serie</label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="" aria-label="Username" id="series" name="series" value="{{old('series',$comic->series)}}">
                @error('series')
                <div class="invalid-feedback">
                    {{$$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="input-group mb-3">
            <label for="sale-date" class="form-label">Data d'uscita</label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="" aria-label="Username" id="sale-date" name="sale_date" value="{{old('sale_date',$comic->sale_date)}}">
                @error('sale_date')
                <div class="invalid-feedback">
                    {{$$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="input-group">
            <label for="type" class="form-label">Genere</label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" id="type" name="type" value="{{old('type',$comic->type)}}">
                @error('type')
                <div class="invalid-feedback">
                    {{$$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="col-auto mt-2">
            <button type="submit" class="btn btn-primary mb-3">Modifica</button>
        </div>
    </form>
</div>



@endsection