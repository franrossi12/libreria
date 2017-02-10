@extends('layouts.app')

@section('content')
    {!! Form::open(['url' => 'mostrar', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
        <div class="form-group">
            {!! Form::text('name', null ,['class' => 'form-control' , 'placeholder' => 'Libro']) !!}
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
    {!! Form::close() !!}
    <!-- Jumbotron Header -->
    <header class="jumbotron hero-spacer">
        <h1>Bienvenido</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <p><a class="btn btn-primary btn-large">Call to action!</a>
        </p>
    </header>

    <!-- Title -->
    <div class="row">
        <div class="col-lg-12">
            <h3>Ultimos Libros</h3>
        </div>
    </div>
    <!-- /.row -->

    <!-- Page Features -->

    <div class="row text-center">
        @foreach($libros as $libro)
        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img src="http://placehold.it/800x500" alt="">
                <div class="caption">
                    <h3>{{$libro->nombre}}</h3>
                    <p>Autor {{$libro->autor}}</p>
                    <p>Precio {{$libro->precio}}</p>
                    <p>
                        <a href="#" class="btn btn-primary">Comprar</a> <a href="{{route('mostrar',['id'=>$libro->id])}}" class="btn btn-default">Detalles</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- /.row -->
@endsection
