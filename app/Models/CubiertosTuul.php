<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CubiertosTuul extends Model
{
    //Nombre de la tabla
    protected $table='cubiertos_tuul';

    //Clave primaria
    protected $primaryKey='id_tuul';

    //Clave primari numerica y etiquetas de tiempo
    public $incrementing=true;
    public $timestamps=false;

    //Campos de la tabla
    protected $fillable=[
        'id_tuul',
        'descripcion',
        'existencia',
        'surtido',
        'total',
        'status',
        'observacion',
        'fecha_elaboracion'
    ];
}
