@extends('layout.master') 
@section('titulo', 'INVENTARIO TUUL') 
@section('contenido')
<div id="inventarios">
    <div class="container">
        <div class="container-head">
            <h3 style="font-family: 'Times New Roman', Times, serif; margin-left: 25%;">Control de Hotel Tuul</h3>
        </div>
        <br><br>
        <div class="container-head">
            <h3 style="font-family: 'Times New Roman', Times, serif; margin-left: 25%;"> Salidas</h3>
        </div>
        <div class="container-body">
            <table class="table table-responsive">
                <thead style="background-color: lightblue;">
                    <tr style="text-align: center;">
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Restante</th>
                        <th>Fecha</th>
                        <th>Autorizado</th>
                        <th>Observaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="sal in salidas" style="text-align: center;">
                        <td>@{{sal.id}}</td>
                        <td>@{{sal.producto}}</td>
                        <td>@{{sal.cantidad}}</td>
                        <td>@{{sal.restante}}</td>
                        <td>@{{sal.fecha}}</td>
                        <td>@{{sal.encargado.nombre}}</td>
                        <td>@{{sal.observacion}}</td>
                    </tr>
                </tbody>
            </table>
            <nav aria-label="Page navigation example" style="margin-left: 300px;">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
            </nav>
        </div><br><br>
        <div class="container-head">
            <h3 style="font-family: 'Times New Roman', Times, serif; margin-left: 25%;"> Entradas</h3>
        </div>
        <br>
        <div class="container-body" >
            <table class="table table-responsive">
                <thead style="background-color: lightblue;">
                    <tr style="text-align: center;">
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Descripcion</th>
                        <th>Unidad</th>
                        <th>Cantidad</th>
                        <th>Observacion</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="entrada in entradas" style="text-align: center;">
                        <td>@{{entrada.id_entrada}}</td>
                        <td>@{{entrada.fecha}}</td>
                        <td>@{{entrada.descripcion}}</td>
                        <td>@{{entrada.unidad}}</td>
                        <td>@{{entrada.cantidad}}</td>
                        <td>@{{entrada.observacion}}</td>
                    
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="js/tuul/inventario.js"></script>
@endpush
