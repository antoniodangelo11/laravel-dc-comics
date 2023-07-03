<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    private $validations = [
        'title' => 'required|string|max:255',
        'thumb' => 'required|string|max:1000',
        'price' => 'required|integer|max:255',
        'series' => 'required|string|max:255',
        'sale_date' => 'required|date',
        'type' => 'required|string|max:255',
        'description' => 'required|min:3|max:1000',
    ];

    public function index()
    {
        $comics = Comic::paginate(3);

        return view('comics.index', compact('comics'));
    }


    public function create()
    {
        return view('comics.create');
    }


    public function store(Request $request)
    {
        // validare i dati
        $request->validate($this->validations);

        $data = $request->all();

        // salva i dati nel database (Metodo 1)
        $newComic = new Comic();
        
        $newComic->title = $data['title'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        $newComic->description = $data['description'];
        
        $newComic->save();

        // Metodo 2 con create
        // $newComic = Comic::create($data);

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
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
        // validare i dati
        $request->validate($this->validations);

        // aggiornare i dati nel db
        $data = $request->all();

        $comic->title = $data['title'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->description = $data['description'];

        $comic->update();


        // redirect alla pagina show
        return to_route('comics.show', ['comic' => $comic->id]);
    }


    public function destroy(Comic $comic)
    {
        $comic->delete();
        
        return to_route('comics.index');
    }
}
