@extends('layouts.app')
@section('page-title','home')



@section('content')
<div class="container-fluid d-flex justify-content-center">
    <div class="container">
        <p style="margin-top:150px;">pagina della singola card :  </p>
        <p>{{$comic->series}} - {{$comic->price}} - {{$comic->type}}</p> 
    </div>
</div>
@endsection

