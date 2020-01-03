<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;


class GenreController extends Controller
{
    public function getIndex(){
        $generos = Genre::all();
        return view('genre.index',compact('generos'));
    }

    public function getCreate(){
        return view('genre.create');
    }
    public function postCreate(Request $request){
        $genre = new Genre();
        $genre->fill($request->toArray());
        $genre->save();
        return redirect('/genre');
    }
    public function getEdit($id){
        $genre = Genre::findOrFail($id);
        return view('genre.edit',compact('genre'));
    }
    public function putEdit(Request $request,$id){
        $genre = Genre::findOrFail($id);
        $genre->fill($request->toArray());
        $genre->save();
        return redirect("/genre");
    }
    public function delete($id){
        Genre::findOrFail($id)->delete();
        return redirect("/genre");
    }
}

