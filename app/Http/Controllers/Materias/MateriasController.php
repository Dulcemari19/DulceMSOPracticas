<?php

namespace App\Http\Controllers\Materias;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD
//Mandar a llamar el modelo
use App\Materias;
//request 
use App\Http\Requests\Materias as MateriaRequests;

class MateriasController extends Controller
{
    protected $materia;

    public function __construct (Materias $materia){
        $this->materia = $materia;
    }


    public function index()
    {
        //
        $materias = Materias::all();
        
        //retorna el array en formato json
    // return response()->json(['materias'=> $materias]);
=======
//importar nuestro modelo a ocupar
use App\Materias;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // funcion index sirve para listar todos los productos del sistema
    public function index()
    {
        //ELOQUEN DE LARAVEL
        //SELECT * FROM MATERIAS;
        //ES COMO SI FUERA UNA COSULTA.

        //Declaramos la variable de la materia /Modelo llamado materia
        $materias = Materias::all();
        
        //retorna el array en formato json
        //return response()->json(['materias'=> $materias]);
>>>>>>> 1f07e63cb1d85aa687b49b34dd4084c72067f844
        return $materias;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function store(MateriaRequests $request)
    {
        //
      //  return $request;
        $materia =$this->materia->create($request->all());
        return response()->json($materia);
       // return $materia;
      //  return response()->json(new MateriasS($materia), 201);
=======
    public function store(Request $request)
    {
        //
        $materia = create::all($request);
        return ('el registro materia se a guardado con exito');
>>>>>>> 1f07e63cb1d85aa687b49b34dd4084c72067f844
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
<<<<<<< HEAD
=======
        //
>>>>>>> 1f07e63cb1d85aa687b49b34dd4084c72067f844
        $materia = Materias::find($id);
        return $materia;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
}
