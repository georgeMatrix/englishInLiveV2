@extends('layouts.app')
@section('content')
    @include('include.menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center title">CERTIFICACIONES</h1>
            </div>
            <div class="col-lg-2 col-md-2 col-md-2 col-xs-2 offset-xl-10 offset-md-10 offset-xs-10 mb-3">
                <a class="btn btn-success btn-block" href="{{route('certificaciones.create')}}" >NUEVO</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xl-12">
                <div class="table-responsive content-loader">
                    <table class="table table-hover table-sm table-striped">
                        <thead class="table-primary">
                        <tr>
                            <th>NO.</th>
                            <th>NOMBRE</th>
                            <th>FECHA_DE_CERTIFICACION</th>
                            <th>ENTIDAD</th>
                            <th>RESULTADO</th>
                            <th>RESULTADO_GENERAL</th>
                            <th>CEFR_LEVEL</th>
                            <th>FECHA_DE_LA_CERTIFICACION</th>
                            <th>READING_SCORE</th>
                            <th>WRITING_SCORE</th>
                            <th>LISTENING_SCORE</th>
                            <th>SPEAKING_SCORE</th>
                            <th>CAMBRIDGE_ENGLISH_SCALE</th>
                            <th>CERTIFICATE_RESULT</th>
                            <th>EDITAR</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($certificaciones as $certificacion)
                            <tr>
                                <td>{{$certificacion->id}}</td>
                                <td>{{$certificacion->nombre}}</td>
                                <td>{{$certificacion->fechaDeCertificacion}}</td>
                                <td>{{$certificacion->entidad}}</td>
                                <td>{{$certificacion->resultado}}</td>
                                <td>{{$certificacion->resultadoGeneral}}</td>
                                <td>{{$certificacion->cefrLevel}}</td>
                                <td>{{$certificacion->fechaCertificacion}}</td>
                                <td>{{$certificacion->readingScore}}</td>
                                <td>{{$certificacion->writingScore}}</td>
                                <td>{{$certificacion->listeningScore}}</td>
                                <td>{{$certificacion->speakingScore}}</td>
                                <td>{{$certificacion->cambridgeEnglishScale}}</td>
                                <td>{{$certificacion->certificateResult}}</td>
                                <td><a href="{{route('certificaciones.edit', $certificacion->id)}}" class="btn btn-info">Editar</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                        {{$certificaciones->render()}}
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection

