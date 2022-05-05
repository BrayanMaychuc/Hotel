@extends('layout.master') 
@section('titulo', 'INVENTARIO TUUL') 
@section('contenido')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="apiTuulInv">
  <div class="container">
    <div class="container-header">
      <h3><b>Inventario de Blancos del TUUL</b></h3>
      
    </div> <br><br>
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Buscar por nombre" aria-describedby="basic-addon2">
      <button class="btn btn-sm" style="background-color: skyblue;" @click="showModal()">Nuevo Inventario</button>
      <button class="btn btn-sm" style="background-color: azure;">Lista de Inventarios</button>
      <button class="btn btn-sm" style="background-color: azure;"></button>
    </div>
    
    
    
      <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">id blanco</th>
              <th scope="col">folio</th>
              <th scope="col">elaborado</th>
              <th scope="col">fecha de elaboracion</th>
              <th scope="col">descripcion</th>
              <th scope="col">marca</th>
              <th scope="col">unidad</th>
              <th scope="col">stock</th>            
              <th scope="col">piso</th>
              <th scope="col">surtido</th>
              <th scope="col">total</th>
              <th scope="col">observaciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"></th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          
          </tbody>
        </table>
  </div>    
   
  <!-- INICIO DE LA VENTANA MODAL PARA NUEVO INVENTARIO -->
  <div class="modal fade" id="modalInventario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
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
                  
                  
              </div>
      
              <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1"><b>Fecha de Elaboracion</b></span>
                  <input type="date" class="col-md-4 form-control" placeholder="Inserte la Fecha" aria-label="Username" aria-describedby="basic-addon1">
                  
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
              
            </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" @click="addElements()">Guardar</button>
        </div>
      </div>
    </div>
  </div>      
</div>    
</body>
</html>
@endsection 
@push('scripts')
<script type="text/javascript" src="js/apis/apiTuulInv.js"></script>
@endpush