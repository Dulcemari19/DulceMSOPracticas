<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    //
//seconectara a la tabla alumno
//funcion para que podamos declarar los atributos
public $fillable = [
    'nombre', 
    'apellido',
    'correo', 
    'edad'];

public static function validationRules(){
    return[
        'nombre' =>'requeried| min:5 |max:50',
        'apellido'  =>'nullable| min:5 |max:50',
        'correo'  =>'requeried| min:5 |max:50',
        'edad' =>'requeried| interger | min:1 |max:32',
    ];
}
}
