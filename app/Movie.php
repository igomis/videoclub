<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Genre;

class Movie extends Model
{
    protected $guarded = [];

    public function Genre(){
        return $this->belongsTo(Genre::class,'id_genre');
    }

    public function getIdGenreOptions()
    {
        return hazArray(Genre::all(),'id','title');
    }
}
