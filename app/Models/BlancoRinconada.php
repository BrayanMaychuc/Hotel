<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlancoRinconada extends Model
{
    //Nombre de la tabla
    protected $table='blancos_rinconada';

    //Clave primaria
    protected $primaryKey='id_blancos';

    //Clave primari numerica y etiquetas de tiempo
    public $incrementing=true;
    public $timestamps=true;

    //Campos de la tabla
    protected $fillable=[
        'folio',
        'elaborado_por',
        'fecha_elaboracion',
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
