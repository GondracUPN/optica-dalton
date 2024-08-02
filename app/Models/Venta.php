<?php

// app/Models/Venta.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'producto',
        'precio',
        'descripcion',
        'fecha_venta',
        'monto_total',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
