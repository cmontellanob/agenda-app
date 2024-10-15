@extends('layouts.app')

@section('content')


 <table class="min-w-full divide-y divide-gray-200 overflow-x-auto">
 <thead class="bg-gray-50">
   <tr>
   <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
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
</thead>
   @foreach($agendas as $agenda)
    <tr>
    <td class="px-6 py-4 whitespace-nowrap">
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
    <td class="flex gap-1">
      <a  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded"  href="{{route('agenda.show',$agenda->id)}}">Mostrar</a>
      <a  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" href="{{route('agenda.edit',$agenda->id)}}">Editar</a>
      <form action="{{route('agenda.destroy',$agenda->id)}}" method="post">
      {{ csrf_field() }}
      @method('DELETE')
      <input  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" type="submit" value="Eliminar">
      </form>

    </td>



    </tr>


   @endforeach


 </table>

 <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" href="{{route('agenda.create')}}">Crear Agenda</a>
    
 @endsection