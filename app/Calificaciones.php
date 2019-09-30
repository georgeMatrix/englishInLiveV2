<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificaciones extends Model
{
    protected $fillable = [
        'noControl', 'maestro', 'alumno', 'icInicial1stTest', 'icInicial2stTest',
        'icInicial3stTest', 'icInicialPlataformaYtareas', 'icInicialFinalScore',
        'icbSuperior1stTest', 'icbSuperior2stTest', 'icbSuperior3stTest', 'workbook', 'icbSuperiorPlataformaYtareas',
        'icbSuperiorFinalScore', 'icpIntermedio1stTest', 'icpIntermedio2stTest', 'icpIntermedio3stTest',
        'icpIntermedioPlataformaYtareas', 'icpIntermedioFinalScore', 'icIntermedio1stTest',
        'icIntermedio2stTest', 'icIntermedio3stTest', 'icIntermedioPlataformaYtareas',
        'icIntermedioFinalScore'
    ];
}
