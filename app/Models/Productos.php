<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $table='productos';
    protected $primaryKey='id_producto';

    public $incrementing=true;
    public $timestamps=false;

    protected $fillable= [
        'id_producto',
        'nombre',
        'unidad',
        'cantidad'
    ];
}
