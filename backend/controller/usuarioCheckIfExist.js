
function  getSeccion() {
    $.ajax({
        url: "backend/model/usuarioCheckIfExist.php",
        type: 'POST',
        dataType: "json",
        data: {us: $("#usus").val()},
        beforeSend: function () {

        },
        success: function (respuesta) {


            var tam = respuesta.resultados;

               
                if (tam == 0) {
                    $("#isAble").text("Disponible :)");
                    $("#btnUsuarioGuardar").attr("disabled", false);
                } else {
                    $("#isAble").text("Ya existe :(");
                    $("#btnUsuarioGuardar").attr("disabled", true);
                }

           
        },
        error: function () {

        }
    });
}


$(document).ready(function () {



    $("#usus").keyup(function () {

        existUser();
    });

})

