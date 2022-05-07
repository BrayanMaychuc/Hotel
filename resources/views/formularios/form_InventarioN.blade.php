@extends('layout.master') 
@section('titulo', 'INVENTARIO TUUL') 
@section('contenido')
<div class="card">
    <div class="card-body">
        <div class="card-header" style="border-radius: 5px; background-color: goldenrod;">
            <h4>Nuevo Inventario</h4>
        </div><br>  
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Folio</b></span>
            <input type="number" class="col-md-8 form-control" placeholder="Inserte el folio" aria-label="Username" aria-describedby="basic-addon1">
                  

            <span class="input-group-text" id="basic-addon1"><b>Elaborado por: </b></span>
            <input type="text" class="col-md-4 form-control" placeholder="Introduzca su nombre" aria-label="Username" aria-describedby="basic-addon1">
                  
            <span class="input-group-text" id="basic-addon1"><b>Fecha de Elaboracion</b></span>
            <input type="date" class="col-md-4 form-control" placeholder="Inserte la Fecha" aria-label="Username" aria-describedby="basic-addon1">
            
        </div>
        <div>
            <button class="btn btn-success" @click="saveName()">Guardar Nombre</button>
        </div><br>
        <div class="input-group mb-3">
            
            <span class="input-group-text" id="basic-addon1"><b>Descripcion</b></span>
            <input type="text" class="col-md-6 form-control" placeholder="Nombre del Producto" aria-label="Username" aria-describedby="basic-addon1">
              
        </div>

        <div class="input-group mb-3">
  
            <span class="input-group-text" id="basic-addon1"><b>Marca</b></span>
            <input type="text" class="col-md-3 form-control" placeholder="Marca" aria-label="Username" aria-describedby="basic-addon1">
                  
            <span class="input-group-text" id="basic-addon1"><b>Unidades</b></span>
            <input type="number" class="col-md-3 form-control" placeholder="Inserte el numero de unidades" aria-label="Username" aria-describedby="basic-addon1">
      
            <span class="input-group-text" id="basic-addon1"><b>Stock</b></span>
            <input type="text" class="col-md-2 form-control" placeholder="Stock Disponible" aria-label="Username" aria-describedby="basic-addon1">
             
        </div>

        <div class="input-group mb-3">
            
            <span class="input-group-text" id="basic-addon1"><b>Piso</b></span>
            <input type="text" class="col-md-6 form-control" placeholder="Inserte Numero de Piso" aria-label="Username" aria-describedby="basic-addon1">

            <span class="input-group-text" id="basic-addon1"><b>Surtido </b></span>
            <input type="text" class="col-md-4 form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">

            <span class="input-group-text" id="basic-addon1"><b>Total</b></span>
            <input type="number" class="col-md-4 form-control" placeholder="Introduzca Cantidad" aria-label="Username" aria-describedby="basic-addon1">
            
            
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Observaciones</b></span>
            <input type="text" class="col-md-8 form-control" placeholder="Observaciones" aria-label="Username" aria-describedby="basic-addon1">
            
        </div>
        <div>
            <button class="btn" style="background-color: rgb(2, 133, 2);">
                <b style="color: white;">Guardar</b>
            </button>
            <button class="btn" style="background-color: rgb(150, 23, 23);">
                <b style="color: white;">Cancelar</b>
            </button>
        </div>
    </div>
</div>
@endsection