@extends('layouts.app')


@section('content')

    <div class="container">


        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Registro de suscriptor
                </div>



                <div class="row">
                    <div class="col-sm-offset-2 col-sm-2">
                        <p><strong>Nombre(s):</strong></p>
                    </div>
                    <div class="col-sm-6">
                        <p>{{ $suscriber->nombre }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-offset-2 col-sm-2">
                        <p><strong>Apellido(s):</strong></p>
                    </div>
                    <div class="col-sm-6">
                        <p>{{ $suscriber->apellido }}</p>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-offset-2 col-sm-2">
                        <p><strong>Teléfonos(s):</strong></p>
                    </div>
                    <div class="col-sm-6">
                        <p>{{ $suscriber->telefono_principal }} - {{ $suscriber->telefono_opcional }}</p>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-offset-2 col-sm-2">
                        <p><strong>Especialidad:</strong></p>
                    </div>
                    <div class="col-sm-6">
                        <p>{{ $suscriber->especialidad }}</p>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-offset-2 col-sm-2">
                        <p><strong>Clínica o Instituto:</strong></p>
                    </div>
                    <div class="col-sm-6">
                        <p>{{ $suscriber->clinica_instituto }}</p>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-offset-2 col-sm-2">
                        <p><strong>Ciudad / País:</strong></p>
                    </div>
                    <div class="col-sm-6">
                        <p>{{ $suscriber->ciudad }} - {{ $suscriber->pais }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-offset-2 col-sm-2">
                        <p><strong>Email:</strong></p>
                    </div>
                    <div class="col-sm-6">
                        <p>{{ $suscriber->email }}</p>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-offset-2 col-sm-2">
                        <p><strong>Equipo(s) Mortara / Suntech de su interés:</strong></p>
                    </div>
                    <div class="col-sm-6">
                        <p>{{ $suscriber->equipos_interes }}</p>
                    </div>
                </div>


                <hr class="divider">


                <div class="row">
                    <div class="col-sm-offset-2 col-sm-2">
                        <p><strong>¿Conoce Equipos de Mortara?:</strong></p>
                    </div>
                    <div class="col-sm-6">
                        <p>{{ $suscriber->conoce_mortara }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-offset-2 col-sm-2">
                        <p><strong>¿Cuál equipo conoce?:</strong></p>
                    </div>
                    <div class="col-sm-6">
                        <p>{{ $suscriber->cual_equipo }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-offset-2 col-sm-2">
                        <p><strong>¿Qué valoración hace?:</strong></p>
                    </div>
                    <div class="col-sm-6">
                        <p>{{ $suscriber->valoracion_equipos }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-offset-2 col-sm-2">
                        <p><strong>¿Cómo conoció Equipos de Mortara?:</strong></p>
                    </div>
                    <div class="col-sm-6">
                        <p>{{ $suscriber->como_conocio }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-offset-2 col-sm-2">
                        <p><strong>¿Usaría Equipos de Mortara?:</strong></p>
                    </div>
                    <div class="col-sm-6">
                        <p>{{ $suscriber->usaria_mortara }}</p>
                    </div>
                </div>



            </div>
        </div>

    </div>


@endsection
