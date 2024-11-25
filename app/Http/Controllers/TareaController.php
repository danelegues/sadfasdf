<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Models\Trabajador;

class TareaController extends Controller
{
    public function index()
    {
        $tareas = Tarea::with('trabajador')->get();
        return view('tareas.index', compact('tareas'));
    }

    public function create()
    {
        $trabajadores = Trabajador::all();
        return view('tareas.create', compact('trabajadores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'trabajador_id' => 'required|exists:trabajadores,id',
            'descripcion' => 'required',
            'fecha_limite' => 'required|date|after:today'
        ]);

        Tarea::create($request->all());
        return redirect('/tareas/index')->with('success', 'Tarea creada exitosamente');
    }

    public function edit($id)
    {
        $tarea = Tarea::findOrFail($id);
        $trabajadores = Trabajador::all();
        return view('tareas.edit', compact('tarea', 'trabajadores'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'trabajador_id' => 'required|exists:trabajadores,id',
            'descripcion' => 'required',
            'fecha_limite' => 'required|date'
        ]);

        $tarea = Tarea::findOrFail($id);
        $tarea->update($request->all());
        return redirect('/tareas/index')->with('success', 'Tarea actualizada exitosamente');
    }

    public function destroy($id)
    {
        $tarea = Tarea::findOrFail($id);
        $tarea->delete();
        return redirect('/tareas/index')->with('success', 'Tarea eliminada exitosamente');
    }
}
