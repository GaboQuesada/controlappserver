<?php


include '../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();

try {
    $stmt = $conn->prepare("CALL serviciosGetAll(:es,:idp)");
    $stmt->bindParam(':es', $_POST["es"]);
    $stmt->bindParam(':idp', $_POST["idp"]);
    $stmt->execute();
    $respuesta['estado'] = "1";
    $respuesta['mensajelog'] = "Consulta Exitosa ";
    $respuesta['mensaje'] = "Eliminado.";
    $respuesta['resultados'] = $stmt->fetch(PDO::FETCH_ASSOC);
    print json_encode($respuesta);
} catch (PDOException $e) {

    $respuesta['estado'] = "0";
    $respuesta['mensajelog'] = $e->getMessage();
    $respuesta['mensaje'] = "Ha ocurrido un error.";
     print json_encode($respuesta);
}