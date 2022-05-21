@extends('layout.master') 
@section('titulo', 'INVENTARIO TUUL') 
@section('contenido')
<!-- INICIO DE VUE-->
<div id="cubiertosTuul">

    <div class="container">
        <div class="container-header">
            <h3>Tabla de Cubiertos del Hotel Tuul</h3>
        </div><br>
        <div>
            <button class="btn btn-primary" @click="showModal()"><i class="bi bi-plus-square-fill"></i></button>
        </div>
        <br><br>
        <div class="container-body">
            <table class=" table table-responsive">
                <thead style="background-color: rgba(239, 207, 64, 0.819);">
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
                            <button class="btn btn-warning" style="border-color: black; border-radius: 5px;" @click="editarCubiertos(cubierto.id_cubierto)"><i class="bi bi-pencil-square"></i></button>
                            <button class="btn btn-danger" style="border-color: black; border-radius: 5px;" @click="eliminarCubiertos(cubierto.id_cubierto)"><i class="bi bi-file-earmark-x-fill"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- INICIO DE VENTANA MODAL -->
    <div class="modal fade" id="modalCubierto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel" v-if="editando==0">Modal guardar</h5>
              <h5 class="modal-title" id="exampleModalLabel" v-if="editando==1">Modal</h5>

              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Nombre</span>
                <input type="text" class="form-control" placeholder="Nombre del Cubierto" aria-label="Recipient's username" v-model="nombre" aria-describedby="basic-addon3">
                
              </div>
              <div class="input-group mb-3">
                <input type="number" class="form-control" placeholder="Inserte Cantidad" aria-label="Recipient's username" aria-describedby="basic-addon2" v-model="existencia">
                <span class="input-group-text" id="basic-addon2">Existencia</span>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Total</span>
                <input type="number" class="form-control" v-model="total" id="basic-url" aria-describedby="basic-addon3">
              </div>
              
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="observaciones" v-model="observacion" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">Observacion</span>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success" v-if="editando==0" @click="guardarCubiertos()">Guardar</button>
              <button type="button" class="btn btn-primary" v-if="editando==1" @click="actualizarCubierto()">Actualizar</button>
            </div>
          </div>
        </div>
      </div>

    <!-- FIN DE VENTANA MODAL -->

</div>
<!-- FIN DE VUE -->

@endsection

@push('scripts')
<script src="js/tuul/cubiertos.js"></script>
@endpush