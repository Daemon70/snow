<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TwitterController extends Controller
{
    public function searchUsers(Request $request)
    {
        // Obtener el término de búsqueda del formulario
        $query = $request->input('query');
        
        // Asegúrate de que tienes un Bearer Token válido
        $bearerToken = env('TWITTER_BEARER_TOKEN');

        // Realizar la solicitud a la API de Twitter para buscar usuarios
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
        ])->get('https://api.twitter.com/2/users/by', [
            'usernames' => $query, // Pasamos el nombre de usuario como parámetro
        ]);

        // Verifica el estado HTTP de la respuesta
        if ($response->failed()) {
            // Si la solicitud falló (código de estado 4xx o 5xx)
            dd('Error en la solicitud a la API de Twitter: ' . $response->status(), $response->body());
        }

        // Verificar si el cuerpo de la respuesta es JSON
        $jsonResponse = $response->json();

        // Verifica si el JSON está vacío o si no tiene la información esperada
        if (is_null($jsonResponse) || !isset($jsonResponse['data'])) {
            dd('Respuesta inesperada de la API de Twitter: ' . $response->body());
        }

        // Si todo está bien, procesar la respuesta
        $users = $jsonResponse['data'];

        // Verifica si la respuesta contiene datos
        if (isset($users) && count($users) > 0) {
            return view('twitter.search', compact('users', 'query'));
        } else {
            $errorMessage = "No se encontraron usuarios para la búsqueda.";
            return view('twitter.search', compact('errorMessage', 'query'));
        }
    }
}







