<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blancosTuul extends Model
{
    use HasFactory;

    protected $table='blancos_nuevos';

    protected $primaryKey='id_nuevo';

    public $incrementing=true;

    public $timestamps=false;

    protected $fillable=[
        'id_nuevo',
        'descripcion',
        'marca',
        'unidad',
        'surtido',
        'total',
        'observaciones'
    ];
}
