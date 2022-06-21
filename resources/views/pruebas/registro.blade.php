@extends('layout.master') 
@section('titulo', 'INVENTARIO TUUL') 
@section('contenido')
<div id="inventarios">
 <div class="container">

    <div class="card-body" style="background-color: rgb(31, 47, 60);">
        <div class="card-tittle">
            <h4 style="margin-left: 33%; color: white; font-family: 'Times New Roman', Times, serif;">Registro de Productos</h4>
            
        </div>
        <div class="row">
            
            <div class="col">
                <input type="text" class="form-control"  v-model="id_salida" style="margin: 15px; border-radius:5px;" placeholder="ID">
            </div>
            <div class="col" >
                <input type="text" class="form-control" v-model="nombre" style="margin: 15px; border-radius:5px;" placeholder="nombre">
            </div>
            <div class="col">
                <input type="text" class="form-control" v-model="unidad" style="margin: 15px; border-radius:5px;" placeholder="unidad">
            </div>
            <div class="col">
                <input type="number" class="form-control" v-model="cantidad" style="margin: 15px; border-radius:5px;" placeholder="Cantidad">
            </div>
            
        </div>
        <footer>
            <button class="btn btn-success" @click="guardar()" style="margin-left: 15px;">Agregar</button>   
        </footer>
    </div> 

 </div>
</div>
@endsection
@push('scripts')
<script src="js/tuul/registro.js"></script>
@endpush