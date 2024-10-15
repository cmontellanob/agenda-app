@extends('layouts.app')

@section('content')

 <table>
   <tr>
     <th>
        Nombre
     </th>
     <th>
        Operaciones
     </th>

   </tr>
   @foreach($profesiones as $profesion)
    <tr>
    <td>
    {{$profesion->nombre}}
    </td>
    <td>
      <a href="{{route('profesion.show',$profesion->id)}}">Mostrar</a>
      <a href="{{route('profesion.edit',$profesion->id)}}">Editar</a>
      <form action="{{route('profesion.destroy',$profesion->id)}}" method="post">
      {{ csrf_field() }}
      @method('DELETE')
      <input type="submit" value="eliminar">
      </form>

    </td>



    </tr>


   @endforeach


 </table>

 <a href="{{route('profesion.create')}}">Crear Profesion</a>
    
 @endsection