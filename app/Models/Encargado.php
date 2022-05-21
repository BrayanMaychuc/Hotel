<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encargado extends Model
{
    use HasFactory;

    protected $table='encargados';
    protected $primaryKey='id_encargado';

    protected $with=['blancos'];

    public $incrementing=true;
    public $timestamps=false;

    protected $fillable=[
        'id_encargado',
        'nombre',
        'cargo',
        'id_blanco'
    ];

    public function blancos(){
        return $this->hasMany(inventarioBlancosTuul::class, 'id_blanco', 'id_blanco');
    }
}
