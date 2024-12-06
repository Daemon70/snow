<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra Realizada - Restaurante</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
        }

        h1 {
            font-size: 2.5em;
            color: #333;
        }

        .order-summary {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .order-summary h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .order-summary table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .order-summary table th, .order-summary table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .order-summary .total {
            font-size: 1.5em;
            color: #e74c3c;
            font-weight: bold;
            text-align: right;
        }

        .discount-info {
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 8px;
            margin-top: 20px;
        }

        .discount-info h3 {
            margin-bottom: 10px;
        }

        .discount-info p {
            color: #333;
            font-size: 1.1em;
        }
    </style>
</head>
<body>

    <header>
        <h1>Compra Realizada
        </h1>
        <h1>Gracias por su preferencia!</h1>
    </header>

    <div class="order-summary">
        <h2>Resumen de la Orden</h2>

        <!-- Detalles de los productos comprados -->
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <!-- Producto 1 -->
                <tr>
                    <td>Ensalada Mediterránea</td>
                    <td>2</td>
                    <td>$8.50</td>
                    <td>$17.00</td>
                </tr>
                <!-- Producto 2 -->
                <tr>
                    <td>Tacos de Pescado Baja</td>
                    <td>3</td>
                    <td>$12.00</td>
                    <td>$36.00</td>
                </tr>
                <!-- Producto 3 -->
                <tr>
                    <td>Pizza Margarita Artesanal</td>
                    <td>1</td>
                    <td>$14.00</td>
                    <td>$14.00</td>
                </tr>
                <!-- Producto 4 -->
                <tr>
                    <td>Pollo a la Parrilla con Papas Fritas</td>
                    <td>1</td>
                    <td>$15.00</td>
                    <td>$15.00</td>
                </tr>
                <!-- Producto 5 -->
                <tr>
                    <td>Ceviche Tropical</td>
                    <td>1</td>
                    <td>$13.00</td>
                    <td>$13.00</td>
                </tr>
            </tbody>
        </table>

        <!-- Total antes de descuento -->
        <div class="total">
            <p>Total antes de descuento: $95.00</p>
        </div>

        <!-- Descuento aplicado -->
        <div class="discount-info">
            <h3>Descuento Aplicado</h3>
            <p>Se aplicó un código de descuento del 10%: <strong>RECOMPENSA01</strong></p>
            <p>Descuento: -$9.50</p>
        </div>

        <!-- Total después de descuento -->
        <div class="total">
            <p>Total a pagar: $85.50</p>
        </div>
    </div>
    <h2 style="text-align: center;">Su compra ha sumado 20 puntos</h2>

    <!-- Información del cliente -->
    <div class="customer-info">
        <h2>Información del Cliente</h2>
        <p><strong>Nombre:</strong> Vinícius José Paixão de Oliveira Júnior</p>
        <p><strong>Dirección:</strong> Calle Ficticia 123, Ciudad, País</p>
        <p><strong>Email:</strong> vini.jr@balond'ore.com</p>
        <p><strong>Teléfono:</strong> +123 456 7890</p>
    </div>

    <!-- Detalles del pedido -->
    <div class="order-info">
        <h2>Detalles de tu Pedido</h2>
        <p><strong>Fecha de Pedido:</strong> 21 de noviembre de 2024</p>
        <p><strong>Hora del Pedido:</strong> 14:30</p>
        <p><strong>Método de Pago:</strong> Tarjeta de Crédito</p>
        <p><strong>Estado del Pedido:</strong> En preparación</p>
    </div>

</body>
</html>
