@extends('layout.master') 
@section('titulo', 'INVENTARIO TUUL') 
@section('contenido')
<div id="apiTuul">
    <div class="container">
        <div class="container-header" style="margin-left: 50px;">
            <h3>Tabla de Blancos Nuevos</h3>
        </div><br>  
        <div class="col-md-6" style="margin-left: 50px;">
            <input type="text" class="form-control" placeholder="Buscar por nombre" v-model="find" @click="findInv()" aria-describedby="basic-addon2">
          </div><br><br>
        <br>
        <div class="container-fluid" style="margin-left: 25px;">
            <table class="table table-responsive" >
                <thead class="thead-dark">
                    <tr>
                        <th>id</th>
                        <th>Descripcion</th>
                        <th>Marca</th>
                        <th>Unidad</th>
                        <th>Cantidad</th>
                        <th>Surtido</th>
                        <th>Total</th>
                        <th>Fecha de entrada</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="blanco in blancos">
                        <td>@{{blanco.id_blancoN}}</td>
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
        </div>
    </div>

</div>
        

@endsection

@push('scripts')
<script src="js/apis/apiTuul.js"></script>
@endpush