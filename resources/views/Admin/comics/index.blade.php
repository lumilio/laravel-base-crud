@extends('layouts.app')
@section('page-title','home')


@section('content')


<div class='admin-list d-flex container justify-content-center align-items-center flex-column'>

    <h5 class='mb-2'>lista di tutti i fumetti, clicca su di uno per informazioni nel dettaglio</h5> 

    @if (session('message'))
    <div class="mt-5 alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    @forelse ($comic_arrey as $comic)

    <div class='d-flex align-items-center'>
        <p class= "mx-3 mb-0">{{$comic->series}}------{{$comic->price}}-----{{$comic->type}}</p>
        <a class= "mx-2" href="{{route('admin.comic.show', $comic->id)}}">View</a> 
        <a class= "mx-2" href="{{route('admin.comic.edit', $comic->id)}}">Edit</a>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#delete{{$comic->id}}">
          Delete
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="delete{{$comic->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-{{$comic->id}}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete comic {{$comic->id}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Attenzione! l'operazione non sarà reversibile.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        <form class="mx-2" method='post' action="{{route('admin.comic.destroy', $comic->id)}}">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>  

                    </div>
                </div>
            </div>
        </div>
    </div>

    @empty
        <p>no data</p>
    @endforelse 
    {{$comic_arrey->links()}}
</div>

@endsection
