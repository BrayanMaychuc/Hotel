@extends('layout.master') 
@section('titulo', 'INVENTARIO TUUL') 
@section('contenido')
<div id="insumosTuul"> <!--INICIO DE VUE-->
    <div class="container-fluid"> <!--INICIO DE CONTAINER-FLUID-->
        <div class="container-header">
            <h4>LISTADO DE INSUMOS DEL HOTEL TUUL</h4>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Buscar por nombre" aria-describedby="basic-addon2">
            <button class="btn btn-sm" style="background-color: skyblue;" @click="modal()">Nuevo Insumo</button>
            <button class="btn btn-sm" style="background-color: azure;">Lista</button>
            <button class="btn btn-sm" style="background-color: azure;"></button>
        </div>
        <!-- INICIO DE TABLAS -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id_insumo</th>
                    <th>nombre</th>
                    <th>unidad</th>
                    <th>cantidad</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="insumo in insumos">
                    <td>@{{insumo.id_insumo}}</td>
                    <td>@{{insumo.nombre}}</td>
                    <td>@{{insumo.unidad}}</td>
                    <td>@{{insumo.cantidad}}</td>
                    <td>
                        <button class="btn btn-secondary" @click="editInsumos()"><i class="bi bi-pencil-square"></i></button>
                        <button class="btn btn-danger" @click="deleteInsumos()"><i class="bi bi-trash-fill"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- FIN DE TABLAS -->
                        <!-- INICIO DE TABLA MODAL -->
            <div class="modal fade" id="modalInsumos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" >Registrando Insumos</h5>
                            <!-- <h5 class="modal-title" v-if="editando==false">Editando Insumos</h5> -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">     
                                    
                                <span class="input-group-text" id="basic-addon1"><b>Nombre</b></span>
                                <input type="text" class="col-md-6 form-control" placeholder="Introduzca el nombre" v-model="nombre" aria-label="Username" aria-describedby="basic-addon1">
                                      
                                
                            </div>
                            <br>
                            <div class="input-group">

                                <span class="input-group-text" id="basic-addon1"><b>Unidad</b></span>
                                <input type="text" class="col-md-6 form-control" placeholder="Unidad" v-model="unidad" aria-label="Username" aria-describedby="basic-addon1">
    
                            </div>
                            <br>
                            <div class="input-group">

                                <span class="input-group-text" id="basic-addon1"><b>cantidad</b></span>
                                <input type="number" class="col-md-8 form-control" placeholder="Ingrese cantidad" v-model="cantidad" aria-label="Username" aria-describedby="basic-addon1">
                                 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" @click="nuevoInsumo()">Guardar</button>
                                
                            </div>
                    
                        </div>
                    </div>
                </div>
            </div>
                        <!-- FIN DE TABLA MODAL -->
    </div> <!--FIN DE CONTAINER-FLUID-->
</div> <!--FIN DE VUE -->
@endsection
@push('scripts')
    <script type="text/javascript" src="js/apis/insumos.js"></script>
@endpush