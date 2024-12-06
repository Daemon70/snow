@extends('layout')
@section('title', 'Videos')
@section('content')
<body class="background-video">
    <h1>Buscar Videos en YouTube</h1>

    <!-- Formulario de búsqueda -->
    <form method="GET" action="{{ route('youtube.search') }}">
        <input type="text" name="query" placeholder="Buscar videos en YouTube" required />
        <button type="submit">Buscar</button>
    </form>

    <!-- Mostrar los resultados de búsqueda -->
    <h2>Resultados de búsqueda:</h2>
    @if (isset($videos) && count($videos) > 0)
        <ul>
            @foreach ($videos as $video)
                <li>
                    <a href="https://www.youtube.com/watch?v={{ $video['id'] }}" target="_blank">
                        <img src="{{ $video['thumbnail'] }}" alt="{{ $video['title'] }}" width="120">
                        {{ $video['title'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No se encontraron videos para tu búsqueda.</p>
    @endif
</body>
@endsection
