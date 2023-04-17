@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ route('comics.store')}} method=" POST">

        @csrf
        <div class="input-group mb-3">
            <label for="title" class="form-label">Titolo</label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" id="title" name="title">
            </div>
        </div>

        <div class="input-group mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <div class="input-group">
                <textarea class="form-control" aria-label="With textarea" id="description" name="description"></textarea>
            </div>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine di copertina (url)</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple id="thumb" name="thumb">
        </div>

        <div class="input-group mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <div class="input-group">
                <span class="input-group-text">$</span>
                <input type="text" placeholder="" class="form-control" aria-label="Amount (to the nearest dollar)" id="price" name="price">
            </div>
        </div>

        <div class="input-group mb-3">
            <label for="series" class="form-label">Serie</label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="" aria-label="Username" id="series" name="series">
            </div>
        </div>

        <div class="input-group mb-3">
            <label for="sale-date" class="form-label">Data d'uscita</label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="" aria-label="Username" id="sale-date" name="sale_date">
            </div>
        </div>

        <div class="input-group">
            <label for="type" class="form-label">Genere</label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" id="type" name="type">
            </div>
        </div>

        <div class="col-auto mt-2">
            <button type="submit" class="btn btn-primary mb-3">Invia i dati</button>
        </div>
</div>

</div>
</form>



@endsection