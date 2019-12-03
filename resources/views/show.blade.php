@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-4">
            <img src="" alt=""/>
        </div>
        <div class="col-sm-8">
            <h2></h2>
            <h4></h4>
            <h4></h4>
            <p><strong>Resumen: </strong></p>
            <p><strong>Estado: </strong>Pel.lícula @if ($pelicula['rented'])  Actualment llogada @else disponible @endif</p>
            <p>
                @if ($pelicula['rented'])
                    <a href='' class="btn btn-info">Tornar Pel.lícula</a>
                @else
                    <a href='' class="btn btn-danger">Llogar Pel.lícula</a>
                @endif
                <a href="\catalog\edit\" class="btn btn-warning"><i class="fa fa-pencil"></i>Editar Pel.lícula</a>
                <a href="\catalog" class="btn btn-default">Tornar catàleg</a>
            </p>
        </div>
    </div>
@stop