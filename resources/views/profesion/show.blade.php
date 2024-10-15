@extends('layouts.app')

@section('content')

    <ul>
        <li>CI: {{$agenda->ci}}</li>
        <li>Npmbres: {{$agenda->nombres}}</li>
        <li>Apellidos: {{$agenda->apellidos}}</li>
        <li>Celular: {{$agenda->celular}}</li>
        <li>Correo: {{$agenda->email}}</li>
    </ul>
    
    <a href="{{route('agenda.index')}}">listar</a>

    @endsection