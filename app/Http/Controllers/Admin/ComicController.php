<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{


    /**
     * Display a listing of the resource.     OK
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comic_arrey = Comic::paginate(10); /* $comic_arrey = Comic::all();  */
        return view('comics.index',compact('comic_arrey'));
    }



    /**
     * Show the form for creating a new resource.     OK
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }



    /**
     * Store a newly created resource in storage.     OK
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validated_data = $request->validate([
            'series' => 'required|unique:comics',
            'price' => 'required',
            'type' => 'required',
        ]);

        Comic::create($validated_data);

        return redirect()->route('admin.comic.index');

        /*      
        __VALIDAZIONE__
        ddd($validated_data);
        ddd($request->all()); 
        ddd($request->nome);
        $comic = new Comic();
        $comic->series = $validated_data['series'];
        $comic->price = $validated_data['price'];
        $comic->type = $validated_data['type'];
        $comic->save(); */

        /*      
        __SENZA VALIDAZIONE__
        $comic = new Comic();
        $comic->series = $request->series;
        $comic->price = $request->price;
        $comic->type = $request->type;
        $comic->save(); */

    }



    /**
     * Display the specified resource.     OK
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }



    /**
     * Show the form for editing the specified resource.     OK
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }



    /**
     * Update the specified resource in storage.     OK
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $validated_data = $request->validate([
            'series' => 'required|unique:comics',
            'price' => 'required',
            'type' => 'required',
        ]);
        // ddd($comic, $request->all());
        $comic->update($validated_data);
        return redirect()->route('admin.comic.index')->with('message', "hai modificato l'elemento con id {{$comic->id}}");
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('admin.comic.index')->with('message', "hai rimosso l'elemento con id {{$comic->id}}");
    }
}
