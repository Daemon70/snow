<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_cliente',   // Nombre del cliente
        'apellido_cliente', // Apellidos del cliente
        'telefono',         // Número de teléfono
        'calle',            // Calle
        'calle_cruzada',    // Calle cruzada
        'colonia',          // Colonia
    ];
}

