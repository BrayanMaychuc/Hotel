@extends('layout.master') 
@section('titulo', 'INVENTARIO TUUL') 
@section('contenido')
<div id="">
    <div class="container">
        <div class="container-head">
            <h3 style="margin-left: 33%; font-family: 'Times New Roman', Times, serif;">Productos en Almacen</h3>
        </div><br><br>
    </div> 
    <div class="container-body">
        <div>
        <button class="btn btn-success">Añadir</button> 
        </div>
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>Folio</th>
                    <th>Producto</th>
                    <th>Unidad</th>
                    <th>Cantidad</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
