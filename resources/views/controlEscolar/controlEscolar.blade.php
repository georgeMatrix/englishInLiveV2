@extends('layouts.app')
@section('content')
    @include('include.menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center title">CONTROL ESCOLAR</h1>
            </div>
            <div class="col-lg-2 col-md-2 col-md-2 col-xs-2 offset-xl-10 offset-md-10 offset-xs-10 mb-3">
                <a class="btn btn-success btn-block" href="{{route('controlEscolar.create')}}" >NUEVO</a>
            </div>
        </div>
        <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12">
                        <div class="table-responsive content-loader">
                            <table class="table table-hover table-sm table-striped">
                                <thead class="table-primary">
                                <tr>
                                    <th>NO.</th>
                                    <th>GRUPO</th>
                                    <th>ESCOLARIDAD</th>
                                    <th>NO_DE_CONTROL</th>
                                    <th>CICLO_ESCOLAR</th>
                                    <th>EDAD</th>
                                    <th>INCORPORADOS</th>
                                    <th>SEXO</th>
                                    <th>NIVEL</th>
                                    <th>MAESTRO</th>
                                    <th>HORARIO_SEP</th>
                                    <th>CURP</th>
                                    <th>HORARIO</th>
                                    <th>MODULOS_ACREDITADOS</th>
                                    <th>NOMBRE_COMPLETO_DEL_ALUMNO</th>
                                    <th>EDITAR</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($registros as $registro)
                                    <tr>
                                        <td>{{$registro->id}}</td>
                                        <td>{{$registro->grupo}}</td>
                                        <td>{{$registro->escolaridad}}</td>
                                        <td>{{$registro->noControl}}</td>
                                        <td>{{$registro->cicloEscolar}}</td>
                                        <td>{{$registro->edad}}</td>
                                        <td>{{$registro->incorporados}}</td>
                                        <td>{{$registro->sexo}}</td>
                                        <td>{{$registro->niveles}}</td>
                                        <td>{{$registro->maestro}}</td>
                                        <td>{{$registro->horarioSep}}</td>
                                        <td>{{$registro->curp}}</td>
                                        <td>{{$registro->horario}}</td>
                                        <td>{{$registro->modulosAcreditados}}</td>
                                        <td>{{$registro->nombreCompleto}}</td>
                                        <td><a href="{{route('controlEscolar.edit', $registro->id)}}" class="btn btn-info">Editar</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                                {{$registros->render()}}
                            </table>
                        </div>
                </div>
        </div>
    </div>


@endsection

