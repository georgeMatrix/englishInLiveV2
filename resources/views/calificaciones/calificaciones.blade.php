@extends('layouts.app')
@section('content')
    @include('include.menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center title">CALIFICACIONES</h1>
            </div>
            <div class="col-lg-2 col-md-2 col-md-2 col-xs-2 offset-xl-10 offset-md-10 offset-xs-10 mb-3">
                <a class="btn btn-success btn-block" href="{{route('calificaciones.create')}}" >NUEVO</a>
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
                            <th>WORKBOOK</th>
                            <th>PLATAFORMA_Y_TAREAS</th>
                            <th>PARTICIPATION</th>
                            <th>UNDERSTANDING_OF_CONCEPTS_PRINCIPLES</th>
                            <th>APPLICATION_OF_CONCEPTS</th>
                            <th>PRESENTATION_SKILL</th>
                            <th>TEST_SCORE</th>

                            <th>FINAL_SCORE</th>
                            <th>1ST_TEST</th>
                            <th>2DO_TEST</th>
                            <th>3ER_TEST</th>
                            <th>PLATAFORMA_Y_TAREAS</th>
                            <th>FINAL_SCORE</th>
                            <th>PARTICIPATION</th>
                            <th>UNDERSTANDING_OF_CONCEPTS_PRINCIPLES</th>
                            <th>APPLICATION_OF_CONCEPTS</th>
                            <th>PRESENTATION_SKILL</th>
                            <th>TEST_SCORE</th>

                            <th>1ST_TEST</th>
                            <th>2DO_TEST</th>
                            <th>3ER_TEST</th>
                            <th>PLATAFORMA_Y_TAREAS</th>
                            <th>FINAL_SCORE</th>
                            <th>PARTICIPATION</th>
                            <th>UNDERSTANDING_OF_CONCEPTS_PRINCIPLES</th>
                            <th>APPLICATION_OF_CONCEPTS</th>
                            <th>PRESENTATION_SKILL</th>
                            <th>TEST_SCORE</th>

                            <th>1ST_TEST</th>
                            <th>2DO_TEST</th>
                            <th>3ER_TEST</th>
                            <th>PLATAFORMA_Y_TAREAS</th>
                            <th>FINAL_SCORE</th>
                            <th>EDITAR</th>
                            <th>PARTICIPATION</th>
                            <th>UNDERSTANDING_OF_CONCEPTS_PRINCIPLES</th>
                            <th>APPLICATION_OF_CONCEPTS</th>
                            <th>PRESENTATION_SKILL</th>
                            <th>TEST_SCORE</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($calificaciones as $calificacion)
                            <tr>
                                <td>{{$calificacion->id}}</td>
                                <td>{{$calificacion->noControl}}</td>
                                <td>{{$calificacion->maestro}}</td>
                                <td>{{$calificacion->alumno}}</td>

                                <td>{{$calificacion->icInicial1stTest}}</td>
                                <td>{{$calificacion->icInicial2stTest}}</td>
                                <td>{{$calificacion->icInicial3stTest}}</td>
                                <td>{{$calificacion->workbook}}</td>
                                <td>{{$calificacion->icInicialPlataformaYtareas}}</td>
                                <td>{{$calificacion->icInicialFinalScore}}</td>
                                <td>{{$calificacion->icInicialParticipation}}</td>
                                <td>{{$calificacion->icInicialUnderstanding}}</td>
                                <td>{{$calificacion->icInicialApplication}}</td>
                                <td>{{$calificacion->icInicialPresentation}}</td>
                                <td>{{$calificacion->icInicialTestScore}}</td>

                                <td>{{$calificacion->icbSuperior1stTest}}</td>
                                <td>{{$calificacion->icbSuperior2stTest}}</td>
                                <td>{{$calificacion->icbSuperior3stTest}}</td>
                                <td>{{$calificacion->icbSuperiorPlataformaYtareas}}</td>
                                <td>{{$calificacion->icbSuperiorFinalScore}}</td>
                                <td>{{$calificacion->icbSuperiorParticipation}}</td>
                                <td>{{$calificacion->icbSuperiorUnderstanding}}</td>
                                <td>{{$calificacion->icbSuperiorApplication}}</td>
                                <td>{{$calificacion->icbSuperiorPresentation}}</td>
                                <td>{{$calificacion->icbSuperiorTestScore}}</td>

                                <td>{{$calificacion->icpIntermedio1stTest}}</td>
                                <td>{{$calificacion->icpIntermedio2stTest}}</td>
                                <td>{{$calificacion->icpIntermedio3stTest}}</td>
                                <td>{{$calificacion->icpIntermedioPlataformaYtareas}}</td>
                                <td>{{$calificacion->icpIntermedioFinalScore}}</td>
                                <td>{{$calificacion->icpIntermedioParticipation}}</td>
                                <td>{{$calificacion->icpIntermedioUnderstanding}}</td>
                                <td>{{$calificacion->icpIntermedioApplication}}</td>
                                <td>{{$calificacion->icpIntermedioPresentation}}</td>
                                <td>{{$calificacion->icpIntermedioTestScore}}</td>

                                <td>{{$calificacion->icIntermedio1stTest}}</td>
                                <td>{{$calificacion->icIntermedio2stTest}}</td>
                                <td>{{$calificacion->icIntermedio3stTest}}</td>
                                <td>{{$calificacion->icIntermedioPlataformaYtareas}}</td>
                                <td>{{$calificacion->icIntermedioFinalScore}}</td>
                                <td>{{$calificacion->icIntermedioParticipation}}</td>
                                <td>{{$calificacion->icIntermedioUnderstanding}}</td>
                                <td>{{$calificacion->icIntermedioApplication}}</td>
                                <td>{{$calificacion->icIntermedioPresentation}}</td>
                                <td>{{$calificacion->icIntermedioTestScore}}</td>
                                <td><a href="{{route('calificaciones.edit', $calificacion->id)}}" class="btn btn-info">Editar</a></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection