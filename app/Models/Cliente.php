<?php

// app/Models/Cliente.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'dni',
        'edad',
        'distrito',
        'telefono',
        'od_lejos_esfera',
        'od_lejos_cilindro',
        'od_lejos_eje',
        'od_cerca_add',
        'oi_lejos_esfera',
        'oi_lejos_cilindro',
        'oi_lejos_eje',
        'oi_cerca_add',
        'dip_lejos',
        'dip_cerca',
    ];

    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }
}
