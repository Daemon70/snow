<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas Especiales - La Cocina de Paulina</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        .header {
            text-align: center;
            margin-top: 50px;
            padding-bottom: 30px;
        }

        .header h1 {
            font-size: 2.5em;
            color: #333;
        }

        .offer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: space-between;
            margin-bottom: 50px;
        }

        .offer-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 30%;
            transition: transform 0.3s ease;
        }

        .offer-card:hover {
            transform: scale(1.05);
        }

        .offer-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .offer-card .content {
            padding: 20px;
        }

        .offer-card h3 {
            font-size: 1.8em;
            color: #e74c3c;
        }

        .offer-card p {
            font-size: 1em;
            color: #555;
        }

        .offer-card .price {
            font-size: 1.5em;
            color: #2ecc71;
            font-weight: bold;
        }

        .offer-card .benefit {
            font-size: 1.1em;
            color: #e67e22;
            margin-top: 10px;
        }

        .footer {
            text-align: center;
            margin-top: 50px;
            padding: 20px;
            background-color: #333;
            color: white;
        }
    </style>
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
    </header>

    <!-- Header -->
    <div class="header">
        <h1>Ofertas Especiales por Temporada</h1>
        <p>Descubre nuestras promociones por tiempo limitado, perfectas para cada ocasión.</p>
    </div>

    <!-- Ofertas -->
    <div class="offer-container">

        <!-- Enero - Año Nuevo -->
        <div class="offer-card">
            <img src="../images/especiales/nuevo.jfif" alt="Oferta Año Nuevo">
            <div class="content">
                <h3>Descuento Año Nuevo</h3>
                <p>¡Celebra el inicio del año con un 15% de descuento en todo el menú!</p>
                <p class="price">$60.00</p>
                <p class="benefit">Beneficio: Descuento en todo el menú de enero.</p>
            </div>
        </div>

        <!-- Febrero - San Valentín -->
        <div class="offer-card">
            <img src="../images/especiales/sanv.jfif" alt="Oferta San Valentín">
            <div class="content">
                <h3>Menú San Valentín</h3>
                <p>Cena romántica para dos personas con plato principal, postre y vino por solo $80.00.</p>
                <p class="price">$80.00</p>
                <p class="benefit">Beneficio: Menú para dos con vino incluido.</p>
            </div>
        </div>

        <!-- Marzo - Día Internacional de la Mujer -->
        <div class="offer-card">
            <img src="../images/especiales/mujeres.jpg" alt="Oferta Día de la Mujer">
            <div class="content">
                <h3>Celebración Día de la Mujer</h3>
                <p>Descuento del 25% en todos los platillos para mujeres durante el 8 de marzo.</p>
                <p class="price">$50.00</p>
                <p class="benefit">Beneficio: Descuento especial para todas las mujeres.</p>
            </div>
        </div>

        <!-- Abril - Semana Santa -->
        <div class="offer-card">
            <img src="../images/especiales/santa.jpg" alt="Oferta Semana Santa">
            <div class="content">
                <h3>Menú Especial Semana Santa</h3>
                <p>Disfruta de nuestra opción de mariscos a precios especiales durante toda la semana.</p>
                <p class="price">$70.00</p>
                <p class="benefit">Beneficio: Menú especial de mariscos con precios especiales.</p>
            </div>
        </div>

        <!-- Mayo - Día de la Madre -->
        <div class="offer-card">
            <img src="../images/especiales/madre.jpg" alt="Oferta Día de la Madre">
            <div class="content">
                <h3>Feliz Día de la Madre</h3>
                <p>Menú degustación especial para mamá con un 30% de descuento en la cuenta total.</p>
                <p class="price">$90.00</p>
                <p class="benefit">Beneficio: Menú especial y descuento para mamás.</p>
            </div>
        </div>

        <!-- Junio - Día del Padre -->
        <div class="offer-card">
            <img src="../images/especiales/padre.jpg" alt="Oferta Día del Padre">
            <div class="content">
                <h3>Menú Especial Día del Padre</h3>
                <p>Un menú especial para papá, con un 20% de descuento en bebidas.</p>
                <p class="price">$85.00</p>
                <p class="benefit">Beneficio: Menú para papá con descuento en bebidas.</p>
            </div>
        </div>

        <!-- Julio - Día de la Independencia -->
        <div class="offer-card">
            <img src="../images/especiales/pat.jpeg" alt="Oferta Día de la Independencia">
            <div class="content">
                <h3>Fiesta de Independencia</h3>
                <p>Disfruta de nuestra fiesta mexicana con un 15% de descuento en platillos mexicanos tradicionales.</p>
                <p class="price">$60.00</p>
                <p class="benefit">Beneficio: Descuento en platillos mexicanos.</p>
            </div>
        </div>

        <!-- Agosto - Vacaciones de Verano -->
        <div class="offer-card">
            <img src="../images/especiales/verano.jpg" alt="Oferta Vacaciones Verano">
            <div class="content">
                <h3>Descuento Verano</h3>
                <p>¡Disfruta de un 20% de descuento en cócteles y entradas frías!</p>
                <p class="price">$50.00</p>
                <p class="benefit">Beneficio: Descuento en cócteles y aperitivos.</p>
            </div>
        </div>

        <!-- Septiembre - Mes de la Patria -->
        <div class="offer-card">
            <img src="../images/especiales/ind.jpg" alt="Oferta Mes de la Patria">
            <div class="content">
                <h3>Mes de la Patria</h3>
                <p>Celebra las fiestas patrias con nuestra selección de platillos mexicanos y bebidas típicas.</p>
                <p class="price">$55.00</p>
                <p class="benefit">Beneficio: Platillos y bebidas típicas de México.</p>
            </div>
        </div>

        <!-- Octubre - Halloween -->
        <div class="offer-card">
            <img src="../images/especiales/hallowen.jpg" alt="Oferta Halloween">
            <div class="content">
                <h3>Oferta Halloween</h3>
                <p>Disfruta de nuestro menú espeluznante con un 15% de descuento en el menú de Halloween.</p>
                <p class="price">$60.00</p>
                <p class="benefit">Beneficio: Descuento en el menú especial de Halloween.</p>
            </div>
        </div>

        <!-- Noviembre - Día de Muertos -->
        <div class="offer-card">
            <img src="../images/especiales/muerto.jpg" alt="Oferta Día de Muertos">
            <div class="content">
                <h3>Oferta Día de Muertos</h3>
                <p>Menú especial con platillos tradicionales mexicanos para celebrar el Día de Muertos.</p>
                <p class="price">$65.00</p>
                <p class="benefit">Beneficio: Menú especial por Día de Muertos.</p>
            </div>
        </div>

        <!-- Diciembre - Navidad -->
        <div class="offer-card">
            <img src="../images/especiales/navidad.webp" alt="Oferta Navidad">
            <div class="content">
                <h3>Oferta Navidad</h3>
                <p>Disfruta de nuestra cena navideña con un 20% de descuento en todos los platillos navideños.</p>
                <p class="price">$75.00</p>
                <p class="benefit">Beneficio: Descuento en platillos navideños.</p>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Cocina Gourmet | Todos los derechos reservados</p>
    </div>

</body>

</html>

