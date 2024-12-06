@extends('layout')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

@section('title', 'Ventas')

@section('content')
<body class="background-mods">
    <h2>Ventas</h2>
    <p>Aquí encontrarás información sobre nuestras ventas.</p>

    <div class="container mt-4">
    <form id="salesForm">
        <div class="form-group row">
            <label for="product" class="col-sm-3 col-form-label">Producto</label>
            <div class="col-sm-5"> <!-- Asegúrate de que esta columna tenga suficiente ancho para el campo -->
                <input type="text" class="form-control narrow-input" id="product" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="quantity" class="col-sm-3 col-form-label">Cantidad</label>
            <div class="col-sm-5"> <!-- Asegúrate de que esta columna tenga suficiente ancho para el campo -->
                <input type="number" class="form-control narrow-input" id="quantity" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="salesTableBody">
            <!-- Los datos se cargarán aquí -->
        </tbody>
    </table>
</div>

    <script>
        let salesData = [];
        let editIndex = -1;

        function loadTable() {
            fetch('/data') // Cambia esta URL si es necesario
                .then(response => response.json())
                .then(data => {
                    salesData = data;
                    const tbody = document.getElementById('salesTableBody');
                    tbody.innerHTML = '';
                    salesData.forEach(item => {
                        const row = `<tr>
                            <td>${item.id}</td>
                            <td>${item.product}</td>
                            <td>${item.quantity}</td>
                            <td>
                                <button class="btn btn-warning btn-sm" onclick="editItem(${item.id})">Editar</button>
                                <button class="btn btn-danger btn-sm" onclick="deleteItem(${item.id})">Eliminar</button>
                            </td>
                        </tr>`;
                        tbody.innerHTML += row;
                    });
                });
        }

        document.getElementById('salesForm').onsubmit = function(e) {
            e.preventDefault();
            const product = document.getElementById('product').value;
            const quantity = document.getElementById('quantity').value;

            const url = editIndex >= 0 ? `/data/${editIndex}` : '/data';
            const method = editIndex >= 0 ? 'PUT' : 'POST';

            fetch(url, {
                method: method,
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ product, quantity }),
            })
            .then(() => {
                editIndex = -1; // Reset edit index
                loadTable();
                this.reset();
            });
        };

        function editItem(id) {
            const item = salesData.find(data => data.id === id);
            document.getElementById('product').value = item.product;
            document.getElementById('quantity').value = item.quantity;
            editIndex = id;
        }

        function deleteItem(id) {
            fetch(`/data/${id}`, {
                method: 'DELETE',
            })
            .then(() => loadTable());
        }

        // Cargar la tabla al inicio
        loadTable();
    </script>
@endsection


