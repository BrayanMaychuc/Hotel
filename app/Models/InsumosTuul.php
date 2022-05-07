<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsumosTuul extends Model{
    protected $table='insumos_tuul';
    protected $primaryKey='id_insumo';

    public $incrementing=true;

    public $timestamps=false;

    protected $fillable=[
        'id_insumo',
        'nombre',
        'unidad',
        'cantidad'
    ];
    
}
