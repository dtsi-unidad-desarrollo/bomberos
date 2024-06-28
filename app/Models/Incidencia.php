<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_tipo_incidencia', 
        'emisor_nombre', 
        'emisor_telefono', 
        'emisor_reporte', 
        'fecha_apertura',  // debe ser automatico
        'fecha_clausura',  // debe ser automatico
        'direccion_accidente', 
        'receptor_nombre', 
        'id_equipo_asignado', 
        'bitacora', 
        'estatus', 
    ];
}
