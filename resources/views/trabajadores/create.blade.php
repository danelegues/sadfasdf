@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nuevo Trabajador</h1>

    <form action="{{ url('/trabajadores/store') }}" method="POST" class="formulario">
        @csrf
        <div class="campo">
            <label>Nombre</label>
            <input type="text" name="nombre" value="{{ old('nombre') }}" required>
            @error('nombre')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="campo">
            <label>Apellido</label>
            <input type="text" name="apellido" value="{{ old('apellido') }}" required>
            @error('apellido')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="campo">
            <label>DNI</label>
            <input type="text" name="dni" value="{{ old('dni') }}" required>
            @error('dni')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="campo">
            <label>Departamento</label>
            <select name="departamento_id" required>
                <option value="">Seleccione un departamento</option>
                @foreach($departamentos as $departamento)
                    <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                @endforeach
            </select>
            @error('departamento_id')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn-guardar">Guardar Trabajador</button>
    </form>
</div>
@endsection