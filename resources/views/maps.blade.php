@extends ('layout')

@section('title', 'Mapas')

@section('content')
<body class="background-map">

    <h3>Buscar ubicación</h3>
    
    <!-- Formulario para buscar una ubicación -->
    <form method="GET">
        <input type="text" name="search" placeholder="Buscar lugar o dirección" value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>" />
        <button type="submit">Buscar</button>
    </form>

    <h3>Calculadora de Ruta</h3>
    
    <!-- Formulario para elegir la ruta -->
    <form method="GET">
        <input type="text" name="origin" placeholder="Origen (lat,lon)" value="<?= isset($_GET['origin']) ? htmlspecialchars($_GET['origin']) : '' ?>" required />
        <input type="text" name="destination" placeholder="Destino (lat,lon)" value="<?= isset($_GET['destination']) ? htmlspecialchars($_GET['destination']) : '' ?>" required />
        <select name="mode">
            <option value="driving" <?= isset($_GET['mode']) && $_GET['mode'] == 'driving' ? 'selected' : '' ?>>Automóvil</option>
            <option value="bicycling" <?= isset($_GET['mode']) && $_GET['mode'] == 'bicycling' ? 'selected' : '' ?>>Bicicleta</option>
            <option value="walking" <?= isset($_GET['mode']) && $_GET['mode'] == 'walking' ? 'selected' : '' ?>>Caminando</option>
        </select>
        <button type="submit">Calcular Ruta</button>
    </form>

    <!-- Iframe del mapa -->
    <?php
        // Mostrar el mapa predeterminado antes de elegir las rutas o realizar una búsqueda
        $defaultMapUrl = "https://maps.google.com/maps/embed/v1/view?key=AIzaSyCFlGV5rsqxj2ufZKojgyaVHyopgBnA3_A&center=17.173815,-92.331953&zoom=12";

        // Si el usuario realizó una búsqueda
        if (isset($_GET["search"])) {
            $search = urlencode($_GET["search"]);
            // Actualizar la URL del mapa con la ubicación buscada
            $mapUrl = "https://maps.google.com/maps/embed/v1/place?key=AIzaSyCFlGV5rsqxj2ufZKojgyaVHyopgBnA3_A&q=$search";
        }
        // Si el formulario de cálculo de ruta ha sido enviado, mostrar el mapa con la ruta seleccionada
        elseif (isset($_GET["origin"]) && isset($_GET["destination"]) && isset($_GET["mode"])) {
            $origin = urlencode($_GET["origin"]);
            $destination = urlencode($_GET["destination"]);
            $mode = urlencode($_GET["mode"]);

            // Actualizar la URL del mapa con la ruta seleccionada
            $mapUrl = "https://maps.google.com/maps/embed/v1/directions?key=AIzaSyCFlGV5rsqxj2ufZKojgyaVHyopgBnA3_A&origin=$origin&destination=$destination&mode=$mode";
        } else {
            // Si no se han seleccionado rutas ni búsquedas, mostrar el mapa predeterminado
            $mapUrl = $defaultMapUrl;
        }
        
        // Mostrar el iframe del mapa
        echo "<iframe width='100%' height='650' frameborder='0' style='border:0' src='$mapUrl' allowfullscreen></iframe>";

        // Si se han ingresado los datos de la ruta, calcular y mostrar la información
        if (isset($_GET["origin"]) && isset($_GET["destination"]) && isset($_GET["mode"])) {
            // Llamar a la API de direcciones de Google
            $apiUrl = "https://maps.googleapis.com/maps/api/directions/json?key=AIzaSyB9puKsdACL6PoVbivO1e6U9kNxfNgCbo0&origin=$origin&destination=$destination&mode=$mode";
            $resp = file_get_contents($apiUrl);
            $json = json_decode($resp);

            if ($json->{"status"} == "OK") {
                // Extraer los datos de la ruta
                $distance = $json->{"routes"}[0]->{"legs"}[0]->{"distance"}->{"text"};
                $duration = $json->{"routes"}[0]->{"legs"}[0]->{"duration"}->{"text"};
                $summary = $json->{"routes"}[0]->{"summary"};
                $startAddress = $json->{"routes"}[0]->{"legs"}[0]->{"start_address"};
                $endAddress = $json->{"routes"}[0]->{"legs"}[0]->{"end_address"};

                // Mostrar la información debajo del mapa
                echo "<div class='info'>
                    <h2>Información de la Ruta</h2>
                    <p><strong>Distancia:</strong> $distance</p>
                    <p><strong>Duración estimada:</strong> $duration</p>
                    <p><strong>Resumen:</strong> $summary</p>
                    <p><strong>Dirección de inicio:</strong> $startAddress</p>
                    <p><strong>Dirección de fin:</strong> $endAddress</p>
                </div>";
            } else {
                echo "<p>No se pudo obtener la ruta: " . $json->{"status"} . "</p>";
            }
        }
    ?>

</body>
@endsection








