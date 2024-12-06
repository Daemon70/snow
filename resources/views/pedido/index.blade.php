@extends('layouts.base')
@section('contenido')
<br><br><br><br>
<div class="seccion-catalogo">
    <h1>Pedidos a Domicilio</h1>
    <br>
    <div class="container col-7">
        <a href="{{ route('pedido.create') }}" class="btn btn-info"><i class="fa-solid fa-plus"></i> Nuevo Pedido</a>
    </div>
    <br>
    <!-- Tabla de pedidos -->
    <div class="container col-8">
        <table class="table table-bordered">
            <thead>
                <tr class="titulo-catalogo">
                    <th>Nombre del Cliente</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lista as $pedido)
                <tr class="txt-catalogo">
                    <td>
                        <p>{{ $pedido->customerName }} {{ $pedido->customerLastName }}</p>
                    </td>
                    <td>
                        <p>{{ $pedido->street }}, {{ $pedido->crossStreet }}, {{ $pedido->neighborhood }}</p>
                    </td>
                    <td>
                        <a href="{{ route('pedido.edit', $pedido->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('pedido.destroy', $pedido->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas borrar este recurso?')">Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
