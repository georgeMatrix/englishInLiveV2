@extends('layouts.app')
@section('content')
    @include('include.menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center title">BASE DE DATOS</h1>
            </div>
            <div class="col-lg-2 col-md-2 col-md-2 col-xs-2 offset-xl-10 offset-md-10 offset-xs-10 mb-3">
                <a class="btn btn-success btn-block" href="{{route('baseDeDatos.create')}}" >NUEVO</a>
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
                            <th>GRADO</th>
                            <th>ESCOLARIDAD</th>
                            <th>NO._DE_ESCOLARIDAD</th>
                            <th>MATRICULA</th>
                            <th>EDAD</th>
                            <th>INCORPORADOS</th>
                            <th>NIVEL</th>
                            <th>HORARIO_SEP</th>
                            <th>HORARIO</th>
                            <th>NOMBRE_COMPLETO_DEL_ALUMNO</th>
                            <th>FECHA_DE_INGRESO</th>
                            <th>TELEFONO_DE_CASA_OFICINA</th>
                            <th>CELULAR</th>
                            <th>FACEBOOK</th>
                            <th>FECHA_DE_NACIMIENTO</th>
                            <th>EDAD</th>
                            <th>DIRECCION</th>
                            <th>MUNICIPIO</th>
                            <th>EMAIL</th>
                            <th>GRADO_DE_ESTUDIOS</th>
                            <th>COMO_TE_ENTERASTE</th>
                            <th>EDITAR</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($baseDatos as $base)
                            <tr>
                                <td>{{$base->id}}</td>
                                <td>{{$base->grado}}</td>
                                <td>{{$base->grupo}}</td>
                                <td>{{$base->escolaridad}}</td>
                                <td>{{$base->no_control}}</td>
                                <td>{{$base->matricula}}</td>
                                <td>{{$base->edad}}</td>
                                <td>{{$base->incorporados}}</td>
                                <td>{{$base->nivel}}</td>
                                <td>{{$base->horario_sep}}</td>
                                <td>{{$base->horario}}</td>
                                <td>{{$base->nombre_completo}}</td>
                                <td>{{$base->fecha_de_ingreso}}</td>
                                <td>{{$base->telefono_casa_oficina}}</td>
                                <td>{{$base->celular}}</td>
                                <td>{{$base->facebook}}</td>
                                <td>{{$base->fecha_de_nacimiento}}</td>
                                <td>{{$base->edad}}</td>
                                <td>{{$base->direccion}}</td>
                                <td>{{$base->municipio}}</td>
                                <td>{{$base->email}}</td>
                                <td>{{$base->grado_estudios}}</td>
                                <td>{{$base->como_te_enteraste}}</td>
                                <td><a href="{{route('baseDeDatos.edit', $base->id)}}" class="btn btn-info">Editar</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                        {{$baseDatos->render()}}
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection