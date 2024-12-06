<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'La Cocina de Paulina')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome for social icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/energia">Energia electrica</a></li>
                        <!-- Producto 3<li class="nav-item"><a class="nav-link text-uppercase" href="/sales">Ventas</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/delivery-orders">Pedido a domicilio</a></li>-->
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/maps">Mapas</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/youtube/search">Videos</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/weather/show">Clima</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/perfil">Perfil</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="/about">Nosotros</a></li>
                       <!--  <li class="nav-item"><a class="nav-link text-uppercase" href="/team">Equipo</a></li>
                       <li class="nav-item"><a class="nav-link text-uppercase" href="/oferta">Ofertas</a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>

