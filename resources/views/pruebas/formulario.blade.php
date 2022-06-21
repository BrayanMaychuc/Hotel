@extends('layout.master') 
@section('titulo', 'INVENTARIO TUUL') 
@section('contenido')
<div id="inventarios">
 <div class="container">

    <div class="card-body" style="background-color: rgb(31, 47, 60);">
        <div class="card-tittle">
            <h4 style="margin-left: 33%; color: white; font-family: 'Times New Roman', Times, serif;">Registro de Salida de Productos</h4>
            
        </div>
        <div class="row" style="margin-left: 70px;">
            
            <div class="col-md-3" >
                <input type="text" class="form-control"  v-model="id" style="margin: 15px; border-radius:5px;" placeholder="ID">
            </div>
            
            <div class="col-md-5" >
                <input type="text" class="form-control" v-model="producto" style="margin: 15px; border-radius:5px;" placeholder="Producto">
            </div>
            <div class="col-md-3">
                <input type="number" class="form-control" v-model="cantidad" style="margin: 15px; border-radius:5px;" placeholder="Cantidad">
            </div>
            
        </div>
        <div class="row" style="margin-left: 70px;">
            <div class="col-md-3">
                <input type="number" class="form-control" v-model="restante" style="margin: 15px; border-radius:5px;" placeholder="Restante">
            </div>
            <div class="col-md-3">
                <input type="text" class="form-control"  v-model="fecha" style="margin: 15px; border-radius:5px;" placeholder="Fecha">
            </div>
            <div class="col-md-3">
                <select style="margin: 15px; border-radius:5px;" v-model="id_encargado" class="form-control">
                <option v-for="encargado in encargados" v-bind:value="encargado.id_encargado">@{{encargado.nombre}}</option>
                </select>
            </div>
            
        </div>
        <div class="row" style="margin-left: 70px;">
            <div class="col-md-5">
                <input type="text" class="form-control"  v-model="observacion" style="margin: 15px; border-radius:5px;" placeholder="Observaciones">
            </div>
        </div>
        <footer>
            <button class="btn btn-success" @click="guardarSalida()" style="margin-left: 40px; border-radius: 15px;"><i class="bi bi-check-circle"></i></button>   
        </footer>
    </div> 

 </div>
</div>
@endsection
@push('scripts')
<script src="js/tuul/inventario.js"></script>
@endpush