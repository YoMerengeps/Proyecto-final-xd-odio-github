@extends('layouts.plantilla')

@section('seccion')

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Curso</th>
        <th scope="col">Categoria</th>
        <th scope="col">Precio</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>

@endsection
