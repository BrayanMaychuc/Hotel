@extends('layout.master') 
@section('titulo', 'INVENTARIO TUUL') 
@section('contenido')
<div id="cubiertosTuul"> <!--INICIO DE VUE -->
  <div class="container"><!--INICIO DE CONTAINER-->
        <div class="container-header">
           <h4> Inventario de Cubiertos del Hotel T'U'UL </h4>
        </div>
        <div class="col-md-6">
            <Button class="btn btn-primary" @click="mostrarModal()">Agregar</Button>
            <Button class="btn btn-warning">Modificar</Button>
            <Button class="btn btn-danger">Bajas</Button>
        </div><br><br>
          <!--INICIO DE TABLAS -->
          <table class="table">
            <thead class="thead-dark">
              <tr>
              <th scope="col">id tuul</th>
                <th scope="col">descripcion</th>
                <th scope="col">Existencia</th>
                <th scope="col">Surtido</th>
                <th scope="col">total</th>
                <th scope="col">status</th>
                <th scope="col">observaciones</th>
                <th scope="col">fecha de elaboracion</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="cubierto in cubiertos">
                <td>@{{cubierto.id_tuul}}</td>
                <td>@{{cubierto.descripcion}}</td>
                <td>@{{cubierto.existencia}}</td>
                <td>@{{cubierto.surtido}}</td>
                <td>@{{cubierto.total}}</td>
                <td>@{{cubierto.status}}</td>
                <td>@{{cubierto.observacion}}</td>
                <td>@{{cubierto.fecha_elaboracion}}</td>
                <td></td>
              </tr>
            </tbody>
          </table>
          <!-- FIN DE TABLA -->

          <!-- INICIO DE VENTANA MODAL -->
            <!-- Modal -->
            <div class="modal fade" id="modalCubiertoTuul" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                    <div class="modal-body">
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1" ><b>Descripcion</b></span>
                        <input type="text" class="col-md-4 form-control" v-model="descripcion" placeholder="Inserte una descripcion" aria-label="Username" aria-describedby="basic-addon1">
                      <div class="col-md"></div>
                        <span class="input-group-text" id="basic-addon1" ><b>Existencia</b></span>
                        <input type="number" class="col-md-3 form-control" placeholder="" v-model="existencia" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1" ><b>Surtido</b></span>
                        <input type="number" class="col-md-4 form-control" v-model="surtido" placeholder="Inserte cantidad" aria-label="Username" aria-describedby="basic-addon1">
                      <div class="col-md"></div>
                        <span class="input-group-text" id="basic-addon1" ><b>Total</b></span>
                        <input type="number" class="col-md-3 form-control" placeholder="Indique el total" v-model="total" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1" ><b>Status</b></span>
                        <input type="text" class="col-md-4 form-control" v-model="status" placeholder="Inserte una descripcion" aria-label="Username" aria-describedby="basic-addon1">
                      <div class="col-md"></div>
                        <span class="input-group-text" id="basic-addon1" ><b>Observacion</b></span>
                        <input type="text" class="col-md-3 form-control" placeholder="Escriba su observacion" v-model="observacion" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1" ><b>Fecha de Elaboracion</b></span>
                        <input type="text" class="col-md-4 form-control" v-model="fecha_elaboracion" placeholder="Inserte una descripcion" aria-label="Username" aria-describedby="basic-addon1">
                      
                      </div>

    
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" @click="nuevoCubierto()">Save changes</button>
                    </div>
                </div>
              </div>
            </div>
          <!-- FIN DE VENTANA MODAL -->

        


  </div><!--FIN DE CONTAINER-->

        
</div><!--FIN DE VUE-->
@endsection
@push('scripts')
<script type="text/javascript"src="js/apis/cubiertosTuul.js"></script>
@endpush