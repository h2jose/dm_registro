@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Formulario de registro
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    {!! Form::open(['route' => 'suscriber.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

                    {{ csrf_field() }}

                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombre(s):',['class' => 'col-sm-5 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('nombre', old('suscriber'),['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('apellido', 'Apellido(s):',['class' => 'col-sm-5 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('apellido', old('suscriber'),['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('telefono_principal', 'Teléfono(s):',['class' => 'col-sm-5 control-label']) !!}
                        <div class="col-sm-3">
                            {!! Form::text('telefono_principal', old('suscriber'),['class' => 'form-control']) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::text('telefono_opcional', old('suscriber'),['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('especialidad', 'Especialidad:',['class' => 'col-sm-5 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('especialidad', old('suscriber'),['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('clinica_instituto', 'Clínica o Instituto:',['class' => 'col-sm-5 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('clinica_instituto', old('suscriber'),['class' => 'form-control']) !!}
                        </div>
                    </div>


                    <div class="form-group">
                        {!! Form::label('ciudad', 'Ciudad / País:',['class' => 'col-sm-5 control-label']) !!}
                        <div class="col-sm-3">
                            {!! Form::text('ciudad', old('suscriber'),['class' => 'form-control']) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::text('pais', 'Colombia',['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Email:',['class' => 'col-sm-5 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::email('email', old('suscriber'),['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('equipos_interes', 'Equipo(s) Mortara / Suntech de su interés:',['class' => 'col-sm-5 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::textarea('equipos_interes', old('suscriber'),['class' => 'form-control','size' => '30x2']) !!}
                        </div>
                    </div>

                    <hr class="divider">

                    <div class="form-group">
                        {!! Form::label('conoce_mortara', '¿Conoce Equipos de Mortara?:',['class' => 'col-sm-5 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::radio('conoce_mortara', 'SI',['class' => 'form-control']) !!} SI<br/>
                            {!! Form::radio('conoce_mortara', 'NO',['class' => 'form-control']) !!} NO
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('cual_equipo', '¿Cuál equipo conoce?',['class' => 'col-sm-5 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('cual_equipo', old('suscriber'),['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('valoracion_equipos', '¿Qué valoración hace?',['class' => 'col-sm-5 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::select('valoracion_equipos', array('Excelente' => 'Excelente', 'Buena' => 'Buena', 'Regular' => 'Regular', 'Mala' => 'Mala'), old('suscriber'), ['class' => 'form-control','placeholder' => 'Seleccione...']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('como_conocio', '¿Cómo conoció Equipos de Mortara?:',['class' => 'col-sm-5 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::textarea('como_conocio', old('suscriber'),['class' => 'form-control','size' => '30x2']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('usaria_mortara', '¿Usaría Equipos de Mortara?:',['class' => 'col-sm-5 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::radio('usaria_mortara', 'SI',['class' => 'form-control']) !!} SI<br/>
                            {!! Form::radio('usaria_mortara', 'NO',['class' => 'form-control']) !!} NO
                        </div>
                    </div>


                    <hr class="divider">


                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fa fa-btn fa-plus"></i>Añadir Registro
                            </button>
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>


@endsection