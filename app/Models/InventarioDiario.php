<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventarioDiario extends Model
{
    use HasFactory;
    protected $table='inventario_diario';

    protected $primaryKey='folio';

    public $incrementing=true;

    public $timestamps=false;

    protected $fillable=[
        'folio',
        'lugar',
        'producto',
        'unidad',
        'cantidad'
    ];
}
