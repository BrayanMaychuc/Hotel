<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CubiertosBar extends Model
{
     //Nombre de la tabla
     protected $table='cubiertos_bar';

     //Clave primaria
     protected $primaryKey='id_cubiertoB';
 
     //Clave primari numerica y etiquetas de tiempo
     public $incrementing=true;
     public $timestamps=true;
 
     //Campos de la tabla
     protected $fillable=[
         'folio',
         'elaborado_por',
         'fecha_elaboracion',
         'descripcion',
         'exitencia',
         'total',
         'de_baja',
         'observaciones'
     ];
}
