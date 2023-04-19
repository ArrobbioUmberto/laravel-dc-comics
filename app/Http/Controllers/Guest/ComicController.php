<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        $data = $request->validate([
            'title' => 'required|max:255|min:3',
            'description' => 'required|string|min:3|max:2000',
            'thumb' => 'required|max:255|url',
            'price' => 'required|numeric|between:0,1000',
            'series' => 'required|max:255|min:3',
            'sale_date' => 'required|date_format:Y-m-d',
            'type' => [
                'required',
                Rule::in(['comic book', 'graphic novel'])
            ],
        ]);


        // $last_comic = new Comic();
        // $last_comic->title = $data['title'];
        // $last_comic->description = $data['description'];
        // $last_comic->thumb = $data['thumb'];
        // $last_comic->price = $data['price'];
        // $last_comic->series = $data['series'];
        // $last_comic->sale_date = $data['sale_date'];
        // $last_comic->type = $data['type'];

        $last_comic = Comic::create($data);


        return redirect()->route('comics.show', $last_comic);
    }
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }
    public function edit(Comic $comic)
    {
        $types = [
            'comic book' => 'Comic book',
            'graphic novel' => 'Graphic novel'
        ];
        return view('comics.edit', compact('comic'));
    }
    public function validation(Request $request)
    {
        return $request->validate([
            'title' => 'required|max:255|min:3',
            'description' => 'required|string|min:3|max:2000',
            'thumb' => 'required|max:255|url',
            'price' => 'required|numeric|between:0,1000',
            'series' => 'required|max:255|min:3',
            'sale_date' => 'required|date_format:Y-m-d',
            'type' => [
                'required',
                Rule::in(['comic book', 'graphic novel'])
            ],
        ]);
    }
    public function update(Request $request, Comic $comic)
    {
        $data = $this->validation($request);
        $comic->update($data);

        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];
        // $comic->fill($data);





        return redirect()->route('comics.show', $comic);
    }
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}
