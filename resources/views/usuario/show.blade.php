{!! link_to_route('usuario.index', $title = 'Inicio') !!}
<table>
  <thead>
    <th>Nombre</th>
    <th>Correo</th>
  </thead>
  <tbody>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td> {!! link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id) !!} </td>
  </tbody>
</table>
