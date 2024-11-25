@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Tarea</h1>

    <form action="{{ url('/tareas/update/'.$tarea->id) }}" method="POST" class="formulario">
        @csrf
        @method('PUT')
        
        <div class="campo">
            <label>Trabajador</label>
            <select name="trabajador_id" required>
                @foreach($trabajadores as $trabajador)
                    <option value="{{ $trabajador->id }}" 
                        {{ $tarea->trabajador_id == $trabajador->id ? 'selected' : '' }}>
                        {{ $trabajador->nombre }} {{ $trabajador->apellido }}
                    </option>
                @endforeach
            </select>
            @error('trabajador_id')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="campo">
            <label>Descripción</label>
            <textarea name="descripcion" required>{{ $tarea->descripcion }}</textarea>
            @error('descripcion')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="campo">
            <label>Fecha Límite</label>
            <input type="date" name="fecha_limite" value="{{ $tarea->fecha_limite }}" required>
            @error('fecha_limite')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn-guardar">Actualizar Tarea</button>
    </form>
</div>
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
<h1>Editar/Eliminar Tarea</h1>
    <form action="/tareas/update" method="POST">
        @csrf
        @method('PATCH')
        @foreach ($tareas as $tarea)
        <input type="text" name="titulo" value="{{$tarea->titulo}}">
        <textarea name="descripcion" value="{{$tarea->descripcion}}"></textarea>
        <input type="date" name="fecha_limite" value="{{$tarea->fecha_limite}}">
        <select name="trabajador_id">
            @foreach ($trabajadores as $trabajador)
            <option value="{{$tarea->trabajador_id}}">
                {{$trabajador->nombre}} {{$trabajador->apellido}}
            </option>
            @endforeach
        </select>
        <input type="submit">
        @endforeach
    </form>
</body>
</html>