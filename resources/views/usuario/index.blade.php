@extends('app')

@section('content')

<div class="container">
<table  class="table table-hover">
  <thead>
    <th>Nombre</th>
    <th>Correo</th>
    <th colspan="3">Operaciones</th>
  </thead>
  @foreach ($users as $user)
  <tbody>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td> {!! link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']) !!} </td>
    <td> {!! link_to_route('usuario.show', $title = 'Mostrar', $parameters = $user->id,$attributes = ['class'=>'btn btn-primary']) !!} </td>
  </tbody>
  @endforeach
</table>
{!! link_to_route('usuario.create', $title = 'Nuevo', $parameters = [], $attributes = ['class'=>'btn btn-success'])!!}
</div>
@endsection
