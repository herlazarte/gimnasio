@extends('layouts.plantillabase');

@section('contenido')


<form action="/clientes/{{$cliente->id}}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="">Nombre</label>
        <input type="text" name="nombre" value="{{$cliente->nombre}}">
        <label for="">Apellido</label>
        <input type="text"name="apellido" value="{{$cliente->apellido}}">
        <label for="">DNI</label>
        <input type="text"name="dni" value="{{$cliente->dni}}">
        <label for="">Pago</label>
        <select name="pago" value="{{$cliente->pago}}">
            <option value="1">Sí</option>
            <option value="0">No</option>
        </select>
    </div>
    <a href="/clientes">Cancelar</a>
    <button type="submit">Guardar</button>
</form>

@endsection