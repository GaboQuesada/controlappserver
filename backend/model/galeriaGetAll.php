<?php


include '../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();

try {
    $stmt = $conn->prepare("CALL galeriaGetAll()");

    $stmt->execute();
    $respuesta['estado'] = "1";
    $respuesta['mensajelog'] = "Consulta Exitosa ";
    $respuesta['mensaje'] = "Listo";
    $respuesta['resultados'] = $stmt->fetch(PDO::FETCH_ASSOC);
    print json_encode($respuesta);
} catch (PDOException $e) {

    $respuesta['estado'] = "0";
    $respuesta['mensajelog'] = $e->getMessage();
    $respuesta['mensaje'] = "Ha ocurrido un error.";
     print json_encode($respuesta);
}