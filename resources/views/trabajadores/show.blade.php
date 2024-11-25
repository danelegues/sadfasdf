<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trabajadores</h1>
    <select name="trabajador" id="trabajador">
        @foreach($trabajadores as $trabajador)
        <option value="{{ $trabajador->id }}"> 
            {{ $trabajador->nombre }} {{ $trabajador->apellido }} {{ $trabajador->dni }}    
        
        </option>
        @endforeach
    </select>
    <div id="tareas">

    </div>
    <a href="/trabajadores/index">Volver a la lista</a>
    
</body>
</html>