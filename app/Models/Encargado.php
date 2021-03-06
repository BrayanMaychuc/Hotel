<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encargado extends Model
{
    use HasFactory;

    protected $table='encargados';
    protected $primaryKey='id_encargado';


    public $incrementing=true;
    public $timestamps=false;

    protected $fillable=[
        'id_encargado',
        'nombre',
        'cargo',
        'id_blanco'
    ];

}
