<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.index')->with(compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pedidos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre_cliente' => 'required|max:255',
            'apellido_cliente' => 'required|max:255',
            'telefono' => 'required|numeric',
            'calle' => 'required|max:255',
            'calle_cruzada' => 'required|max:255',
            'colonia' => 'required|max:255',
        ], [
            'nombre_cliente.required' => 'El nombre del cliente es obligatorio.',
            'apellido_cliente.required' => 'Los apellidos son obligatorios.',
            'telefono.required' => 'El número de teléfono es obligatorio.',
            'calle.required' => 'La calle es obligatoria.',
            'calle_cruzada.required' => 'La calle cruzada es obligatoria.',
            'colonia.required' => 'La colonia es obligatoria.',
        ]);

        $pedido = new Pedido;
        $pedido->nombre_cliente = $request->nombre_cliente;
        $pedido->apellido_cliente = $request->apellido_cliente;
        $pedido->telefono = $request->telefono;
        $pedido->calle = $request->calle;
        $pedido->calle_cruzada = $request->calle_cruzada;
        $pedido->colonia = $request->colonia;
        $pedido->save();

        return redirect(route('pedido.index'));
    }

    // Los métodos show, edit, update y destroy se pueden ajustar de manera similar
}


