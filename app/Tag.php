<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table="tags";

    protected $fillable= ['name'];
    //

    public function articles(){

    	return $this->belongsToMany('App\Article')->withTimestamps(); //para relacion muchos a muchos y timestamp es por si sutgen errores
    }
}
