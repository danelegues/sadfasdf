<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trabajador extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido', 'dni', 'departamento_id'];

    public function tareas()
    {
        return $this->hasMany(Tarea::class);
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
}
