/**
 * Created by GEORGE on 9/14/19.
 */
$(document).ready(function(){
    $("#icInicial1stTest").val(0)
    $("#icInicial2stTest").val(0)
    $("#icInicial3stTest").val(0)
    $("#workbook").val(0)
    $("#icInicialPlataformaYtareas").val(0)
/*==========================================================*/
    $("#icbSuperior1stTest").val(0)
    $("#icbSuperior2stTest").val(0)
    $("#icbSuperior3stTest").val(0)
    $("#icbSuperiorPlataformaYtareas").val(0)
/*==========================================================*/
    $("#icpIntermedio1stTest").val(0)
    $("#icpIntermedio2stTest").val(0)
    $("#icpIntermedio3stTest").val(0)
    $("#icpIntermedioPlataformaYtareas").val(0)
/*==========================================================*/
    $("#icIntermedio1stTest").val(0)
    $("#icIntermedio2stTest").val(0)
    $("#icIntermedio3stTest").val(0)
    $("#icIntermedioPlataformaYtareas").val(0)
    /*==========================================================*/
    /*==========================================================*/
    $("#icInicial1stTest").focus(function(){
        if($("#icInicial1stTest").val() != 0){
            $("#icInicial1stTest").val($("#icInicial1stTest").val())
        }else{
            $("#icInicial1stTest").val("")
        }
    })
    $("#icInicial2stTest").focus(function(){
        if($("#icInicial2stTest").val() != 0){
            $("#icInicial2stTest").val($("#icInicial2stTest").val())
        }else{
            $("#icInicial2stTest").val("")
        }
    })
    $("#icInicial3stTest").focus(function(){
        if($("#icInicial3stTest").val() != 0){
            $("#icInicial3stTest").val($("#icInicial3stTest").val())
        }else{
            $("#icInicial3stTest").val("")
        }
    })
    $("#workbook").focus(function(){
        if($("#workbook").val() != 0){
            $("#workbook").val($("#workbook").val())
        }else{
            $("#workbook").val("")
        }
    })
    $("#icInicialPlataformaYtareas").focus(function(){
        if($("#icInicialPlataformaYtareas").val() != 0){
            $("#icInicialPlataformaYtareas").val($("#icInicialPlataformaYtareas").val())
        }else{
            $("#icInicialPlataformaYtareas").val("")
        }
    })
/*==========================================================*/
    $("#icbSuperior1stTest").focus(function(){
        if($("#icbSuperior1stTest").val() != 0){
            $("#icbSuperior1stTest").val($("#icbSuperior1stTest").val())
        }else{
            $("#icbSuperior1stTest").val("")
        }
    })
    $("#icbSuperior2stTest").focus(function(){
        if($("#icbSuperior2stTest").val() != 0){
            $("#icbSuperior2stTest").val($("#icbSuperior2stTest").val())
        }else{
            $("#icbSuperior2stTest").val("")
        }
    })
    $("#icbSuperior3stTest").focus(function(){
        if($("#icbSuperior3stTest").val() != 0){
            $("#icbSuperior3stTest").val($("#icbSuperior3stTest").val())
        }else{
            $("#icbSuperior3stTest").val("")
        }
    })
    $("#icbSuperiorPlataformaYtareas").focus(function(){
        if($("#icbSuperiorPlataformaYtareas").val() != 0){
            $("#icbSuperiorPlataformaYtareas").val($("#icbSuperiorPlataformaYtareas").val())
        }else{
            $("#icbSuperiorPlataformaYtareas").val("")
        }
    })
/*==========================================================*/
    $("#icpIntermedio1stTest").focus(function(){
        if($("#icpIntermedio1stTest").val() != 0){
            $("#icpIntermedio1stTest").val($("#icpIntermedio1stTest").val())
        }else{
            $("#icpIntermedio1stTest").val("")
        }
    })
    $("#icpIntermedio2stTest").focus(function(){
        if($("#icpIntermedio2stTest").val() != 0){
            $("#icpIntermedio2stTest").val($("#icpIntermedio2stTest").val())
        }else{
            $("#icpIntermedio2stTest").val("")
        }
    })
    $("#icpIntermedio3stTest").focus(function(){
        if($("#icpIntermedio3stTest").val() != 0){
            $("#icpIntermedio3stTest").val($("#icpIntermedio3stTest").val())
        }else{
            $("#icpIntermedio3stTest").val("")
        }
    })
    $("#icpIntermedioPlataformaYtareas").focus(function(){
        if($("#icpIntermedioPlataformaYtareas").val() != 0){
            $("#icpIntermedioPlataformaYtareas").val($("#icpIntermedioPlataformaYtareas").val())
        }else{
            $("#icpIntermedioPlataformaYtareas").val("")
        }
    })
/*==========================================================*/
    $("#icIntermedio1stTest").focus(function(){
        if($("#icIntermedio1stTest").val() != 0){
            $("#icIntermedio1stTest").val($("#icIntermedio1stTest").val())
        }else{
            $("#icIntermedio1stTest").val("")
        }
    })
    $("#icIntermedio2stTest").focus(function(){
        if($("#icIntermedio2stTest").val() != 0){
            $("#icIntermedio2stTest").val($("#icIntermedio2stTest").val())
        }else{
            $("#icIntermedio2stTest").val("")
        }
    })
    $("#icIntermedio3stTest").focus(function(){
        if($("#icIntermedio3stTest").val() != 0){
            $("#icIntermedio3stTest").val($("#icIntermedio3stTest").val())
        }else{
            $("#icIntermedio3stTest").val("")
        }
    })
    $("#icIntermedioPlataformaYtareas").focus(function(){
        if($("#icIntermedioPlataformaYtareas").val() != 0){
            $("#icIntermedioPlataformaYtareas").val($("#icIntermedioPlataformaYtareas").val())
        }else{
            $("#icIntermedioPlataformaYtareas").val("")
        }
    })
})

function sumatoria(){
    //if ($("#icInicial1stTest").val()<=20 && $("#icInicial2stTest").val()<=30 && $("#icInicial3stTest").val()<=30 && $("#icInicialPlataformaYtareas").val()<=20){
        var total = parseInt($("#icInicial1stTest").val()) + parseInt($("#icInicial2stTest").val()) + parseInt($("#icInicial3stTest").val()) + parseInt($("#workbook").val()) + parseInt($("#icInicialPlataformaYtareas").val());
    //}
    $("#icInicialFinalScore").val(total);
}

function sumatoriaIcBs(){
    if ($("#icbSuperior1stTest").val()<=20 && $("#icbSuperior2stTest").val()<=30 && $("#icbSuperior3stTest").val()<=30 && $("#icbSuperiorPlataformaYtareas").val()<=20){
        var total = parseInt($("#icbSuperior1stTest").val()) + parseInt($("#icbSuperior2stTest").val()) + parseInt($("#icbSuperior3stTest").val()) + parseInt($("#icbSuperiorPlataformaYtareas").val());
    }
    $("#icbSuperiorFinalScore").val(total);
}

function sumatoriaIcpi(){
    if ($("#icpIntermedio1stTest").val()<=20 && $("#icpIntermedio2stTest").val()<=30 && $("#icpIntermedio3stTest").val()<=30 && $("#icpIntermedioPlataformaYtareas").val()<=20){
        var total = parseInt($("#icpIntermedio1stTest").val()) + parseInt($("#icpIntermedio2stTest").val()) + parseInt($("#icpIntermedio3stTest").val()) + parseInt($("#icpIntermedioPlataformaYtareas").val());
    }
    $("#icpIntermedioFinalScore").val(total);
}

function sumatoriaIci(){
    if ($("#icIntermedio1stTest").val()<=20 && $("#icIntermedio2stTest").val()<=30 && $("#icIntermedio3stTest").val()<=30 && $("#icIntermedioPlataformaYtareas").val()<=20){
        var total = parseInt($("#icIntermedio1stTest").val()) + parseInt($("#icIntermedio2stTest").val()) + parseInt($("#icIntermedio3stTest").val()) + parseInt($("#icIntermedioPlataformaYtareas").val());
    }
    $("#icIntermedioFinalScore").val(total);
}

