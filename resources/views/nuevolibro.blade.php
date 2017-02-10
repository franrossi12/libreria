@extends('layouts.app')

@section('content')
        <form method="post" action="{{ url('nuevo') }}" class="form" >
        {!! csrf_field() !!}
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"></span>
                <input name="nombre" type="text" class="form-control" placeholder="Nombre del libro" aria-describedby="basic-addon1">
            </div>
            <hr>
            <div class="input-group">
                <span class="input-group-addon nacho" id="basic-addon1"></span>
                <input name="autor" type="text" class="form-control" placeholder="Autor" aria-describedby="basic-addon1">
            </div>
            <hr>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"></span>
                <input name="precio" type="text" class="form-control" placeholder="Precio" aria-describedby="basic-addon1">
            </div>
            <hr>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"></span>
                <input name="stock" type="text" class="form-control" placeholder="Stock" aria-describedby="basic-addon1">
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Crear Libro</button>
    </form>
@endsection
