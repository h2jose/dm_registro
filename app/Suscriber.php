<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscriber extends Model
{
    protected $table = 'suscribers';

    protected $fillable = [
        'nombre',
        'apellido',
        'telefono_principal',
        'telefono_opcional',
        'especialidad',
        'clinica_instituto',
        'ciudad',
        'pais',
        'email',
        'equipos_interes',
        'conoce_mortara',
        'cual_equipo',
        'valoracion_equipos',
        'como_conocio',
        'usaria_mortara'
    ];



}
