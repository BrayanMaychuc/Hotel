@extends('layout.master') 
@section('titulo', 'INVENTARIO TUUL') 
@section('contenido')
<!-- INICIO DE VUE-->
<div id="cubiertosTuul">

    <div class="container">
        <div class="container-header">
            <h3>Tabla de Cubiertos del Hotel Tuul</h3>
        </div>
        <br><br>
        <div class="container-body">
            <table class=" table table-responsive">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Existencia</th>
                        <th>Total</th>
                        <th>Observacion</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="cubierto in cubiertos">
                        <td>@{{cubierto.id_cubierto}}</td>
                        <td>@{{cubierto.nombre}}</td>
                        <td>@{{cubierto.existencia}}</td>
                        <td>@{{cubierto.total}}</td>
                        <td>@{{cubierto.observacion}}</td>
                        <td>
                            <button class="btn" style="border-color: black; border-radius: 5px; background-color: aqua;" @click="">Editar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- FIN DE VUE -->

@endsection

@push('scripts')
<script src="js/tuul/cubiertos.js"></script>
@endpush