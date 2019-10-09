@extends('layouts.app')
@section('content')
    @include('include.menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-md-2 col-xs-2 offset-xl-10 offset-md-10 offset-xs-10 mb-3">
                <a class="btn btn-success btn-block" href="{{route('colegiaturas.create')}}" >NUEVO</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xl-12">
                <div class="table-responsive content-loader">
                    <table class="table table-hover table-sm table-striped">
                        <thead class="table-primary">
                        <tr>
                            <th>NO.</th>
                            <th>COLEGIATURAS</th>
                            <th>MESES</th>
                            <th>INSCRIPCION</th>
                            <th>LIBROS</th>
                            <th>CERTIFICADO SEP</th>
                            <th>EDITAR</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($colegiaturas as $colegiatura)
                            <tr>
                                <td>{{$colegiatura->id}}</td>
                                <td>{{$colegiatura->colegiaturas}}</td>
                                <td>{{$colegiatura->meses}}</td>
                                <td>{{$colegiatura->inscripcion}}</td>
                                <td>{{$colegiatura->libros}}</td>
                                <td>{{$colegiatura->certificadoSep}}</td>
                                <td><a href="{{route('colegiaturas.edit', $colegiatura->id)}}" class="btn btn-info">Editar</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                        {{$colegiaturas->render()}}
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection