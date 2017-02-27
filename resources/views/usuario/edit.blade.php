@extends('app')

@section('content')
{!! link_to_route('usuario.index', $title = 'Inicio') !!}
{!! Form::model($user,['route'=>['usuario.update', $user->id], 'method'=>'PUT']) !!}
  {!!Form::label('Nombre', 'Nombre') !!}
  {!!Form::text('name') !!}
  {!!Form::label('Correo', 'correo') !!}
  {!!Form::text('email') !!}
  {!!Form::label('password') !!}
  {!!Form::password('password') !!}
  {!! Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
{!! Form::close() !!}

{!! Form::open(['route'=>['usuario.destroy', $user->id], 'method'=>'DELETE']) !!}
  {!! Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
{!! Form::close() !!}
@endsection
