@extends('layouts.app')
@section('page-title','home')


@section('content')


<div class='admin-list d-flex justify-content-center align-items-center flex-column'>
<h5>lista di tutti i fumetti, clicca su di uno per informazioni nel dettaglio</h5> 

@forelse ($comic_arrey as $index => $item)

   <a href="#"><p>{{$item->series}}------{{$item->price}}-----{{$item->type}}</p></a> 
@empty
    <p>no data</p>
@endforelse 
</div>





@endsection
