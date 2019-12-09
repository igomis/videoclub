<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class catalogController extends Controller
{
    public function getIndex(){
        $arrayPeliculas = Movie::all();
        return view('index',compact('arrayPeliculas'));
    }
    public function getShow($id){
        $pelicula = Movie::findOrFail($id);
        return view('show',compact('pelicula'));
    }
    public function getCreate(){
        return view('create');
    }
    public function postCreate(Request $request){
        $movie = new Movie();
        $movie->title = $request->title;
        $movie->year = $request->year;
        $movie->director = $request->director;
        $movie->poster = $request->poster;
        $movie->synopsis = $request->synopsis;
        $movie->save();
        return redirect('/catalog');
    }
    public function getEdit($id){
        $pelicula = Movie::findOrFail($id);
        return view('edit',compact('pelicula'));
    }
    public function putEdit(Request $request,$id){
        $movie = Movie::findOrFail($id);
        $movie->title = $request->title;
        $movie->year = $request->year;
        $movie->director = $request->director;
        $movie->poster = $request->poster;
        $movie->synopsis = $request->synopsis;
        $movie->save();
        return redirect("/catalog/show/$id");
    }
}