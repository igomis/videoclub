<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Http\Requests\StoreMovie;
use Styde\Html\Facades\Alert;

class catalogController extends Controller
{
    public function getIndex(){
        $arrayPeliculas = Movie::paginate(8);
        return view('index',compact('arrayPeliculas'));
    }
    public function getShow($id){
        $pelicula = Movie::findOrFail($id);
        return view('show',compact('pelicula'));
    }
    public function getCreate(){
        return view('create');
    }

    public function getEdit($id){
        $pelicula = Movie::findOrFail($id);
        return view('edit',compact('pelicula'));
    }

    public function postCreate(StoreMovie $request){
        $movie = new Movie();
        $movie->fill($request->toArray());
        $movie->save();
        Alert::success("S'ha guardat la pel.licula");
        return redirect('/catalog');
    }
    public function putEdit(StoreMovie $request,$id){
        $movie = Movie::findOrFail($id);
        $movie->fill($request->toArray());
        $movie->save();
        return redirect("/catalog/show/$id");
    }

    public function putRent($id){
        $pelicula = Movie::findOrFail($id);
        $pelicula->rented = true;
        $pelicula->save();
        return redirect("/catalog/show/$id");
    }
    public function putReturn($id){
        $pelicula = Movie::findOrFail($id);
        $pelicula->rented = false;
        $pelicula->save();
        return redirect("/catalog/show/$id");
    }
    public function deleteMovie($id){
        Movie::findOrFail($id)->delete();
        return redirect("/catalog");
    }
}
