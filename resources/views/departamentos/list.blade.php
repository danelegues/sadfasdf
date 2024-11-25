@extends('layouts.app')

@section('content')
<div class="container">
    <div class="header-section">
        <h1>Lista de Departamentos</h1>
        <a href="{{ url('/departamentos/create') }}" class="btn-crear">Nuevo Departamento</a>
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
                    <th>Nombre</th>
                    <th>Responsable</th>
                    <th>Trabajadores</th>
                </tr>
            </thead>
            <tbody>
                @foreach($departamentos as $departamento)
                    <tr>
                        <td>{{ $departamento->nombre }}</td>
                        <td>{{ $departamento->responsable }}</td>
                        <td>{{ $departamento->trabajadores_count }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection 