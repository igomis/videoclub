@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-4">
            <img src="{{$pelicula->poster}}" alt="{{$pelicula->title}}"/>
        </div>
        <div class="col-sm-8">
            <h2>{{$pelicula->title}}</h2>
            <h4>{{$pelicula->year}}</h4>
            <h4>{{$pelicula->director}}</h4>
            <p><strong>Genere:</strong>
                @if ($pelicula->Genre)  {{ $pelicula->Genre->title}}
                @else Desconocido
                @endif
            </p>
            <p><strong>Resumen: </strong>{{$pelicula->synopsis}}</p>
            <p><strong>Estado: </strong>Pel.lícula @if ($pelicula->rented)  Actualment llogada @else disponible @endif</p>
            <p>
                @if ($pelicula->rented)
                    @if (Auth::user()->rent_movies->contains($pelicula))
                        <form action= {{action('catalogController@putReturn',$pelicula->id)}} method="POST" style="display:inline">
                            {{ method_field('PUT') }}
                            @csrf
                            <button type="submit" class="btn btn-info" > Tornar Película</button>
                        </form>
                    @endif
                @else
                    <form action= {{action('catalogController@putRent',$pelicula->id)}} method="POST" style="display:inline">
                        {{ method_field('PUT') }}
                        @csrf
                        <button type="submit" class="btn btn-secondary" > Llogar Película</button>
                    </form>
                    <form action= {{action('catalogController@deleteMovie',$pelicula->id)}} method="POST" style="display:inline">
                        {{ method_field('DELETE') }}
                        @csrf
                        <button type="submit" class="btn btn-danger"  > Esborrar Película</button>
                    </form>
                @endif
                <a href="\catalog\edit\{{$pelicula->id}}" class="btn btn-warning"><i class="fa fa-pencil"></i>Editar Pel.lícula</a>
                <a href="\catalog" class="btn btn-default">Tornar catàleg</a>
            </p>
        </div>
    </div>
@stop
