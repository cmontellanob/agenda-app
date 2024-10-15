@extends('layouts.app')

@section('content')


<form action="{{route('agenda.store')}}" method="post">
{{ csrf_field() }}
<div>
<label for="ci">ci</label>
<input type="text" name="ci" >
</div>
<div>
<label for="nombres">nombres</label>
<input type="text" name="nombres" >
</div>
<div>
<label for="apellidos">apellidos</label>
<input type="text" name="apellidos" >
</div>
<div>


<label for="celular">celular</label>
<input type="text" name="celular" >
</div>
<div>
<label for="email">correo</label>
<input type="text" name="email" >
</div>
<div>
<label for="profesion_id">Profesión</label>
<select name="profesion_id">
    @foreach ($profesiones as $profesion)
        <option value="{{$profesion->id}}">{{$profesion->nombre}}</option>
    @endforeach
</select>
</div>
<input type="submit" value="enviar">


</form>
@endsection