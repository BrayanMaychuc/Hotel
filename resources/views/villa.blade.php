@extends('layout.master') 
@section('titulo', 'INVENTARIO VILLA SA') 
@section('contenido')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="container-header">
      <h3><b>Inventario de Blancos Villa San Antonio</b></h3>
    </div> <br><br>
      <table class="table">
        <thead class="thead-dark">
            <tr>
              <th scope="col">id blanco</th>
              <th scope="col">folio</th>
              <th scope="col">elaborado</th>
              <th scope="col">fecha de elaboracion</th>
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
              <th scope="row"></th>
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
    
  </div>    
      
    
</body>
</html>
@endsection 