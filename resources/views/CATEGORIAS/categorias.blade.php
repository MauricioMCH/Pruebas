@extends('layouts.diseño')

@section('title', 'Page Title')


@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<a href="categorias/create" class="btn btn-info btn-lg btn-block"  >AGREGAR CATEGORIA</a>
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>

      <th scope="col">CATEGORIA</th>
      <th scope="col">PRODUCTOS</th>
      <th scope="col">ACCIONES</th>
    </tr>
  </thead>
  <tbody>



    <tr>

      <td>ELECTRONICA</td>
      <td>10</td>
      <td><a href="categorias/1/edit" type="button" class="btn btn-success">EDITAR</a>
<a href="categorias/1" class="btn btn-warning">MOSTRAR</a>
<button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar?');">ELIMINAR</button></td>
    </tr>

    <tr>

      <td>ELECTRODOMESTICOS</td>
      <td>18</td>
      <td><a href="categorias/2/edit" type="button" class="btn btn-success">EDITAR</a>
      <a href="categorias/2" class="btn btn-warning">MOSTRAR</a>
<button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar?');">ELIMINAR</button></td>
    </tr>
    <tr>

      <td>ROPA</td>
      <td>15</td>
      <td><a href="categorias/3/edit" type="button" class="btn btn-success">EDITAR</a>
      <a href="categorias/1" class="btn btn-warning">MOSTRAR</a>
<button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar?');">ELIMINAR</button></td>
    </tr>
  </tbody>
</table>

@endsection
