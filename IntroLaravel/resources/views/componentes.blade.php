@extends('layouts.plantilla1')
@section('titulo', 'Componentes Blade')

@section('contenido')
    <x-Card encabezado="Componente 1" titulo="Titulo 1" textoboton="Guardar">XD</x-Card> <!-- Cuando usamos esto significa que estamos trabajando con un componente -->
    <x-Card encabezado="Componente 2" titulo="Titulo 2" textoboton="Guardar">dx</x-Card> 

    <x-Alert tipo="danger"> Rojo </x-Alert>
    <x-Alert tipo="warning">Amarillo</x-Alert>

@endsection