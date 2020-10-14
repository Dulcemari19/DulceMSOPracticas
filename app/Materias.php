<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Materias extends Model
{
    //
    use Notifiable;

    /**
     * The atributes that are mass assignable.
     * 
     * @var array
     * 
     */
    protected $fillable = [
        'nombre',
    ];
}
