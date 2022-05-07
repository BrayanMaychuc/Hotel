<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Datos_Encargado;
use App\Models\BlancoTuul;

class InventariosTuul extends Model
{
    protected $table = 'inventarios_tuul';
    protected $primaryKey = 'id_inventario';

    protected $with=['datos_encargado','BlancoTuul'];

    public $incrementing=true;
    public $timestamps=false;

    protected $fillable=[
        'id_inventario',
        'folio',
        'id_blancos3'
    ];

    public function datos_encargado(){
        return $this->belongsTo(Datos_Encargado::class, 'folio', 'folio');
    }
    public function BlancoTuul(){
        return $this->belongsTo(BlancoTuul::class,'id_blancos3','id_blancos3');
    }
}
   
