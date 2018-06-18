
<?php

include '../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();

$sourcePath = $_FILES['file2x']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "../files/" . $_FILES['file2x']['name']; // Target path where file is to be stored
move_uploaded_file($sourcePath, $targetPath); // Moving Uploaded file

try {
    $stmt = $conn->prepare("CALL usuariosUpdate(:nc,:us,:ps,:im,:idp)");
    $stmt->bindParam(':nc', $_POST["usnc2x"]);
    $stmt->bindParam(':us', $_POST["usus2x"]);
    $stmt->bindParam(':ps', $_POST["usps3x"]);
    
    $vari= $_POST["fileex"];
    if($vari == "si"){
        
        $stmt->bindParam(':im',$_POST["usimg"]);
    }else{
         $stmt->bindParam(':im',$_FILES['file2x']['name']);
        
    }
   
    
   
    $stmt->bindParam(':idp', $_POST["usid"]);

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
            


