
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1> {{$libro->nombre}}</h1>
        <hr>
        <h2> {{$libro->autor}}</h2>
        <hr>
        <h2> {{$libro->precio}}</h2>
    </div>
@endsection