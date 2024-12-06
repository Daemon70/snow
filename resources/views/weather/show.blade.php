@extends('layout')
@section('title', 'Clima')
@section('content')
<body class="background-weather">
</body>

    <form action="{{ route('weather.show') }}" method="GET">
        @csrf
        <input type="text" name="city" placeholder="Ingresa el nombre de la ciudad" required>
        <button type="submit">Consultar</button>
    </form>

    <div class="container mt-4 text-center" style="max-width: 600px;">
        @isset($weatherData)
            @php
                $temp = $weatherData['main']['temp'];
                $background = $temp > 30 ? '#ffadad' : ($temp > 20 ? '#ffdda1' : ($temp > 10 ? '#a0d7ff' : '#b0c4de'));
            @endphp

            <div class="p-4" style="background-color: {{ $background }}; border-radius: 10px; color: #333;">
                <img src="https://openweathermap.org/img/wn/{{ $weatherData['weather'][0]['icon'] }}@2x.png" alt="icono del clima" class="mb-3">

                <h1>Clima en {{ $weatherData['name'] }}</h1>
                <h2>{{ ucfirst($weatherData['weather'][0]['description']) }}</h2>

                <p><strong>🌡️ Temperatura:</strong> {{ $temp }} °C</p>
                <p><strong>💧 Humedad:</strong> {{ $weatherData['main']['humidity'] }}%</p>
                <p><strong>🌬️ Viento:</strong> {{ $weatherData['wind']['speed'] }} m/s</p>

                @if ($temp > 30)
                    <p style="font-style: italic;">Hace calor. ¡Recuerda usar ropa ligera y mantenerte hidratado!</p>
                @elseif ($temp > 20)
                    <p style="font-style: italic;">El clima es agradable. Perfecto para ropa cómoda y fresca.</p>
                @elseif ($temp > 10)
                    <p style="font-style: italic;">Un clima templado. Tal vez una chaqueta ligera sea suficiente.</p>
                @else
                    <p style="font-style: italic;">Hace frío. ¡Abrígate bien!</p>
                @endif
            </div>
        @else
            <p>Por favor, ingresa el nombre de una ciudad para consultar el clima.</p>
        @endisset

        @if($errors->any())
            <div class="alert alert-danger mt-4">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </div>
@endsection


