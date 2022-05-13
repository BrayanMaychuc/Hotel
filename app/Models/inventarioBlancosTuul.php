<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventarioBlancosTuul extends Model
{
    use HasFactory;

    protected $table='inventario_blancos';

    protected $primaryKey='id_blanco';

    public $incrementing=true;

    public $timestamps=false;

    protected $fillable=[
        'id_blanco',
        'descripcion',
        'marca',
        'unidad',
        'stock',
        'piso',
        'surtido',
        'total',
        'observaciones'
    ];
}
