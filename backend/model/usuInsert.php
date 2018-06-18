
<?php

include '../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();

$sourcePath = $_FILES['archivo']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "../files/" . $_FILES['archivo']['name']; // Target path where file is to be stored
move_uploaded_file($sourcePath, $targetPath); // Moving Uploaded file

try {
    $stmt = $conn->prepare("CALL usuariosInsert( :nc , :us, :ps, :img)");
    $stmt->bindParam(':nc', $_POST["usnc"]);
    $stmt->bindParam(':us', $_POST["usus"]);
    $stmt->bindParam(':ps', $_POST["usps2"]);
    $stmt->bindParam(':img',$_FILES["archivo"]["name"]);

    $stmt->execute();
    $respuesta['estado'] = "1";
    $respuesta['mensajelog'] = "Consulta Exitosa (getAll)";
    $respuesta['mensaje'] = "Consulta Exitosa.";
    print json_encode($respuesta);
} catch (PDOException $e) {

    $respuesta['estado'] = "0";
    $respuesta['mensajelog'] = $e->getMessage();
    $respuesta['mensaje'] = "Ha ocurrido un error.";
    print json_encode($respuesta);
}
            

