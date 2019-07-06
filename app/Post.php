<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = 'Posts';

    // Permite assignacion masiva
    protected $fillable = ['title', 'content', 'slug', 'author'];



    /**
     * Modifica la llave de busqueda
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
