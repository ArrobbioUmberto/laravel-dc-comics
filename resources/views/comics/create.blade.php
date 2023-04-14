@extends('layouts.app')
@section('content')
<div class="container">
    <div class="input-group mb-3">
        <label for="basic-url" class="form-label">Titolo</label>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </div>

    <div class="input-group mb-3">
        <label for="basic-url" class="form-label">Descrizione</label>
        <div class="input-group">
            <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
    </div>

    <div class="mb-3">
        <label for="basic-url" class="form-label">Immagine di copertina</label>
        <input class="form-control" type="file" id="formFileMultiple" multiple>
    </div>

    <div class="input-group mb-3">
        <label for="basic-url" class="form-label">Prezzo</label>
        <div class="input-group">
            <span class="input-group-text">$</span>
            <input type="text" placeholder="" class="form-control" aria-label="Amount (to the nearest dollar)">
        </div>
    </div>

    <div class="input-group mb-3">
        <label for="basic-url" class="form-label">Data d'uscita</label>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="" aria-label="Username">
        </div>
    </div>

    <div class="input-group">
        <label for="basic-url" class="form-label">Genere</label>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </div>

    <div class="col-auto mt-2">
        <button type="submit" class="btn btn-primary mb-3">Invia i dati</button>
    </div>
</div>

</div>


@endsection