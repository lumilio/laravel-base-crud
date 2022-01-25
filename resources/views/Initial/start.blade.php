@extends('layouts.app')
@section('page-title','home')



@section('content')
<div class="mt-5 container-fluid d-flex justify-content-center">
    <div style="margin-top:150px;"class="container">
        <a href="{{route('admin.home.index')}}"><button>View as Admin</button></a> 
        <a href="#"><button>View as Guest</button></a>
    </div>
</div>
@endsection