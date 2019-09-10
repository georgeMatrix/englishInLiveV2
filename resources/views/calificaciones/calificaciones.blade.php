@extends('layouts.app')
@section('content')
    @include('include.menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-md-2 col-xs-2 offset-xl-10 offset-md-10 offset-xs-10 mb-3">
                <a class="btn btn-success btn-block" href="{{route('calificaciones.create')}}" >NUEVO REGISTRO</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xl-12">
                <div class="table-responsive content-loader">
                    <table class="table table-hover table-sm table-striped">
                        <thead class="table-primary">
                        <tr>
                            <th>NO.</th>
                            <th>NO._DE_CONTROL</th>
                            <th>MAESTRO</th>
                            <th>NOMBRE_COMPLETO_DEL_ALUMNO</th>
                            <th>1ST_TEST</th>
                            <th>2DO_TEST</th>
                            <th>3ER_TEST</th>
                            <th>PLATAFORMA_Y_TAREAS</th>
                            <th>FINAL_SCORE</th>
                            <th>1ST_TEST</th>
                            <th>2DO_TEST</th>
                            <th>3ER_TEST</th>
                            <th>PLATAFORMA_Y_TAREAS</th>
                            <th>FINAL_SCORE</th>
                            <th>1ST_TEST</th>
                            <th>2DO_TEST</th>
                            <th>3ER_TEST</th>
                            <th>PLATAFORMA_Y_TAREAS</th>
                            <th>FINAL_SCORE</th>
                            <th>1ST_TEST</th>
                            <th>2DO_TEST</th>
                            <th>3ER_TEST</th>
                            <th>PLATAFORMA_Y_TAREAS</th>
                            <th>FINAL_SCORE</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection