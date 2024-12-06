<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class YouTubeController extends Controller
{
    public function search(Request $request)
    {
        // Obtener la consulta de búsqueda desde el formulario
        $query = $request->input('query');

        // Si no se ingresó ninguna consulta, mostrar la página sin resultados
        if (!$query) {
            return view('youtube.search');
        }

        // Configurar la clave de API de YouTube
        $apiKey = 'AIzaSyCEs829x978oGRsvTKjE-XIez577hWfbmY'; // Sustituir por tu API Key

        // Crear la URL para la solicitud
        $url = "https://www.googleapis.com/youtube/v3/search?part=snippet&type=video&q=" . urlencode($query) . "&maxResults=10&key={$apiKey}";

        // Realizar la solicitud HTTP a la API de YouTube
        try {
            $response = Http::get($url);

            // Si la respuesta es exitosa
            if ($response->successful()) {
                // Convertir la respuesta en JSON
                $data = $response->json();

                // Verificar si la respuesta contiene los items (videos)
                if (isset($data['items']) && count($data['items']) > 0) {
                    // Estructurar los datos de los videos
                    $videos = [];
                    foreach ($data['items'] as $item) {
                        $videos[] = [
                            'id' => $item['id']['videoId'],
                            'title' => $item['snippet']['title'],
                            'description' => $item['snippet']['description'],
                            'thumbnail' => $item['snippet']['thumbnails']['high']['url'],
                        ];
                    }

                    // Pasar los videos a la vista
                    return view('youtube.search', ['videos' => $videos]);
                } else {
                    // Si no hay resultados
                    return view('youtube.search', ['error' => 'No se encontraron videos para tu búsqueda.']);
                }
            } else {
                // Si la respuesta no es exitosa, mostrar el error
                $error = $response->json();
                return view('youtube.search', ['error' => $error['error']['message'] ?? 'Hubo un error al realizar la búsqueda.']);
            }
        } catch (\Exception $e) {
            // Si ocurre una excepción (como un error de red), mostrar un mensaje de error
            return view('youtube.search', ['error' => 'Hubo un problema con la conexión. Intenta de nuevo más tarde.']);
        }
    }
}

