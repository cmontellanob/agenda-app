<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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
<input type="submit" value="enviar">


</form>

</body>
</html>