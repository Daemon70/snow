@extends('layout')

@section('title', 'Recompensas')

@section('content')
<body class="background-recompensas">
    <h1 class="text-center">¡Bienvenido! Intercambia tus puntos por recompensas aquí</h1>

    <!-- Información del usuario -->
    <div class="user-info">
        <p>Hola, <strong>Vini jr</strong>!</p>
        <p>Tienes <strong>150 puntos</strong> disponibles.</p>
    </div>

    <!-- Descripción de las recompensas -->
    <div class="main-content text-center">
        <p>Aquí puedes ver las recompensas disponibles que puedes obtener con tus puntos...</p>
    </div>

    <!-- Botones de recompensas -->
    <div class="btn-container">
        <button class="float-btn" data-desc="10% de descuento" data-price="20 puntos" data-code="RECOMPENSA01">Descuento 10%</button>
        <button class="float-btn" data-desc="15% de descuento" data-price="30 puntos" data-code="RECOMPENSA02">Descuento 15%</button>
        <button class="float-btn" data-desc="20% de descuento" data-price="50 puntos" data-code="RECOMPENSA03">Descuento 20%</button>
        <button class="float-btn" data-desc="50 puntos extra" data-price="50 puntos" data-code="RECOMPENSA04">+50 Puntos</button>
        <button class="float-btn" data-desc="Producto gratis" data-price="100 puntos" data-code="RECOMPENSA05">Producto Gratis</button>
        <button class="float-btn" data-desc="Compra 1, lleva 2" data-price="75 puntos" data-code="RECOMPENSA06">Compra 1, Lleva 2</button>
        <button class="float-btn" data-desc="25% en tu próxima compra" data-price="40 puntos" data-code="RECOMPENSA07">25% Off</button>
        <button class="float-btn" data-desc="Acceso VIP por 1 mes" data-price="200 puntos" data-code="RECOMPENSA08">Acceso VIP</button>
        <button class="float-btn" data-desc="3 días Premium" data-price="150 puntos" data-code="RECOMPENSA09">3 Días Premium</button>
        <button class="float-btn" data-desc="30% en tu próxima compra" data-price="100 puntos" data-code="RECOMPENSA10">30% Off</button>
        <button class="float-btn" data-desc="Recompensa Especial" data-price="500 puntos" data-code="RECOMPENSA11">Recompensa Especial</button>
        <button class="float-btn" data-desc="10 puntos dobles" data-price="20 puntos" data-code="RECOMPENSA12">+10 Puntos Dobles</button>
    </div>
</body>
@endsection

<style>
    /* Estilos globales */
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    h1 {
        color: #fff;
        margin-top: 20px;
    }

    .background-recompensas {
        background-image: url('/path/to/your/image.jpg');
        background-size: cover;
        background-position: center;
        color: #fff;
    }

    /* Estilo para la información del usuario */
    .user-info {
        text-align: center;
        background-color: rgba(0, 0, 0, 0.9);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        margin: 20px auto;
        max-width: 500px;
        font-size: 18px;
    }

    .user-info strong {
        color: #007bff;
    }

    /* Contenedor de botones */
    .btn-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 10px;
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
    }

    .float-btn {
        position: relative; /* Necesario para posicionar el ::after */
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 15px;
        font-size: 14px;
        text-align: center;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .float-btn:hover {
        background-color: #0056b3;
    }

    /* Tooltip para mostrar información emergente */
    .float-btn::after {
        content: attr(data-desc) "\A" attr(data-price) " | Código: " attr(data-code);
        font-size: 12px;
        color: #fff;
        background-color: rgba(0, 0, 0, 0.8);
        padding: 8px;
        border-radius: 5px;
        position: absolute;
        bottom: -70px; /* Espaciado debajo del botón */
        left: 50%;
        transform: translateX(-50%);
        white-space: pre-wrap; /* Respeta los saltos de línea */
        display: none; /* Oculto por defecto */
        z-index: 10;
    }

    .float-btn:hover::after {
        display: block; /* Muestra el tooltip al pasar el mouse */
    }

    /* Responsividad */
    @media (max-width: 768px) {
        .btn-container {
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
        }

        .user-info {
            font-size: 16px;
        }

        .float-btn {
            font-size: 12px;
            padding: 10px;
        }

        .float-btn::after {
            font-size: 10px;
        }
    }
</style>




