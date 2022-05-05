<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlancoTuul extends Model
{
     //Nombre de la tabla
     protected $table='blancos_tuul';

     //Clave primaria
     protected $primaryKey='id_blancos3';
 
     //Clave primari numerica y etiquetas de tiempo
     public $incrementing=true;
     public $timestamps=true;
 
     //Campos de la tabla
     protected $fillable=[
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
