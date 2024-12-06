<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController; // Asegúrate de que este controlador esté importado
use App\Http\Controllers\YouTubeController;
use App\Http\Controllers\TwitterController;
use App\Http\Controllers\WeatherController;

// Páginas estáticas
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/sales', function () {
    return view('sales');
})->name('sales');

Route::get('/delivery-orders', function () {
    return view('delivery-orders');
})->name('delivery-orders');

Route::get('/maps', function () {
    return view('maps');
})->name('maps');

Route::get('/es', function () {
    return view('es');
})->name('es');

Route::get('/recompensas', function () {
    return view('recompensas');
})->name('recompensas');

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('/oferta', function () {
    return view('oferta');
})->name('oferta');

Route::get('/carrito', function () {
    return view('carrito');
})->name('carrito');

Route::get('/end', function () {
    return view('end');
})->name('end');

Route::get('/especial', function () {
    return view('especial');
})->name('especial');

Route::get('/energia', function () {
    return view('energia');
})->name('energia');
// Rutas para los controladores de YouTube y Twitter
Route::get('/youtube/search', [YouTubeController::class, 'search'])->name('youtube.search');
 // Cambié el nombre de la ruta
Route::get('/twitter/search', [TwitterController::class, 'searchUsers'])->name('twitter.search');
// Rutas para el recurso de pedidos
Route::resource('pedido', PedidoController::class); // Esto cubre todas las rutas CRUD de Pedido
Route::get('/weather/show', [WeatherController::class, 'showWeather'])->name('weather.show');






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


