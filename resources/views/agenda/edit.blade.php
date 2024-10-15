@extends('layouts.app')

@section('content')


<form action="{{route('agenda.update',$agenda->id)}}" method="post">
{{ csrf_field() }}
@method('PUT')
<div>
<label for="ci">ci</label>
<input type="text" name="ci" value="{{$agenda->ci}}">
</div>
<div>
<label for="nombres">nombres</label>
<input type="text" name="nombres" value="{{$agenda->nombres}}" >
</div>
<div>
<label for="apellidos">apellidos</label>
<input type="text" name="apellidos" value="{{$agenda->apellidos}}"  >
</div>
<div>


<label for="celular">celular</label>
<input type="text" name="celular" value="{{$agenda->celular}}"  >
</div>
<div>
<label for="email">correo</label>
<input type="text" name="email" value="{{$agenda->email}}"  >
</div>
<div>
<label for="profesion_id">Profesión</label>
<select name="profesion_id">
    @foreach ($profesiones as $profesion)
        <option value="{{$profesion->id}}"
        @selected($profesion->id==$agenda->profesion_id)
        >{{$profesion->nombre}}</option>
    @endforeach
</select>
</div>
<input type="submit" value="enviar">


</form>
@endsection