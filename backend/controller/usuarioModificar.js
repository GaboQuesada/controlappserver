


function readURLModificaU(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#vista2x')
                    .attr('src', e.target.result)
                    .width(220)
                    .height(180);
        };
        reader.readAsDataURL(input.files[0]);
    }
}




$(document).ready(function () {

    $("#uploadimage2x").submit(function (e) {



        e.preventDefault();

 var x ="no";

        url = "backend/model/usuarioUpdate.php";
        var parametros = new FormData($(this)[0]);

        var imgVal = $('#file2x').val();
        if (imgVal == '')
        {    
            x ="si";
            parametros.append("fileex",x);
        }
         parametros.append("fileex",x);
        
        if($("#usus2x").val() == "" || $("#usps3x").val() == "" || $("#usnc2x").val() == ""  )
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

                $("#usus2x").val(" ");
                $("#usps3x").val(" ");
                $("#vista2x").attr('src', "frontend/img/user.png");
                $("#file2x").val(null);
                $("#usnc2x").val(" ");

                $("#btnusc").click();


                getAll();

            },
            error: function (r) {

                alert("Error del servidor");
            }
        });}

    });


});


