<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


 <table>
   <tr>
   <th>
        CI
     </th>
     <th>
        Nombres
     </th>
     <th>
        Apellidos
     </th>
     <th>
        Telefono
     </th>
     <th>
        Celular
     </th>
     <th>
        Profesion
     </th>
     <th>
     Operaciones
     </th>

   </tr>
   @foreach($agendas as $agenda)
    <tr>
    <td>
    {{$agenda->ci}}
    </td>
    <td>
    {{$agenda->nombres}}
    </td>
    <td>
    {{$agenda->apellidos}}
    </td>
    <td>
    {{$agenda->telefono}}
    </td>
    <td>
    {{$agenda->email}}
    </td>
    <td>
    {{$agenda->profesion->nombre}}
    </td>
    <td>
      <a href="{{route('agenda.show',$agenda->id)}}">Mostrar</a>
      <a href="{{route('agenda.edit',$agenda->id)}}">Editar</a>
      <form action="{{route('agenda.destroy',$agenda->id)}}" method="post">
      {{ csrf_field() }}
      @method('DELETE')
      <input type="submit" value="eliminar">
      </form>

    </td>



    </tr>


   @endforeach


 </table>

 <a href="{{route('agenda.create')}}">Crear Agenda</a>
    
</body>
</html>