@extends('layout.master') 
@section('titulo', 'INVENTARIO TUUL') 
@section('contenido')
<div id="inventarios">
    <div class="container">
        <div class="card-body" style="background-color: rgb(31, 47, 60);">
            <div class="card-tittle">
                <h4 style="margin-left: 33%; color: white; font-family: 'Times New Roman', Times, serif;">Alta de Productos</h4>
            </div>
            <div class="row" style="margin-left: 120px;">
                <div class="col-md-3">
                    <input type="text" class="form-control"  v-model="id_producto" style="margin: 15px; border-radius:5px;" placeholder="ID">
                </div>
                <div class="col-md-3" >
                    <input type="text" class="form-control"  v-model="nombre" style="margin: 15px; border-radius:5px;" placeholder="Nombre">
                </div>
                
            </div>
            <div class="row" style="margin-left: 120px;">
                <div class="col-md-3" >
                    <input type="text" class="form-control" v-model="unidad" style="margin: 15px; border-radius:5px;" placeholder="Unidad">
                </div>
                <div class="col-md-3">
                    <input type="number" class="form-control" v-model="cantidad" style="margin: 15px; border-radius:5px;" placeholder="Cantidad">
                </div>
            </div>
            <footer>
                <button class="btn btn-success" @click="guardar()"style="margin-left: 70px; border-radius: 15px;"><i class="bi bi-check-circle"></i></button>
            </footer>

        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="js/tuul/inventario.js"></script>
@endpush