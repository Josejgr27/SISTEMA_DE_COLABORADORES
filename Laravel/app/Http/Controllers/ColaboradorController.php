<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consumidor;
class ColaboradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colaboradores = Consumidor::all();
        return view('colaborador.index')->with('colaboradores',$colaboradores); // tener cuidado al refenciar variables
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('colaborador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $colaboradores = new Consumidor();
        $colaboradores->id =$request->get('codigo');
        $colaboradores->nombre =$request->get('nombre');
        $colaboradores->empresa =$request->get('empresa');
        $colaboradores->area=$request->get('area');
        $colaboradores->departamento =$request->get('dpto');
        $colaboradores->puesto=$request->get('puesto');
        $colaboradores->fecha =$request->get('fecha');
        $colaboradores->estatus =$request->get('estatus');
        $colaboradores->save();
        
        return redirect('/colaboradores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $colaborador = Consumidor::find($id);
        return view('colaborador.edit')->with('colaborador',$colaborador); // tener cuidado al refenciar variables
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
        $colaborador = Consumidor::find($id);
        
        $colaborador->id =$request->get('codigo');
        $colaborador->nombre =$request->get('nombre');
        $colaborador->empresa =$request->get('empresa');
        $colaborador->area=$request->get('area');
        $colaborador->departamento =$request->get('dpto');
        $colaborador->puesto=$request->get('puesto');
        $colaborador->fecha =$request->get('fecha');
        $colaborador->estatus =$request->get('estatus');
        $colaborador->save();
        
        return redirect('/colaboradores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $colaborador = Consumidor::find($id);

        $colaborador->delete();
        return redirect('/colaboradores');
    }
}
