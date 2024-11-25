@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nuevo Departamento</h1>

    <form action="{{ url('/departamentos/store') }}" method="POST" class="formulario">
        @csrf
        <div class="campo">
            <label>Nombre</label>
            <input type="text" name="nombre" value="{{ old('nombre') }}" required>
            @error('nombre')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="campo">
            <label>Responsable</label>
            <input type="text" name="responsable" value="{{ old('responsable') }}" required>
            @error('responsable')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn-guardar">Guardar Departamento</button>
    </form>
</div>
@endsection 