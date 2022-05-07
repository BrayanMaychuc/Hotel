@extends('layout.master') 
@section('titulo', 'INVENTARIO TUUL') 
@section('contenido')
    <div class="container"><!--INICIO DE CONTAINER-->
        <div class="container-header">
           <h4> Inventario de Blancos del Hotel T'U'UL </h4>
        </div>
        <div class="col-md-6">
            <Button class="btn btn-primary">Agregar</Button>
            <Button class="btn btn-warning">Modificar</Button>
            <Button class="btn btn-danger">Bajas</Button>
        </div><br><br>
        <div class="container-body">
        <!--INICIO DE TABLAS -->
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">descripcion</th>
                <th scope="col">marca</th>
                <th scope="col">unidad</th>
                <th scope="col">stock</th>            
                <th scope="col">piso</th>
                <th scope="col">surtido</th>
                <th scope="col">total</th>
                <th scope="col">observaciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        <!-- FIN DE TABLA -->
        </div>
        
    </div><!--FIN DE CONTAINER-->
@endsection