@extends('layouts.app')
@section('content')
    @include('include.menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xl-12 mb-4">
                <form class="user" action="{{route('controlEscolar.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="grupo" name="grupo" placeholder="Grupo">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="escolaridad" name="escolaridad" placeholder="Escolaridad">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="noControl" name="noControl" placeholder="No. de control">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="cicloEscolar" name="cicloEscolar" placeholder="Ciclo escolar">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="edad" name="edad" placeholder="Edad">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="incorporados" name="incorporados" placeholder="Incorporados">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="sexo" name="sexo" placeholder="Sexo">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <select name="niveles" id="niveles" class="form-control form-control-user">
                                <option value="">Seleccione una opción</option>
                                @foreach($niveles as $nivel)
                                    <option value="{{$nivel->id}}">{{$nivel->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="maestro" name="maestro" placeholder="Maestro">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="horarioSep" name="horarioSep" placeholder="Horario SEP">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="curp" name="curp" placeholder="CURP">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="horario" name="horario" placeholder="Horario">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="modulosAcreditados" name="modulosAcreditados" placeholder="Modulos Acreditados">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="nombreCompleto" name="nombreCompleto" placeholder="Nombre Completo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <button class="btn btn-primary" type="submit">Guardar Datos</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
