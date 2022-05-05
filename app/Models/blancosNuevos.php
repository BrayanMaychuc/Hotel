<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blancosNuevos extends Model
{
    protected $table = 'blancos_nuevos';
    protected $primaryKey = 'id_blancoN';

    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'id_blancoN',
        'descripcion',
        'marca',
        'unidad',
        'cantidad',
        'surtido',
        'total',
        'fecha_entrada'
    ];
}
