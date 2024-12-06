<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Productos</title>
    <style>
        /* Reseteo de márgenes y paddings predeterminados */
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

        /* Contenedor de productos */
        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
        }

        /* Estilo individual para cada producto */
        .product {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            width: 250px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .product:hover {
            transform: scale(1.05); /* Efecto al pasar el mouse */
        }

        .product img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product h2 {
            font-size: 1.5em;
            color: #333;
            margin-top: 10px;
        }

        .description {
            color: #777;
            font-size: 1em;
            margin: 10px 0;
        }

        .price {
            font-size: 1.2em;
            color: #e74c3c;
            font-weight: bold;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg py-3">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold text-uppercase" href="#" style="letter-spacing: 1.5px;">
                    Bocado Gourmet
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/oferta">Platillos</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/carrito">Carrito</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/especial">Ofertas especiales</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/recompensas">Recompensas</a></li>
                        <!-- Producto 3<li class="nav-item"><a class="nav-link text-uppercase" href="/sales">Ventas</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/delivery-orders">Pedido a domicilio</a></li>-->
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/maps">Mapas</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/youtube/search">Videos</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/weather/show">Clima</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/perfil">Perfil</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/about">Nosotros</a></li>
                       <!-- <li class="nav-item"><a class="nav-link text-uppercase" href="/team">Equipo</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/oferta">Ofertas</a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
        <h1>Bienvenidos a nuestra tienda</h1>
    </header>

    <div class="product-container">
        <div class="product">
            <img src="../images/productos/ensalada_mediterranea.jpg" alt="Producto 1">
            <h2>Ensalada Mediterránea</h2>
            <p class="description">Fresca mezcla de lechugas, tomate, pepino, aceitunas negras, queso feta y aderezo de aceite de oliva.</p>
            <p class="price">$8.50</p>
        </div>

        <div class="product">
            <img src="../images/productos/limonada.jfif" alt="Producto 2">
            <h2>Limonada Fresca con Hierbabuena</h2>
            <p class="description">Limonada natural, con un toque de hierbabuena fresca, ideal para refrescarte.</p>
            <p class="price">$5.00</p>
        </div>

        <div class="product">
            <img src="../images/productos/pescado.jfif" alt="Producto 3">
            <h2>Tacos de Pescado Baja</h2>
            <p class="description">Tacos suaves de tortilla de maíz rellenos de pescado empanizado, repollo rallado y salsa de aguacate.</p>
            <p class="price">$12.00</p>
        </div>
        <div class="product">
            <img src="../images/productos/mariscos.jfif" alt="Producto 3">
            <h2>Sopa de Mariscos</h2>
            <p class="description">Caldo caliente con una variedad de mariscos frescos, cebolla, tomate, cilantro y un toque de limón.</p>
            <p class="price">$9.50</p>
        </div>
        <div class="product">
            <img src="../images/productos/pizza.jpg" alt="Producto 3">
            <h2>Pizza Margarita Artesanal</h2>
            <p class="description">Salsa de tomate casera, mozzarella fresca, albahaca y un toque de aceite de oliva extra virgen.
            </p>
            <p class="price">$14.00</p>
        </div>
        <div class="product">
            <img src="../images/productos/burger.jfif" alt="Producto 3">
            <h2>Hamburguesa El Gran Burger</h2>
            <p class="description">Carne de res 100% angus, queso cheddar derretido, cebolla caramelizada, lechuga y mayonesa especial.</p>
            <p class="price">$16.00</p>
        </div>
        <div class="product">
            <img src="../images/productos/ceviche.jpg" alt="Producto 3">
            <h2>Ceviche Tropical</h2>
            <p class="description">Pescado fresco marinado con jugo de lima, cilantro, mango y cebolla morada. Servido con chips de tortilla.</p>
            <p class="price">$13.00</p>
        </div>
        <div class="product">
            <img src="../images/productos/lasaña.jpg" alt="Producto 3">
            <h2>Lasaña de Carne Tradicional</h2>
            <p class="description">Capas de pasta, carne molida, salsa bechamel y mozzarella, horneada a la perfección.</p>
            <p class="price">$18.00</p>
        </div>
        <div class="product">
            <img src="../images/productos/pollo.jpg" alt="Producto 3">
            <h2>Pollo a la Parrilla con Papas Fritas</h2>
            <p class="description">Pechuga de pollo marinada y asada a la parrilla, acompañada de papas fritas crujientes.</p>
            <p class="price">$15.00</p>
        </div>
        <div class="product">
            <img src="../images/productos/filete.avif" alt="Producto 3">
            <h2>Filete Mignon con Salsa de Vino Tinto</h2>
            <p class="description">Filete de res de alta calidad, cocido a la perfección, con una suave salsa de vino tinto y hierbas.</p>
            <p class="price">$24.00</p>
        </div>
        <div class="product">
            <img src="../images/productos/raviol.jpg" alt="Producto 3">
            <h2>Raviolis de Espinaca y Ricotta</h2>
            <p class="description">Raviolis caseros rellenos de espinaca y ricotta, servidos con salsa de tomate y albahaca.</p>
            <p class="price">$17.00</p>
        </div>
        <div class="product">
            <img src="../images/productos/tarta.jfif" alt="Producto 3">
            <h2>Tarta de Limón y Merengue</h2>
            <p class="description">Base crujiente de galleta, crema de limón refrescante y merengue suave y dorado.</p>
            <p class="price">$7.00</p>
        </div>
        <div class="product">
            <img src="../images/productos/brownie.jfif" alt="Producto 3">
            <h2>Brownie de Chocolate y Nuez</h2>
            <p class="description">Brownie de chocolate fundido con trozos de nuez, servido con una bola de helado de vainilla.</p>
            <p class="price">$6.50</p>
        </div>
        <div class="product">
            <img src="../images/productos/cafe.jpg" alt="Producto 3">
            <h2>Café Latte Cremoso</h2>
            <p class="description">Café espresso con leche vaporizada, suave y cremoso, perfecto para acompañar cualquier postre.</p>
            <p class="price">$4.00</p>
        </div>

        <!-- Añade más productos aquí siguiendo el mismo formato -->
    </div>
</body>
</html>
