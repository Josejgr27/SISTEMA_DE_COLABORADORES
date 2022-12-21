@extends('layouts.plantillabase');

@section('contenido')
<a href ="colaboradores/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
<th scope="col">ID</th>
<th scope="col">Nombre</th>
<th scope="col">Empresa</th>
<th scope="col">Área</th>
<th scope="col">Departamento</th>
<th scope="col">Puesto</th>
<th scope="col">Fecha de alta</th>
<th scope="col">Estatus</th>
<th scope="col">Acciones</th>
       </tr>
    </thead>
        <tbody>
            @foreach($colaboradores as $colaborador)
            <tr>
                <td>{{$colaborador->id}}</td>
                <td>{{$colaborador->nombre}}</td>
                <td>{{$colaborador->empresa}}</td>
                <td>{{$colaborador->area}}</td>
                <td>{{$colaborador->departamento}}</td>
                <td>{{$colaborador->puesto}}</td>
                <td>{{$colaborador->fecha}}</td>
                <td>{{$colaborador->estatus}}</td>
                <td>

                    <form action="{{ route ('colaboradores.destroy', $colaborador->id)}}" method="POST">
                    <a href = "/colaboradores/{{$colaborador->id}}/edit" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
               
                    </form>
                </td>    
            </tr>
            @endforeach
        </tbody>
</table>
@endsection

