@extends('layout.master') 
@section('titulo', 'INVENTARIO TUUL') 
@section('contenido')
    <div id="blancosTuul"> <!-- INICIO DE VUE-->
        <div class="container">
            <div class="container-header">
                
                <h3>Tabla de Blancos del Hotel Tuul</h3>

            </div>
            <br><br>
            <div class="container-body">
                    <table class="table table-responsive">
                        <thead class="thead-dark">
                            <tr>
                                <th>id_nuevo</th>
                                <th>descripcion</th>
                                <th>marca</th>
                                <th>unidad</th>
                                <th>surtido</th>
                                <th>total</th>
                                <th>observaciones</th>
                                <th>operaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="blanco in blancos">
                                <td>@{{blanco.id_nuevo}}</td>
                                <td>@{{blanco.descripcion}}</td>
                                <td>@{{blanco.marca}</td>
                                <td>@{{blanco.unidad}}</td>
                                <td>@{{blanco.surtido}}</td>
                                <td>@{{blanco.total}}</td>
                                <td>@{{blanco.observaciones}}</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
            </div>

        </div>

    </div> <!--FIN DE VUE-->
@endsection

@push('scripts')
<script src="js/tuul/blancos.js"></script>
@endpush