@extends('layouts.app')

@section('content')
<div class="container">
    <div class="header-section">
        <h1>Lista de Tareas</h1>
        <a href="{{ url('/tareas/create') }}" class="btn-crear">Nueva Tarea</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="tabla-contenedor">
        <table>
            <thead>
                <tr>
                    <th>Trabajador</th>
                    <th>Descripción</th>
                    <th>Fecha Límite</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tareas as $tarea)
                    <tr>
                        <td>{{ $tarea->trabajador->nombre }} {{ $tarea->trabajador->apellido }}</td>
                        <td>{{ $tarea->descripcion }}</td>
                        <td>{{ \Carbon\Carbon::parse($tarea->fecha_limite)->format('d/m/Y') }}</td>
                        <td class="acciones">
                            <a href="{{ url('/tareas/edit/'.$tarea->id) }}" class="btn-editar">Editar</a>
                            <form action="{{ url('/tareas/destroy/'.$tarea->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-eliminar" onclick="return confirm('¿Estás seguro?')">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection