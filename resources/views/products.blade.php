@extends('layout')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

@section('title', 'Productos')

@section('content')
<body class="background-mods">
    <h2>Productos</h2>
    <p>Aquí encontrarás información sobre nuestros productos.</p>

    <div class="container mt-4">
    <form id="productsForm">
        <div class="form-group row">
            <label for="productName" class="col-sm-3 col-form-label">Nombre del Producto</label>
            <div class="col-sm-5"> <!-- Asegúrate de que esta columna tenga suficiente ancho para el campo -->
                <input type="text" class="form-control narrow-input" id="productName" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="productPrice" class="col-sm-3 col-form-label">Precio</label>
            <div class="col-sm-5"> <!-- Asegúrate de que esta columna tenga suficiente ancho para el campo -->
                <input type="number" class="form-control narrow-input" id="productPrice" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Producto</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="productsTableBody">
            <!-- Los datos se cargarán aquí -->
        </tbody>
    </table>
</div>

    <script>
        let productsData = [];
        let editProductIndex = -1;

        function loadProductsTable() {
            fetch('/products') // Cambia esta URL si es necesario
                .then(response => response.json())
                .then(data => {
                    productsData = data;
                    const tbody = document.getElementById('productsTableBody');
                    tbody.innerHTML = '';
                    productsData.forEach(item => {
                        const row = `<tr>
                            <td>${item.id}</td>
                            <td>${item.name}</td>
                            <td>${item.price}</td>
                            <td>
                                <button class="btn btn-warning btn-sm" onclick="editProduct(${item.id})">Editar</button>
                                <button class="btn btn-danger btn-sm" onclick="deleteProduct(${item.id})">Eliminar</button>
                            </td>
                        </tr>`;
                        tbody.innerHTML += row;
                    });
                });
        }

        document.getElementById('productsForm').onsubmit = function(e) {
            e.preventDefault();
            const name = document.getElementById('productName').value;
            const price = document.getElementById('productPrice').value;

            const url = editProductIndex >= 0 ? `/products/${editProductIndex}` : '/products';
            const method = editProductIndex >= 0 ? 'PUT' : 'POST';

            fetch(url, {
                method: method,
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ name, price }),
            })
            .then(() => {
                editProductIndex = -1;
                loadProductsTable();
                this.reset();
            });
        };

        function editProduct(id) {
            const item = productsData.find(data => data.id === id);
            document.getElementById('productName').value = item.name;
            document.getElementById('productPrice').value = item.price;
            editProductIndex = id;
        }

        function deleteProduct(id) {
            fetch(`/products/${id}`, {
                method: 'DELETE',
            })
            .then(() => loadProductsTable());
        }

        // Cargar la tabla al inicio
        loadProductsTable();
    </script>
@endsection
