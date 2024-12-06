@extends('layout')

@section('title', 'Buscar en YouTube')

@section('content')
<body class="youtube-search">

    <h3 class="text-center mt-4">Buscar Video en YouTube</h3>
    
    <!-- Formulario para buscar videos -->
    <form method="GET" action="{{ url('/search') }}" class="d-flex justify-content-center my-3">
        <input type="text" name="query" class="form-control" placeholder="Buscar video..." value="{{ request('query') }}" required style="width: 60%;" />
        <button type="submit" class="btn btn-primary ms-2">Buscar</button>
    </form>

    <div id="video-results" class="container mt-4">
        @if (isset($videos) && count($videos) > 0)
            <h3 class="text-center mb-4">Resultados:</h3>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($videos as $video)
                    <div class="col">
                        <div class="card h-100">
                            <a href="https://www.youtube.com/watch?v={{ $video['id'] }}" target="_blank" class="video-link">
                                <img src="{{ $video['thumbnail'] }}" alt="{{ $video['title'] }}" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $video['title'] }}</h5>
                                <p class="card-text">{{ Str::limit($video['description'], 100) }}</p>
                                <p class="card-text"><small class="text-muted">Publicado por: {{ $video['channelTitle'] }}</small></p>
                            </div>
                            <div class="card-footer text-center">
                                <button onclick="playVideo('{{ $video['id'] }}')" class="btn btn-outline-primary">Ver Video</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center">No se encontraron resultados.</p>
        @endif
    </div>

    <!-- Reproductor de YouTube -->
    <div id="video-player" class="container my-4" style="display: none;">
        <iframe id="youtube-player" width="100%" height="500" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <script>
        function playVideo(videoId) {
            const player = document.getElementById('youtube-player');
            player.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
            document.getElementById('video-player').style.display = 'block';
            window.scrollTo({
                top: document.getElementById('video-player').offsetTop,
                behavior: 'smooth'
            });
        }
    </script>

</body>
@endsection

