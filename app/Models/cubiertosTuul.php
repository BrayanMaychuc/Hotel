<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cubiertosTuul extends Model
{
    use HasFactory;

    protected $table='cubiertos_t';

    protected $primaryKey='id_cubierto';

    public $incrementing=true;

    public $timestamps=false;

    protected $fillable=[
        'id_cubierto',
        'nombre',
        'existencia',
        'total',
        'observacion'
    ];
}
