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


        $request->validate([
            'series' => 'required | unique:comics',
            'price' => 'required',
            'type' => 'required',
        ]);
        // ddd($request->all()); 
        // ddd($request->nome);
        $comic = new Comic();
        $comic->series = $request->nome;
        $comic->price = $request->prezzo;
        $comic->type = $request->categoria;
        $comic->save();

        return redirect()->route('admin.comic.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
