@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">First</th>
                </tr>
            </thead>
            @foreach ($comics as $comic)
            <tbody>
                <tr>
                    <td>{{$comic->title}}</td>
                </tr>
                <tr>
                    <td>{{$comic->description}}</td>
                </tr>
                <tr>
                    <td><img src="{{$comic->thumb}}" alt=""></td>
                </tr>
                <tr>
                    <td>{{$comic->price}}</td>
                </tr>
                <tr>
                    <td>{{$comic->series}}</td>
                </tr>
                <tr>
                    <td>{{$comic->sale_date}}</td>
                </tr>
                <tr>
                    <td>{{$comic->type}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection