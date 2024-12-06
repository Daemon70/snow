<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compra - Restaurante</title>
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

        .cart-container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .cart-summary {
            margin-top: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .total {
            font-size: 1.5em;
            color: #e74c3c;
            font-weight: bold;
            text-align: right;
        }

        .discount {
            text-align: right;
            margin-top: 10px;
        }

        .discount input {
            padding: 8px;
            margin-right: 10px;
            font-size: 1em;
        }

        .btn {
            background-color: #e74c3c;
            color: white;
            padding: 15px 30px;
            font-size: 1.2em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            width: 100%;
            text-align: center;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #c0392b;
        }

        .empty-cart {
            text-align: center;
            margin-top: 50px;
        }

        .empty-cart p {
            font-size: 1.5em;
            color: #888;
        }
    </style>
</head>
<body>

    <header>
        <h1>Carrito de Compra</h1>
    </header>

    <div class="cart-container">
        <!-- Resumen del carrito -->
        <div class="cart-summary">
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

            <div class="total">
                <p>Total antes de descuento: $95.00</p>
            </div>

            <!-- Caja de descuento -->
            <div class="discount">
                <label for="discount-code">Código de Descuento:</label>
                <input type="text" id="discount-code" placeholder="Ingrese el código">
                <button onclick="applyDiscount()">Aplicar Descuento</button>
            </div>

            <div class="total">
                <p id="total-with-discount">Total con descuento: $95.00</p>
            </div>

            <!-- Botón para realizar pedido -->
            <button class="btn" onclick="realizarPedido()">Realizar Pedido</button>
        </div>

        <!-- Mensaje si el carrito está vacío -->
        <div class="empty-cart" id="empty-cart" style="display:none;">
            <p>Tu carrito está vacío.</p>
        </div>
    </div>

    <script>
        // Función para aplicar el descuento
        function applyDiscount() {
            var discountCode = document.getElementById("discount-code").value;
            var totalBeforeDiscount = 95.00;
            var discountAmount = 0;

            // Comprobamos si el código de descuento es válido
            if (discountCode === "DISCOUNT10") {
                discountAmount = totalBeforeDiscount * 0.10; // 10% de descuento
                var newTotal = totalBeforeDiscount - discountAmount;
                document.getElementById("total-with-discount").textContent = "Total con descuento: $" + newTotal.toFixed(2);
            } else {
                alert("Código de descuento no válido.");
            }
        }

        // Función para redirigir al usuario al final de la compra
        function realizarPedido() {
            // Redirige a la vista /end (suponiendo que esa es la ruta final)
            window.location.href = "/end";
        }
    </script>

</body>
</html>