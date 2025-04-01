@extends ('layouts.plantillabase');

@section('contenido')

<h1> Vista General Clientes</h1>

<a href="clientes/create">Crear Cliente</a>

<table>
    <thead>
     <th>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
            <th>Pago</th>

        </tr>
     </th>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <th>{{$cliente->id}}</th>
            <th>{{$cliente->nombre}}</th>
            <th>{{$cliente->apellido}}</th>
            <th>{{$cliente->dni}}</th>
            <th>{{$cliente->pago}}</th>
            <th>
                <form action="{{route('clientes.destroy',$cliente->id)}}" method="POST">
                    <a href="/clientes/{{$cliente->id}}/edit">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit">Borrar</button>
                </form>
                
            </th>            
        </tr>

        @endforeach
    </tbody>
     
</table>
@endsection
