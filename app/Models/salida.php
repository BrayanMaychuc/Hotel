<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salida extends Model
{
    use HasFactory;

    protected $table='salida';
    protected $primaryKey='id';

    protected $with=['encargado'];

    public $incrementing=true;
    public $timestamps=false;

    protected $fillable=[
        'id',
        'producto',
        'cantidad',
        'restante',
        'fecha',
        'id_encargado',

    ];

    public function encargado(){
        return $this->belongsTo(Encargado::class, 'id_encargado', 'id_encargado');
    }
}
