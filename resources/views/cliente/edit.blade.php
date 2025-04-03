@extends('layouts.plantillabase');

@section('contenido')


<div class="container">
    <form action="/clientes/{{$cliente->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{$cliente->nombre}}">
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" class="form-control" value="{{$cliente->apellido}}">
        </div>
        <div class="form-group">
            <label for="dni">DNI</label>
            <input type="text" name="dni" class="form-control" value="{{$cliente->dni}}">
        </div>
        <div class="form-group">
            <label for="pago">Pago</label>
            <select name="pago" class="form-control" value="{{$cliente->pago}}">
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>
        </div>
        <a href="/clientes" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

@endsection
