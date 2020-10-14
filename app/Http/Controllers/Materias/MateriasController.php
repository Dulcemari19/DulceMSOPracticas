<?php

namespace App\Http\Controllers\Materias;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
    public function store(MateriaRequests $request)
    {
        //
      //  return $request;
        $materia =$this->materia->create($request->all());
        return response()->json($materia);
       // return $materia;
      //  return response()->json(new MateriasS($materia), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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