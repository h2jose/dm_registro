@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-sm-12">

                @if (count($suscribers) > 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Listado de suscriptores (Total Registros: {!! $suscribers->total() !!})
                        </div>

                        <div class="panel-body">
                             <p class="text-right"><a class="btn btn-link" href="/excel" role="button">Exportar a excel</a></p>
                            <table class="table table-striped task-table">

                                <!-- Table Headings -->
                                <thead>
                                <th>Apellido</th>
                                <th>Nombre</th>
                                <th>Especialidad</th>
                                <th>&nbsp;</th>
                                </thead>

                                <!-- Table Body -->
                                <tbody>
                                @foreach ($suscribers as $suscriber)
                                    <tr>
                                        <td class="table-text">
                                            <div>{{ $suscriber->apellido }}</div>
                                        </td>
                                        <td class="table-text">
                                            <div>{{ $suscriber->nombre }}</div>
                                        </td>
                                        <td class="table-text">
                                            <div>{{ $suscriber->especialidad }}</div>
                                        </td>


                                        <td>
                                            <a href="{{ url('suscriber/'.$suscriber->id) }}" class="btn btn-primary btn-xs active" role="button">Ver detalle</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {!! $suscribers->render() !!}
                        </div>
                    </div>
                @endif


            </div>
        </div>

    </div>


@endsection