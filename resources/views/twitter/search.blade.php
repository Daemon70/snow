<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Usuarios en Twitter</title>
</head>
<body>

    <h1>Buscar Usuarios en Twitter</h1>

    <!-- Formulario de búsqueda -->
    <form method="GET" action="{{ route('twitter.search') }}">
        <input type="text" name="query" value="{{ old('query', isset($query) ? $query : '') }}" placeholder="Buscar nombre de usuario" required />
        <button type="submit">Buscar</button>
    </form>

    <h3>Resultados de la búsqueda: '{{ $query ?? '' }}'</h3>

    <!-- Mostrar mensaje de error si existe -->
    @if (isset($errorMessage))
        <p style="color: red;">{{ $errorMessage }}</p>
    @endif

    <!-- Mostrar los usuarios encontrados -->
    @if (isset($users) && count($users) > 0)
        <ul>
            @foreach ($users as $user)
                <li>
                    <strong>{{ $user['username'] ?? 'Desconocido' }}</strong>: <a href="https://twitter.com/{{ $user['username'] }}" target="_blank">{{ '@' . $user['username'] }}</a>
                    <br>
                    <strong>Nombre completo:</strong> {{ $user['name'] ?? 'No disponible' }}
                    <br>
                    <strong>Descripción:</strong> {{ $user['description'] ?? 'No disponible' }}
                </li>
            @endforeach
        </ul>
    @else
        <p>No se encontraron usuarios para la búsqueda.</p>
    @endif

</body>
</html>

