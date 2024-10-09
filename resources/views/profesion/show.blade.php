<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>CI: {{$agenda->ci}}</li>
        <li>Npmbres: {{$agenda->nombres}}</li>
        <li>Apellidos: {{$agenda->apellidos}}</li>
        <li>Celular: {{$agenda->celular}}</li>
        <li>Correo: {{$agenda->email}}</li>
    </ul>
    
    <a href="{{route('agenda.index')}}">listar</a>

</body>
</html>