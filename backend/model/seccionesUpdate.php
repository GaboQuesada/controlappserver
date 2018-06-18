<?php


include '../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();

try {
    $stmt = $conn->prepare("CALL seccionesUpdate(:ti,:ba,:de, :pid)");
    $stmt->bindParam(':ti', $_POST["ti"]);
      $stmt->bindParam(':ba', $_POST["ba"]);
    $stmt->bindParam(':de', $_POST["de"]);
    $stmt->bindParam(':pid', $_POST["pid"]);
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