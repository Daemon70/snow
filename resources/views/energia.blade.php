<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualización de Energía</title>

    <!-- Incluir jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="module" src="js/firestore.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* Estilos generales de la página */
        body {
            font-family: 'Arial', sans-serif;
            color: #fff;
            margin: 0;
            padding: 0;
            background: #1b4f72;
            position: relative;
            overflow: hidden;
            padding-top: 300px; /* Añadido para espacio debajo de la barra de navegación */
        }

        /* Estilo para el video de fondo */
        video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        h1 {
            text-align: center;
            font-size: 3rem;
            color: #fff;
            margin-bottom: 20px;
        }

        .container {
            background: #333;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            width: 300px;
            text-align: center;
            box-sizing: border-box;
        }

        .data {
            font-size: 1.2rem;
            margin: 15px 0;
            color: #fff;
        }

        .data span {
            font-weight: bold;
        }

        #electricidad {
            margin-top: 20px;
            display: inline-block;
            width: 30px;
            height: 30px;
            background-color: #f3f3f3;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        #electricidad:checked {
            background-color: #4CAF50;
        }

        /* Efectos de hover para los datos */
        .data:hover {
            background-color: #444;
            transition: background-color 0.3s;
        }

        /* Estilos para el checkbox de electricidad */
        .checkbox-container {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .checkbox-container label {
            font-size: 1.1rem;
            margin-left: 10px;
            color: #fff;
        }

        .checkbox-container input {
            cursor: pointer;
        }

        /* Navbar Fija en la parte superior */
        .navbar {
            z-index: 1000; /* Asegura que la navbar esté encima de otros elementos */
        }
    </style>
</head>

<body>
    <!-- Video de fondo -->
    <video autoplay muted loop>
        <source src="/videos/kazuma.mp4" type="video/mp4">
        Tu navegador no soporta el formato de video.
    </video>

    <!-- Barra de Navegación -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg py-3 fixed-top">
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
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/energia">Energia electrica</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/maps">Mapas</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/youtube/search">Videos</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/weather/show">Clima</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/perfil">Perfil</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/about">Nosotros</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <h1>Visualización de Datos de Energía</h1>

    <div class="container">
        <div class="data" id="corriente">
            <span>Corriente:</span> Cargando...
        </div>
        <div class="data" id="frecuencia">
            <span>Frecuencia:</span> Cargando...
        </div>
        <div class="data" id="resistencia">
            <span>Resistencia:</span> Cargando...
        </div>
        <div class="data" id="voltaje">
            <span>Voltaje:</span> Cargando...
        </div>

        <!-- Checkbox para controlar la electricidad -->
        <div class="checkbox-container">
            <input id="electricidad" type="checkbox" name="electricidad" checked onchange="up()">
            <label for="electricidad">Estado de Electricidad</label>
        </div>
    </div>
</body>

</html>
