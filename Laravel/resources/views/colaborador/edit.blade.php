@extends('layouts.plantillabase');

@section('contenido')
<h2>EDITAR REGISTROS</h2>

<form action="/colaboradores/{{$colaborador->id}}" method="POST">
@csrf
@method('PUT')

<div class="mb-3">
    <label for="" class="form-label">ID</label>
    <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1" value="{{$colaborador->id}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre Completo</label>
    <input id="descripcion" name="nombre" type="text" class="form-control" tabindex="2" value="{{$colaborador->nombre}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Empresa</label>
    <input id="descripcion" name="empresa" type="text" class="form-control" tabindex="3" value="{{$colaborador->empresa}}">
  </div>
 
  <div class="mb-3">
    <label for="" class="form-label">Área</label>
    <input id="descripcion" name="area" type="text" class="form-control" tabindex="4" value="{{$colaborador->area}}">
  </div> 
  
  <div class="mb-3">
    <label for="" class="form-label">Departamento</label>
    <input id="descripcion" name="dpto" type="text" class="form-control" tabindex="5" value="{{$colaborador->departamento}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Puesto</label>
    <input id="descripcion" name="puesto" type="text" class="form-control" tabindex="6" value="{{$colaborador->puesto}}">
  </div>


    <label type="text" class="form-label">Fecha de alta</label><br>
    <div class="input-group date" data-provide="datepicker">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
    <input id="fec" name="fecha" type="date" step="any" class="form-control" tabindex="7" value="{{$colaborador->fecha}}">
  </div>

  <br><div class="mb-3">
    <label for="" class="form-label">Estatus</label>
    <input id="descripcion" name="estatus" type="text" class="form-control" tabindex="8" value="{{$colaborador->estatus}}">
  </div>

  <a href="/colaboradores" class="btn btn-secondary" tabindex="9">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="10">Guardar</button>
</form>
</form>

@endsection