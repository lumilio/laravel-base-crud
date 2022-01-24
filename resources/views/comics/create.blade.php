@extends('layouts.app')
@section('page-title','home')


@section('content')


<div class="container-fluid d-flex justify-content-center"> 
    <div class="container">
        <p class='admin-list'>pannello per l'aggiunta elemento</p>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('admin.comic.store')}}" method="post">
            @csrf
            <div class="form-group mb-2">
                <label for="series">Nome</label>
                <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder="inserisci il nome del fumetto" value="{{old('series')}}">
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="price">Prezzo</label>
                <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="inserisci il prezzo del fumetto" value="{{old('price')}}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="type">Categoria</label>
                <!-- <textarea name="" id="" cols="30" rows="10">{{old('text')}}</textarea> nella text area il value non c'è!!-->
                <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" placeholder="inserisci la categoria del fumetto" value="{{old('text')}}">
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
</div>

@endsection