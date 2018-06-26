
<?php
@session_start();

if (!empty($_SESSION['id'])) {
    
} else {
    header("Location: index.php");
}
if (@$_GET["cerrar"]) {
    session_destroy();
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/lobby.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    </head>

    <body class="container">
        <br>
        <div class="row headup">
            <div class="col-sm">
                <img src="img/logo.png" width="100" height="100">
            </div>
            <div class="col-sm align-self-center">
                <h1><i class="fas fa-door-open"></i> Perfiles</h1>
            </div>
            <div class="col-sm">

            </div>
        </div>
        <br>
        <div class="row ">
            <div class="col-sm">
                <img style="display: inline-block" src="userimg/<?php echo $_SESSION["img"]; ?>" width="45" height="45">
                &numsp;
                <p style="display: inline-block"><?php echo $_SESSION["nb"]; ?></p>
            </div>
            <div class="col-sm align-self-center">

            </div>
            <div class="col-sm">

            </div>
        </div>
        <hr>
        <p><strong>Cuentas Vinculadas:</strong></p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="row ">
                    <div class="col-sm">
                        <img style="display: inline-block" src="sysimg/distribuidor.png"  width="45" height="45">
                        &numsp;
                        <p style="display: inline-block">Distribuidor</p>
                    </div>
                    <div class="col-sm align-self-center">
                        <img style="display: inline-block" src="img/logoyovoy.png"width="45" height="45">
                        &numsp;
                        <p style="display: inline-block">Yo voy Tecnologias</p>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-outline-dark ">Administrar</button>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row ">
                    <div class="col-sm">
                        <img style="display: inline-block" src="sysimg/agente.png"width="45" height="45">
                        &numsp;
                        <p style="display: inline-block">Agente de Ventas</p>
                    </div>
                    <div class="col-sm align-self-center">
                        <img style="display: inline-block" src="img/logoyovoy.png"width="45" height="45">
                        &numsp;
                        <p style="display: inline-block">Yo voy Tecnologias</p>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-outline-dark">Administrar</button>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row ">
                    <div class="col-sm">
                        <img style="display: inline-block" src="sysimg/master.png"width="45" height="45">
                        &numsp;
                        <p style="display: inline-block">Master</p>
                    </div>
                    <div class="col-sm align-self-center">
                        <img style="display: inline-block" src="img/logo.png"width="45" height="45">
                        &numsp;
                        <p style="display: inline-block">Deli app</p>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-outline-dark">Administrar</button>
                    </div>
                </div>
            </li>

        </ul>
    </body>
</html>
