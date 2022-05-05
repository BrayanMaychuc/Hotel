<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicoresBar extends Model
{
     //Nombre de la tabla
     protected $table='licores_bar';

     //Clave primaria
     protected $primaryKey='id_licores';
 
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
         'surtir',
         'observaciones'
     ];
}
