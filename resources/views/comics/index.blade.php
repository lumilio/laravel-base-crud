@extends('layouts.app')
@section('page-title','home')


@section('content')


<div class='admin-list d-flex justify-content-center align-items-center flex-column'>
    <h5 class='mb-5'>lista di tutti i fumetti, clicca su di uno per informazioni nel dettaglio</h5> 

    @forelse ($comic_arrey as $comic)

    <div class='d-flex align-items-center'>
        <p class= "mx-3">{{$comic->series}}------{{$comic->price}}-----{{$comic->type}}</p>
        <a class= "mx-2" href="{{route('admin.comic.show', $comic->id)}}">View</a> 
        <a class= "mx-2" href="{{route('admin.comic.edit', $comic->id)}}">Edit</a>

        <form class="mx-2" method='post' action="{{route('admin.comic.destroy', $comic->id)}}">
            @csrf 
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Elimina</button>
        </form> 
    </div>

    @empty
        <p>no data</p>
    @endforelse 
    {{$comic_arrey->links()}}
</div>





@endsection
