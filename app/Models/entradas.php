<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entradas extends Model
{
    use HasFactory;

    protected $table='entradas';
    protected $primaryKey='id_entrada';

    public $incrementing=true;
    public $timestamps=false;

    public $fillable=[
        'id_entrada',
        'fecha',
        'descripcion',
        'unidad',
        'cantidad',
        'observacion'
    ];
}
