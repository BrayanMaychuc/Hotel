@extends('layout.master') 
@section('titulo', 'INVENTARIO TUUL') 
@section('contenido')
    <!-- INICIO DE VUE -->
    <div id="tuul">
        <div class="container">
            <div class="container-header">
                <h4>Lista Inventario Diario</h4>
            </div> <br><br>
            <div class="card-deck">
                <table class=" table table-responsive">
                    <thead class="thead-dark">
                        <tr>
                            <th>Folio</th>
                            <th>Lugar</th>
                            <th>Producto</th>
                            <th>Unidad</th>
                            <th>Cantidad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="diario in diarios">
                            <td>@{{diario.folio}}</td>
                            <td>@{{diario.lugar}}</td>
                            <td>@{{diario.producto}}</td>
                            <td>@{{diario.unidad}}</td>
                            <td>@{{diario.cantidad}}</td>
                            <td>
                                <button class="btn" style="border-color: black; border-radius: 5px; background-color: aqua;" @click="editarLista()">Editar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>


                <!--INICIO DE VENTANA PARA EDITAR  -->

                <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <input type="text" placeholder="id" v-model="folio">
                          <input type="text" placeholder="lugar" v-model="lugar">
                          <input type="text" placeholder="producto" v-model="producto">
                          <input type="text" placeholder="unidad" v-model="unidad">
                          <input type="text" placeholder="cantidad" v-model="cantidad">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>

                <!-- FIN DE VENTANA MODAL -->
    </div>
    <!-- FIN DE VUE -->
@endsection

@push('scripts')
<script src="js/tuul/tuul.js"></script>
@endpush