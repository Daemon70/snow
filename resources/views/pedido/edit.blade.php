@extends('layout')
@section('contenido')
<br><br><br><br>
<div class="seccion-catalogo">
    <div class="row">
        <div class="regreso col-2">
            <a href="{{ route('pedido.index') }}" class="btn btn-info"><i class="fa-solid fa-plus"></i>Regresar</a>
        </div>
        <br><br>
        <h1 class="text-center">Nuevo Pedido a Domicilio</h1>
    </div>
    <br>
    <!-- Aquí va un formulario -->
    <div class="row">
        <div class="col-4 m-auto">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form id="myForm" action="{{ route('pedido.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="customerName" class="form-label">
                        <h4>Nombre del Cliente:</h4>
                    </label>
                    <input value="{{ old('customerName') }}" type="text" class="form-control" id="customerName" name="customerName" required>
                    <div class="invalid-feedback">Por favor ingrese el nombre del cliente.</div>

                    <label for="customerLastName">
                        <h4>Apellidos:</h4>
                    </label>
                    <input value="{{ old('customerLastName') }}" type="text" class="form-control" id="customerLastName" name="customerLastName" required>
                    <div class="invalid-feedback">Por favor ingrese los apellidos.</div>

                    <label for="phoneNumber">
                        <h4>Número de Teléfono:</h4>
                    </label>
                    <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" min="111111111" max="9999999999" required>
                    <div class="invalid-feedback">Por favor ingrese un número de teléfono válido.</div>

                    <label for="street">
                        <h4>Calle:</h4>
                    </label>
                    <input type="text" class="form-control" id="street" name="street" required>
                    <div class="invalid-feedback">Por favor ingrese la calle.</div>

                    <label for="crossStreet">
                        <h4>Calle Cruzada:</h4>
                    </label>
                    <input type="text" class="form-control" id="crossStreet" name="crossStreet" required>
                    <div class="invalid-feedback">Por favor ingrese la calle cruzada.</div>

                    <label for="neighborhood">
                        <h4>Colonia:</h4>
                    </label>
                    <input type="text" class="form-control" id="neighborhood" name="neighborhood" required>
                    <div class="invalid-feedback">Por favor ingrese la colonia.</div>
                </div>
                <div class="footer">
                    <button type="submit" class="btn btn-primary">Guardar Nuevo</button>
                    <button type="reset" class="btn btn-secondary">Limpiar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
