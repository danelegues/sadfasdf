<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Models\Departamento;


class TrabajadorController extends Controller
{
    public function index()
    {
        $trabajadores = Trabajador::with('departamento')->get();
        return view('trabajadores.index', compact('trabajadores'));
    }

    public function create()
    {
        $departamentos = Departamento::all();
        return view('trabajadores.create', compact('departamentos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required|unique:trabajadores',
            'departamento_id' => 'required|exists:departamentos,id'
        ]);

        Trabajador::create($request->all());
        return redirect('/trabajadores/list')->with('success', 'Trabajador creado exitosamente');
    }

    public function show($id)
    {
        $trabajador = Trabajador::with('tareas')->findOrFail($id);
        return view('trabajadores.show', compact('trabajador'));
    }
}

