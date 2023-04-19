@extends('layouts.app')
@section('content')
<div class="container">
    <h1>AGGIUNGI IL TUO FUMETTO</h1>
</div>
<div class="container">
    <form action="{{ route('comics.store')}}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <label for="title" class="form-label">Titolo</label>
            <div class="input-group">
                <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{old('title')??''}}" placeholder="" aria-label="Username" aria-describedby="basic-addon1" id="title" name="title">
                @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="input-group mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <div class="input-group">
                <textarea class="form-control @error('description') is-invalid @enderror" aria-label="With textarea" id="description" name="description">
                {{old('description')}}
                </textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine di copertina (url)</label>
            <input class="form-control @error('thumb') is-invalid @enderror" value="{{old('thumb')??''}}" type="text" id="thumb" name="thumb">
            @error('thumb')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="input-group mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <div class="input-group">
                <span class="input-group-text">$</span>
                <input type="text" placeholder="" class="form-control @error('price') is-invalid @enderror" value="{{old('price')??''}}" aria-label="Amount (to the nearest dollar)" id="price" name="price">
                @error('price')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="input-group mb-3">
            <label for="series" class="form-label">Serie</label>
            <div class="input-group">
                <input type="text" class="form-control @error('series') is-invalid @enderror" value="{{old('series')??''}}" placeholder="" aria-label="Username" id="series" name="series">
                @error('series')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="input-group mb-3">
            <label for="sale-date" class="form-label">Data d'uscita</label>
            <div class="input-group">
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" value="{{old('sale_date')??''}}" placeholder="" aria-label="Username" id="sale-date" name="sale_date">
                @error('sale_date')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="input-group">
            <label for="type" class="form-label">Genere</label>
            <div class="input-group">
                <select class="form-select @error('type') is-invalid @enderror" id="type" name="type" aria-label="Default select example">
                    <option selected>Scegli il genere</option>
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
                </select>
                @error('type')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="col-auto mt-3">
            <button type="submit" class="btn btn-primary">Invia i dati</button>
            <a href="{{route('comics.index')}}" class="btn btn-secondary"> Torna alla Homepage</a>
        </div>
    </form>
</div>





@endsection