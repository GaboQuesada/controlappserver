

var id;

function  getAll() {

    $.ajax({
        url: "backend/model/usuariosGetAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {

            var tam;
            var datosrespuesta = respuesta.resultados;
            $("#usuariosActules").empty();
            $.each(datosrespuesta, function (i, item) {
                tam = tam + 1;
                $("#usuariosActules").append('<tr><td>' + datosrespuesta[i].nombreCompleto + '</td><td>' + datosrespuesta[i].Usuario + '</td><td> <img src="backend/files/'+datosrespuesta[i].imgRuta+'" height="50" width="50" /></td><td><button onclick="editarUsuario(' + datosrespuesta[i].id + ')" class="btn btn-primary"  data-toggle="modal" data-target="#myModalEditUsuarios"><i class="far fa-edit"></i></button></td></tr>');
            });
        },
        error: function () {

        }
    });


}
;

function editarUsuario(pid) {

    
    
    $.ajax({
        url: "backend/model/usuarioGetById.php",
        type: 'POST',
        dataType: "json",
        data: {id: pid},
        beforeSend: function () {

        },
        success: function (respuesta) {

            var tam;
            var datosrespuesta = respuesta.resultados;
 
            $.each(datosrespuesta, function (i, item) {
             
             
             $("#usid").val(datosrespuesta[i].id);
             $("#usimg").val(datosrespuesta[i].imgRuta);
             $("#usus2x").val(datosrespuesta[i].Usuario);
             $("#usps3x").val(datosrespuesta[i].Pasword);
             $("#usnc2x").val(datosrespuesta[i].nombreCompleto);
             
             $("#vista2x").attr("src","backend/files/"+datosrespuesta[i].imgRuta+"");
             
             
            
            });
        },
        error: function () {

        }
    });

}


$(document).ready(function () {



$("#btnuc").click(function (){

    
});

$("#btnum").click(function (){

  
    modificaUsuario(id);
    
    
});

    getAll();

});


