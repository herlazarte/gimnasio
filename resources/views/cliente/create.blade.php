@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create</h1>
@stop

@section('content')
    
<div class="container">
    <form action="{{route('clientes.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" class="form-control" id="apellido">
        </div>
        <div class="form-group">
            <label for="dni">DNI</label>
            <input type="text" name="dni" class="form-control" id="dni">
        </div>
        <div class="form-group">
            <label for="pago">Pago</label>
            <select name="pago" class="form-control" id="pago">
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>
        </div>
        <a href="/clientes" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop