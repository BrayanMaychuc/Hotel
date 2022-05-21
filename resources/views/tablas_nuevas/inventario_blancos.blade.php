@extends('layout.master') 
@section('titulo', 'INVENTARIO TUUL') 
@section('contenido')
<!-- INICIO DE VUE-->
<div id="blancosTuul">

    <div class="container">
        <div class="container-header">
            <h3>Tabla de Blancos del Hotel Tuul</h3>
        </div> <br>
        <div>
        <button class="btn btn-primary" @click="ventana()">Agregar</button>
        </div>
        
        <br><br>
        <div class="container-body">
            <table class=" table table-responsive">
                <thead class="thead-dark">
                    <tr>
                        
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
                        
                        <td>@{{blanco.descripcion}}</td>
                        <td>@{{blanco.marca}}</td>
                        <td>@{{blanco.unidad}}</td>
                        <td>@{{blanco.stock}}</td>
                        <td>@{{blanco.piso}}</td>
                        <td>@{{blanco.surtido}}</td>
                        <td>@{{blanco.total}}</td>
                        <td>@{{blanco.observaciones}}</td>
                        <td>
                            <button class="btn btn-warning" @click="editarBlancos(blanco.id_blanco)">Editar</button>
                            <button class="btn btn-danger" @click="eliminarBlanco(blanco.id_blanco)">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

                    <!-- INICIO DE LA VENTANA MODAL  -->
                    <div class="modal fade" id="modalTuul" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal guardar</h5>
                              <h5 class="modal-title" id="exampleModalLabel" v-if="editando==1">Modal</h5>
              
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
              
                              <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon2">Descripcion</span>
                                <input type="text" class="form-control" placeholder="Descripcion" aria-label="Recipient's username" v-model="descripcion" aria-describedby="basic-addon2">
                                
                              </div>
                              <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon2">Marca</span>
                                <input type="text" class="form-control" placeholder="Esriba su Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2" v-model="marca">
                                

                                <span class="input-group-text" id="basic-addon2">Unidad</span>
                                <input type="text" class="form-control" placeholder="Unidad" aria-label="Recipient's username" aria-describedby="basic-addon2" v-model="unidad">
                                
                              </div>
                              <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon2">Stock</span>
                                <input type="number" class="form-control" placeholder="Stock" v-model="stock" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                

                                <span class="input-group-text" id="basic-addon2">Piso</span>
                                <input type="text" class="form-control" placeholder="Piso" v-model="piso" aria-label="Recipient's username" aria-describedby="basic-addon2">

                              </div>
                              <div class="input-group mb-3">
                                <input type="number" class="form-control" placeholder="Ingrese cantidad" v-model="surtido" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">Surtido</span>
                                
                                <input type="number" class="form-control" placeholder="Inserte Cantidad" v-model="total" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">Total</span>
                              </div>
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Observaciones" v-model="observaciones" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">Observaciones</span>
                                
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary" @click="agregarBlanco()">Guardar</button>
                              <button type="button" class="btn btn-primary" @click="actualizar()">Actualizar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- FIN DE LA VENTANA MODAL -->

</div>
<!-- FIN DE VUE -->

@endsection

@push('scripts')
<script src="js/tuul/blancosT.js"></script>
@endpush