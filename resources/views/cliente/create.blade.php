@extends('layouts.plantillabase');

@section('contenido')


<form action="{{route('clientes.store')}}" method="POST">
    @csrf
    <div>
        <label for="">Nombre</label>
        <input type="text" name="nombre">
        <label for="">Apellido</label>
        <input type="text"name="apellido">
        <label for="">DNI</label>
        <input type="text"name="dni">
        <label for="">Pago</label>
        <select name="pago">
            <option value="1">Sí</option>
            <option value="0">No</option>
        </select>
    </div>
    <a href="/clientes">Cancelar</a>
    <button type="submit">Guardar</button>
</form>

@endsection