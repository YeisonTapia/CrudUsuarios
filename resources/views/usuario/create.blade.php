
@extends('app')

@section('content')
{!! Form::open(['route'=>'usuario.store', 'method'=>'POST']) !!}

  {!!Form::label('Nombre', 'Nombre') !!}
  {!!Form::text('name') !!}

  {!!Form::label('Correo', 'correo') !!}
  {!!Form::text('email') !!}

  {!!Form::label('password') !!}
  {!!Form::password('password') !!}

  {!! Form::submit('Guardar')!!}

{!! Form::close() !!}
@endsection
