@extends('layout.master') 
@section('titulo', 'INVENTARIO TUUL') 
@section('contenido')
    <div class="container">
        <div class="container-head">
            <h3 style="font-family: 'Times New Roman', Times, serif; margin-left: 50px;">Tabla de Salidas</h3>
        </div>
        <br><br>
        <div class="container-body">
            <table class="table table-bordered" >
                <thead style="background-color: lightblue;">
                    <tr>
                        <th>ID</th>
                        <th>Descripcion</th>
                        <th>Cantidad</th>
                        <th>Autorizo</th>
                        <th>Fecha de Salida</th>
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