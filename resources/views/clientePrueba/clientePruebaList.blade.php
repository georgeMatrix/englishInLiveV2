@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Edad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cliente as $c)
                        <tr>
                            <td>{{$c->nombre}}</td>
                            <td>{{$c->apellido}}</td>
                            <td>{{$c->edad}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection