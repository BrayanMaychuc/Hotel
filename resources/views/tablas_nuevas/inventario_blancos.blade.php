@extends('layout.master') 
@section('titulo', 'INVENTARIO TUUL') 
@section('contenido')
<!-- INICIO DE VUE-->
<div id="blancosTuul">

    <div class="container">
        <div class="container-header">
            <h3>Tabla de Cubiertos del Hotel Tuul</h3>
        </div>
        <br><br>
        <div class="container-body">
            <table class=" table table-responsive">
                <thead class="thead-dark">
                    <tr>
                        <th>id_blanco</th>
                        <th>Descripcion</th>
                        <th>Marca</th>
                        <th>Unidad</th>
                        <th>Stock</th>
                        <th>Piso</th>
                        <th>Surtido</th>
                        <th>Total</th>
                        <th>Observaciones</th>
                        <th>Operacion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="blanco in blancosT">
                        <td>@{{blanco.id_blanco}}</td>
                        <td>@{{blanco.descripcion}}</td>
                        <td>@{{blanco.marca}}</td>
                        <td>@{{blanco.unidad}}</td>
                        <td>@{{blanco.stock}}</td>
                        <td>@{{blanco.piso}}</td>
                        <td>@{{blanco.surtido}}</td>
                        <td>@{{blanco.total}}</td>
                        <td>@{{blanco.observaciones}}</td>
                        <td>                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- FIN DE VUE -->

@endsection

@push('scripts')
<script src="js/tuul/blancosT.js"></script>
@endpush