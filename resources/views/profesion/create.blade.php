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
<input type="submit" value="enviar">


</form>

@endsection