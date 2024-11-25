@extends('layouts.app')

@section('content')
<div class="container">
    <div class="header-section">
        <h1>Lista de Trabajadores</h1>
        <a href="{{ url('/trabajadores/create') }}" class="btn-crear">Nuevo Trabajador</a>
    </div>

    <div class="tabla-contenedor">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DNI</th>
                    <th>Departamento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trabajadores as $trabajador)
                    <tr>
                        <td>{{ $trabajador->nombre }}</td>
                        <td>{{ $trabajador->apellido }}</td>
                        <td>{{ $trabajador->dni }}</td>
                        <td>{{ $trabajador->departamento->nombre }}</td>
                        <td>
                            <a href="{{ url('/trabajadores/show/'.$trabajador->id) }}" class="btn-ver">Ver Tareas</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection