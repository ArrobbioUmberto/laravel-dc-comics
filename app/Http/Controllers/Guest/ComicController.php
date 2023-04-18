<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    public function create()
    {
        return view('comics.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();

        $last_comic = new Comic();
        $last_comic->title = $data['title'];
        $last_comic->description = $data['description'];
        $last_comic->thumb = $data['thumb'];
        $last_comic->price = $data['price'];
        $last_comic->series = $data['series'];
        $last_comic->sale_date = $data['sale_date'];
        $last_comic->type = $data['type'];

        $last_comic->save();


        return redirect()->route('comics.show', $last_comic->id);
    }
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();


        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];

        $comic->save();


        return to_route('comics.show', $comic);
    }
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}
