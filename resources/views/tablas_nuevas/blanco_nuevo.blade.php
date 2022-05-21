@extends('layout.master') 
@section('titulo', 'INVENTARIO TUUL') 
@section('contenido')
    <div id="blancosTuul"> <!-- INICIO DE VUE-->
        <div class="container">
            <div class="container-header">
                
                <h3>Tabla de Blancos del Hotel Tuul</h3>

            </div><br>
            <div>
                <button class="btn btn-primary" @click="showModal()"><i class="bi bi-plus-square-fill"></i></button>
            </div>
            <br><br>

            <div class="container-body">
                    <table class="table table-responsive">
                        <thead style="background-color: rgba(239, 207, 64, 0.819);">
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
                                <td>
                                  <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                                  <button class="btn btn-danger"><i class="bi bi-file-earmark-x-fill"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>

        </div>

        <!-- INICIO DE VENTANA MODAL -->
        <div class="modal fade" id="modalBlancosNuevos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel" v-if="agregando==true">Modal guardar</h5>
                  <h5 class="modal-title" id="exampleModalLabel" v-if="agregando==false">Modal</h5>
  
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
  
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre del producto" aria-label="Recipient's username" v-model="folio" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">Descripcion</span>
                  </div>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Esriba su nombre" aria-label="Recipient's username" aria-describedby="basic-addon2" v-model="lugar">
                    <span class="input-group-text" id="basic-addon2">Marca</span>
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Unidad</span>
                    <input type="number" class="form-control" v-model="producto" id="basic-url" aria-describedby="basic-addon3">
                  </div>
                  
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="Inserte Cantidad" v-model="unidad" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">Surtido</span>
                    
                    <input type="number" class="form-control" placeholder="Inserte Total" v-model="cantidad" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">Total</span>
                  </div>

                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="observaciones" v-model="cantidad" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">Observacion</span>
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

    </div> <!--FIN DE VUE-->
@endsection

@push('scripts')
<script src="js/tuul/blancos.js"></script>
@endpush