@extends('layouts.app')
@section('content')
    @include('include.menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xl-12 mb-4">
                <form class="user" action="{{route('calificaciones.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="noControl" name="noControl" placeholder="No. de Control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="maestro" name="maestro" placeholder="Maestro">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="alumno" name="alumno" placeholder="Nombre de Alumno">
                        </div>
                    </div>

                    <div class="form-group bg-info p-3">
                        <h5>Inglés Comunicativo Inicial</h5>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-user" id="icInicial1stTest" name="icInicial1stTest" placeholder="1st test">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-user" id="icInicial2stTest" name="icInicial2stTest" placeholder="2do test">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-user" id="icInicial3stTest" name="icInicial3stTest" placeholder="3er test">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="icInicialPlataformaYtareas" name="icInicialPlataformaYtareas" placeholder="Plataforma y Tareas">
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="icInicialFinalScore" name="icInicialFinalScore" placeholder="Final Score">
                            </div>
                        </div>
                    </div>

                    <div class="form-group bg-info p-3">
                        <h5>Inglés Comunicativo Básico Superior</h5>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-user" id="icbSuperior1stTest" name="icbSuperior1stTest" placeholder="1st test">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-user" id="icbSuperior2stTest" name="icbSuperior2stTest" placeholder="2do test">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-user" id="icbSuperior3stTest" name="icbSuperior3stTest" placeholder="3er test">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="icbSuperiorPlataformaYtareas" name="icbSuperiorPlataformaYtareas" placeholder="Plataforma y Tareas">
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="icbSuperiorFinalScore" name="icbSuperiorFinalScore" placeholder="Final Score">
                            </div>
                        </div>
                    </div>

                    <div class="form-group bg-info p-3">
                        <h5>Inglés Comunicativo Pre Intermedio</h5>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-user" id="icpIntermedio1stTest" name="icpIntermedio1stTest" placeholder="1st test">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-user" id="icpIntermedio2stTest" name="icpIntermedio2stTest" placeholder="2do test">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-user" id="icpIntermedio3stTest" name="icpIntermedio3stTest" placeholder="3er test">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="icpIntermedioPlataformaYtareas" name="icpIntermedioPlataformaYtareas" placeholder="Plataforma y Tareas">
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="icpIntermedioFinalScore" name="icpIntermedioFinalScore" placeholder="Final Score">
                            </div>
                        </div>
                    </div>

                    <div class="form-group bg-info p-3">
                        <h5>Inglés Comunicativo Intermedio</h5>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-user" id="icIntermedio1stTest" name="icIntermedio1stTest" placeholder="1st test">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-user" id="icIntermedio2stTest" name="icIntermedio2stTest" placeholder="2do test">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-user" id="icIntermedio3stTest" name="icIntermedio3stTest" placeholder="3er test">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="icIntermedioPlataformaYtareas" name="icIntermedioPlataformaYtareas" placeholder="Plataforma y Tareas">
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="icIntermedioFinalScore" name="icIntermedioFinalScore" placeholder="Final Score">
                            </div>
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