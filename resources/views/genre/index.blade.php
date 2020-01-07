@extends('layouts.master')
@section('content')
    <h2 >Gèneres</h2>
    <div class="row">
        <table class="table-bordered table-info">
            <tr><th>id</th><th>Titulo</th><th>Operacion</th></tr>
            @foreach( $generos as $genero )
                <tr>
                    <td>{{$genero->id}}</td>
                    <td>{{$genero->title}}</td>
                    <td><a href='/genre/edit/{{$genero->id}}'><i class='fa fa-edit'></i></a>
                        <a href='/genre/delete/{{$genero->id}}'><i class='fa fa-trash'></i></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@stop
