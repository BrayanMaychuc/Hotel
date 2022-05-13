@extends('layout.master') 
@section('titulo', 'INVENTARIO TUUL') 
@section('contenido')
<div id="apiTuulInv"> <!--INICIO DE VUE-->
  <div class="col-md-6">
    <input type="text" class="form-control" placeholder="Buscar por nombre" @click="buscarInventario()" v-model="find" aria-describedby="basic-addon2">
  </div><br><br>
  <div class="container">
    <div class="container-fluid">
      <table class="table table-responsive">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Fecha de Elaboracion:</th>
            <th scope="col">Elaborado por:</th>
            <th scope="col">Folio</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="Dato in DatosEncargado">
            <td>@{{Dato.fecha_elaboracion}}</td>
            <td>@{{Dato.elaborado}}</td>
            <td>@{{Dato.folio}}</td>
          </tr>
        </tbody>
      </table>
      <table class="table table-responsive">
        <thead class="thead-dark">
          <tr>
            <th scope="col">descripcion</th>
            <th scope="col">marca</th>
            <th scope="col">unidad</th>
            <th scope="col">stock</th>            
            <th scope="col">piso</th>
            <th scope="col">surtido</th>
            <th scope="col">total</th>
            <th scope="col">observaciones</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="blanco in blancosTuul">
            <td>@{{blanco.descripcion}}</td>
            <td>@{{blanco.marca}}</td>
            <td>@{{blanco.unidad}}</td>
            <td>@{{blanco.stock}}</td>
            <td>@{{blanco.piso}}</td>
            <td>@{{blanco.surtido}}</td>
            <td>@{{blanco.total}}</td>
            <td>@{{blanco.observaciones}}</td>
            <td>
              <button class="btn btn-secondary" @click="editarProductos()"><i class="bi bi-pencil-square"></i></button>
              <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>  
  </div>
</div><!-- FIN DE VUE-->
@endsection

@push('scripts')
<script type="text/javascript" src="js/apis/apiTuulInv.js"></script>
@endpush