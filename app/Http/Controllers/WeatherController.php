<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function showWeather(Request $request)
    {
        // Obtener el nombre de la ciudad desde el formulario
        $city = $request->input('city', 'Yajalon');

        // Si no se ingresa una ciudad, redirigir con un mensaje de error
        if (!$city) {
            return back()->withErrors(['error' => 'Por favor, ingresa una ciudad']);
        }

        // Aquí está la API key directamente en el controlador
        $apiKey = 'b7b4e018090eeb81bda36be6426945f7'; // Tu clave de API de OpenWeather

        // Realizar la solicitud a la API de OpenWeather
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather", [
            'q' => $city,        // Nombre de la ciudad
            'appid' => $apiKey,  // API Key
            'units' => 'metric', // Unidades en grados Celsius
            'lang' => 'es',      // Idioma en español
        ]);

        // Verificar si la respuesta es exitosa
        if ($response->successful()) {
            // Convertir la respuesta en formato JSON
            $weatherData = $response->json();

            // Pasar los datos a la vista
            return view('weather.show', compact('weatherData'));
        }

        // Si hubo un error en la solicitud o no se encontró la ciudad, devolver un mensaje de error
        return back()->withErrors(['error' => 'No se pudo obtener el clima para la ciudad especificada.']);
    }
}


