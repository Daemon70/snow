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
            'customerName' => 'required|max:255',
            'customerLastName' => 'required|max:255',
            'phoneNumber' => 'required|numeric',
            'street' => 'required|max:255',
            'crossStreet' => 'required|max:255',
            'neighborhood' => 'required|max:255',
        ], [
            'customerName.required' => 'El nombre del cliente es obligatorio.',
            'customerLastName.required' => 'Los apellidos son obligatorios.',
            'phoneNumber.required' => 'El número de teléfono es obligatorio.',
            'street.required' => 'La calle es obligatoria.',
            'crossStreet.required' => 'La calle cruzada es obligatoria.',
            'neighborhood.required' => 'La colonia es obligatoria.',
        ]);

        $pedido = new Pedido;
        $pedido->customerName = $request->customerName;
        $pedido->customerLastName = $request->customerLastName;
        $pedido->phoneNumber = $request->phoneNumber;
        $pedido->street = $request->street;
        $pedido->crossStreet = $request->crossStreet;
        $pedido->neighborhood = $request->neighborhood;
        $pedido->save();

        return redirect(route('pedido.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        return view('pedidos.show')->with(compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedido $pedido)
    {
        return view('pedidos.edit')->with(compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedido $pedido)
    {
        $validated = $request->validate([
            'customerName' => 'required|max:255',
            'customerLastName' => 'required|max:255',
            'phoneNumber' => 'required|numeric',
            'street' => 'required|max:255',
            'crossStreet' => 'required|max:255',
            'neighborhood' => 'required|max:255',
        ]);

        $pedido->customerName = $request->customerName;
        $pedido->customerLastName = $request->customerLastName;
        $pedido->phoneNumber = $request->phoneNumber;
        $pedido->street = $request->street;
        $pedido->crossStreet = $request->crossStreet;
        $pedido->neighborhood = $request->neighborhood;
        $pedido->save();

        return redirect()->route('pedido.index')->with('success', 'Pedido modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        $pedido->delete();
        return redirect()->route('pedido.index')->with('success', 'Pedido eliminado correctamente');
    }
}
