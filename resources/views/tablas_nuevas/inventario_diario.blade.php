@extends('layout.master') 
@section('titulo', 'INVENTARIO TUUL') 
@section('contenido')
    <!-- INICIO DE VUE -->
    <div id="tuul">
        <div class="container">
            <div class="container-header">
                <h4>Lista Inventario Diario</h4>
            </div><br>
            <div>
              <button class="btn btn-primary" @click="mostrarModal()"><i class="bi bi-plus-square-fill"></i></button>
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
                                <button class="btn btn-warning" style="border-color: black; border-radius: 5px;" @click="editarLista(diario.folio)"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger" style="border-color: black; border-radius: 5px" @click="deleteProduct(diario.folio)"><i class="bi bi-file-earmark-x-fill"></i></button>
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
                <h5 class="modal-title" id="exampleModalLabel" v-if="agregando==true">Modal guardar</h5>
                <h5 class="modal-title" id="exampleModalLabel" v-if="agregando==false">Modal</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Folio" aria-label="Recipient's username" v-model="folio" aria-describedby="basic-addon2">
                  <span class="input-group-text" id="basic-addon2">Folio</span>
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Esriba el nombre del hotel" aria-label="Recipient's username" aria-describedby="basic-addon2" v-model="lugar">
                  <span class="input-group-text" id="basic-addon2">Lugar</span>
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Nombre del Producto" v-model="producto" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <span class="input-group-text" id="basic-addon2">Producto</span>
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Unidad de Medida" v-model="unidad" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <span class="input-group-text" id="basic-addon2">Unidad</span>
                  
                  <input type="number" class="form-control" placeholder="Inserte Cantidad" v-model="cantidad" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <span class="input-group-text" id="basic-addon2">Cantidad</span>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" v-if="agregando==true" @click="guardarLista()">Guardar</button>
                <button type="button" class="btn btn-primary" v-if="agregando==false" @click="actualizarDatos()">Actualizar</button>
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