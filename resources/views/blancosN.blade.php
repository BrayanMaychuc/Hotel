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
<div id="apiTuul"> <!--INICIO DE VUE-->
  <div class="container"> <!--INICIO DE CONTAINER-->
    <div class="container-header">
      <h3><b>Inventario de Blancos Nuevos</b></h3>
    </div> <br><br>
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Buscar por nombre" aria-describedby="basic-addon2">
      <button class="btn btn-sm" style="background-color: skyblue;" @click="showModal()">Nuevo Inventario</button>
      <button class="btn btn-sm" style="background-color: azure;">Lista de Inventarios</button>
      <button class="btn btn-sm" style="background-color: azure;"></button>
    </div>
      <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
              <th scope="col">id blanco</th>
              <th scope="col">descripcion</th>
              <th scope="col">marca</th>
              <th scope="col">unidad</th>
              <th scope="col">cantidad</th>
              <th scope="col">surtido</th>
              <th scope="col">total</th>
              <th scope="col">fecha de entrada</th>
            </tr>
          </thead>
          <tbody>
          <tr v-for="blanco in blancos">
              <th scope="row">@{{blanco.id_blancoN}}</th>
              <td>@{{blanco.descripcion}}</td>
              <td>@{{blanco.marca}}</td>
              <td>@{{blanco.unidad}}</td>
              <td>@{{blanco.cantidad}}</td>
              <td>@{{blanco.surtido}}</td>
              <td>@{{blanco.total}}</td>
              <td>@{{blanco.fecha_entrada}}</td>
            </tr>
          </tbody>
        </table>
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
                    <span class="input-group-text" id="basic-addon1" ><b>Descripcion</b></span>
                    <input type="text" class="col-md-4 form-control" v-model="descripcion" placeholder="Inserte una descripcion" aria-label="Username" aria-describedby="basic-addon1">
                  <div class="col-md"></div>
                    <span class="input-group-text" id="basic-addon1" ><b>Marca</b></span>
                    <input type="text" class="col-md-3 form-control" placeholder="Marca" v-model="marca" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
    
                  <div class="input-group mb-3">
                  
                    <span class="input-group-text" id="basic-addon1" ><b>Unidad</b></span>
                    <input type="number" class="col-md-3 form-control" placeholder="Inserte el numero de unidades" v-model="unidad" aria-label="Username" aria-describedby="basic-addon1">
                    <span class="input-group-text" id="basic-addon1" ><b>Cantidad</b></span>
                    <input type="text" class="col-md-6 form-control" placeholder="Agregar Cantidades" v-model="cantidad" aria-label="Username" aria-describedby="basic-addon1">

                  </div>
      
                <div class="input-group mb-3">
                  

                  <span class="input-group-text" id="basic-addon1"><b>Surtido </b></span>
                  <input type="text" class="col-md-4 form-control" placeholder="" v-model="surtido" aria-label="Username" aria-describedby="basic-addon1">
      
                  <span class="input-group-text" id="basic-addon1" ><b>Total</b></span>
                  <input type="number" class="col-md-4 form-control" placeholder="Introduzca Cantidad" v-model="total" aria-label="Username" aria-describedby="basic-addon1">
                  
                  <span class="input-group-text" id="basic-addon1" ><b>Fecha de Entrega</b></span>
                  <input type="date" class="col-md-8 form-control" placeholder="Escriba una Fecha" v-model="fecha_entrega" aria-label="Username" aria-describedby="basic-addon1">
                  
                </div>
            </div>
          </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" @click="addElements()">Guardar</button>
            </div>
        </div> <!--FIN DE VENTANA MODAL-->
      </div>
    </div>
  </div><!--FIN DE CONTAINER-->
</div>    <!--FIN DE VUE-->
      
    
</body>
</html>
@endsection 
@push('scripts')
<script type="text/javascript" src="js/apis/apiTuul.js"></script>

@endpush