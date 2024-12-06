<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <style>
        /* Estilos generales */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            background-image: url(../images/we.jpg);
        }

        /* Estilo para el header */
        header {
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        /* Espaciado para compensar el header fijo */
        .perfil-container {
            margin-top: 100px; /* Altura del header ajustada */
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        /* Imagen circular del usuario */
        .perfil-container img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid #007bff; /* Borde azul */
            margin-bottom: 20px;
        }

        /* Nombre del usuario */
        .perfil-container h1 {
            font-size: 1.8rem;
            color: #333333;
            margin-bottom: 10px;
        }

        /* Información adicional (correo, teléfono, dirección) */
        .perfil-container p {
            font-size: 1rem;
            color: #555555;
            margin: 5px 0;
        }

        /* Puntos destacados */
        .perfil-container .puntos {
            font-size: 1.5rem;
            font-weight: bold;
            color: #ffffff;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 10px;
            display: inline-block;
            margin-top: 20px;
        }

        .background {
            background-image: url('../images/we.jpg');
        }
    </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- Header -->
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

    <!-- Contenedor del perfil -->
    <div class="perfil-container">
        <img src="../images/foto.jpg" alt="Foto de Usuario">
        <h1>Vinícius José Paixão de Oliveira Júnior</h1>
        <p>Correo: vini.jr@balond'ore.com</p>
        <p>Teléfono: +52 123 456 7890</p>
        <p>Dirección: Calle Ficticia #123, Colonia Imaginaria, Ciudad Creativa, CP 12345</p>
        <div class="puntos">150 Puntos disponibles</div>
    </div>
</body>
</html>


