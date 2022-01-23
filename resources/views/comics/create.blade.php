@extends('layouts.app')
@section('page-title','home')


@section('content')


<div class="container-fluid d-flex justify-content-center"> 
    <div class="container">
        <p class='admin-list'>pannello per l'aggiunta elemento</p>
        <form action="{{route('admin.comic.store')}}" method="post">
            @csrf
            <div class="form-group mb-2">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="inserisci il nome del fumetto">
            </div>
            <div class="form-group mb-2">
                <label for="prezzo">Prezzo</label>
                <input type="text" class="form-control" name="prezzo" id="prezzo" placeholder="inserisci il prezzo del fumetto">
            </div>
            <div class="form-group mb-2">
                <label for="categoria">Categoria</label>
                <input type="text" class="form-control" name="categoria" id="categoria" placeholder="inserisci la categoria del fumetto">
            </div>
            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
</div>

@endsection