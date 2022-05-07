<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datos_Encargado extends Model
{
    protected $table='datos_encargado';
    protected $primaryKey='folio';

    public $incrementing=true;

    public $timestamps=false;

    protected $fillable=[
        'folio',
        'elaborado',
        'fecha_elaboracion'
    ];
}
