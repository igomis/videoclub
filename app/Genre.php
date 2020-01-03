<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Movie;

class Genre extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function movies(){
        return $this->belongsToMany(Movie::class);
    }
}
