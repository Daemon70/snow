@extends('layout')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

@section('title', 'Pedidos a Domicilio')

@section('content')
<body class="background-mods">
<h2>Pedidos a Domicilio</h2>
<p>Aquí puedes gestionar tus pedidos a domicilio.</p>

<div class="container mt-4">
    <form id="deliveryForm">
        <div class="form-group row">
            <label for="customerName" class="col-sm-3 col-form-label">Nombre del Cliente</label>
            <div class="col-sm-5">
                <input type="text" class="form-control narrow-input" id="customerName" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="customerLastName" class="col-sm-3 col-form-label">Apellidos</label>
            <div class="col-sm-5">
                <input type="text" class="form-control narrow-input" id="customerLastName" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="phoneNumber" class="col-sm-3 col-form-label">Número de Teléfono</label>
            <div class="col-sm-5">
                <input type="number" class="form-control narrow-input" id="phoneNumber" min="111111111" max="9999999999" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="street" class="col-sm-3 col-form-label">Calle</label>
            <div class="col-sm-5">
                <input type="text" class="form-control narrow-input" id="street" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="crossStreet" class="col-sm-3 col-form-label">Calle Cruzada</label>
            <div class="col-sm-5">
                <input type="text" class="form-control narrow-input" id="crossStreet" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="neighborhood" class="col-sm-3 col-form-label">Colonia</label>
            <div class="col-sm-5">
                <input type="text" class="form-control narrow-input" id="neighborhood" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Cliente</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="deliveryTableBody">
            <!-- Los datos se cargarán aquí -->
        </tbody>
    </table>
</div>

<script src="{{ asset('js/mockData.js') }}"></script>
<script>
    let deliveryData = [...mockData]; // Usar los datos simulados
    let nextId = 4; // Para nuevos registros
    let editDeliveryIndex = -1; // Para editar

    function fetchDeliveryOrders() {
        return new Promise((resolve) => {
            resolve(deliveryData);
        });
    }

    function createDeliveryOrder(order) {
        return new Promise((resolve) => {
            order.id = nextId++;
            deliveryData.push(order);
            resolve(order);
        });
    }

    function updateDeliveryOrder(id, updatedOrder) {
        return new Promise((resolve) => {
            const index = deliveryData.findIndex(order => order.id === id);
            if (index !== -1) {
                deliveryData[index] = { ...deliveryData[index], ...updatedOrder };
                resolve(deliveryData[index]);
            }
        });
    }

    function deleteDeliveryOrder(id) {
        return new Promise((resolve) => {
            deliveryData = deliveryData.filter(order => order.id !== id);
            resolve();
        });
    }

    function loadDeliveryTable() {
        fetchDeliveryOrders().then(data => {
            deliveryData = data;
            const tbody = document.getElementById('deliveryTableBody');
            tbody.innerHTML = '';
            deliveryData.forEach(item => {
                const row = `<tr>
                        <td>${item.id}</td>
                        <td>${item.customerName} ${item.customerLastName}</td>
                        <td>${item.street}, ${item.crossStreet}, ${item.neighborhood}</td>
                        <td>
                            <button class="btn btn-warning btn-sm" onclick="editDelivery(${item.id})">Editar</button>
                            <button class="btn btn-danger btn-sm" onclick="deleteDelivery(${item.id})">Eliminar</button>
                        </td>
                    </tr>`;
                tbody.innerHTML += row;
            });
        });
    }

    document.getElementById('deliveryForm').onsubmit = function(e) {
        e.preventDefault();
        
        const customerName = document.getElementById('customerName').value;
        const customerLastName = document.getElementById('customerLastName').value;
        const phoneNumber = document.getElementById('phoneNumber').value;
        const street = document.getElementById('street').value;
        const crossStreet = document.getElementById('crossStreet').value;
        const neighborhood = document.getElementById('neighborhood').value;

        const order = {
            customerName,
            customerLastName,
            phoneNumber,
            street,
            crossStreet,
            neighborhood
        };

        const promise = editDeliveryIndex >= 0 ? updateDeliveryOrder(editDeliveryIndex, order) : createDeliveryOrder(order);

        promise.then(() => {
            editDeliveryIndex = -1;
            loadDeliveryTable();
            this.reset();
        });
    };

    function editDelivery(id) {
        const item = deliveryData.find(data => data.id === id);
        document.getElementById('customerName').value = item.customerName;
        document.getElementById('customerLastName').value = item.customerLastName;
        document.getElementById('phoneNumber').value = item.phoneNumber;
        document.getElementById('street').value = item.street;
        document.getElementById('crossStreet').value = item.crossStreet;
        document.getElementById('neighborhood').value = item.neighborhood;
        editDeliveryIndex = id;
    }

    function deleteDelivery(id) {
        deleteDeliveryOrder(id).then(() => loadDeliveryTable());
    }

    // Cargar la tabla al inicio
    loadDeliveryTable();
</script>
@endsection

