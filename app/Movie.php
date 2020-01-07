<?php

namespace App;

use App\Genre;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = [];

    public function Genre(){
        return $this->belongsTo(Genre::class,'id_genre');
    }

    public function users(){
        return $this->belongstoMany(User::class,'rents','id_movie', 'id_user')->withPivot(['dateRent','dateReturn']);
    }



    // Accesors

    public function getDescGenreAttribute()
    {
        if ($this->Genre) return $this->Genre->title;
        return 'Desconocido';
    }

    // Mutators

    public function setDirectorAttribute($value)
    {
        $this->director = ucwords($value);
    }

    // Scopes

    public function scopeRented($query){
        return $query->where('rented',1);
    }

    //Options (styde)
    public function getIdGenreOptions()
    {
        return hazArray(Genre::all(),'id','title');
    }
}
