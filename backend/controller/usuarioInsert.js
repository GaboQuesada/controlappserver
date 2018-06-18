


  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#previewing')
                        .attr('src', e.target.result)
                        .width(220)
                        .height(180);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

$(document).ready(function () {

    $("#frmFormulario").submit(function (e) {
        e.preventDefault();
        url = "backend/model/usuInsert.php";
        var parametros = new FormData($(this)[0]);
        
        if($("#usus").val() == "" || $("#usps2").val() == "" || $("#archivo").val() == "" || $("#usnc").val() == "" )
        {
            alert("Rellene todos los campos")
        }
        else{

        $.ajax({
            type: "POST",
            url: url,
            data: parametros,
            contentType: false,
            processData: false,
            success: function (data) {

                $("#usus").val("");
                $("#usps2").val("");
                $("#previewing") .attr('src',"frontend/img/user.png");
                $("#archivo").val(null);
                $("#usnc").val("");

                getAll();

            },
            error: function (r) {

                alert("Error del servidor");
            }
        });}

    });


});



