<?php
include("../../db/con_db.php");
include("../pruebaLogica/LogicaUsada.php");
session_start();
$usuariosession = $_SESSION['user'];
if (!$usuariosession) {
    header("Location: login.php");
    die();
}
$cc = $_GET["cc"];
$consulta = "DELETE FROM dato WHERE CC=".$cc;
$result = mysqli_query($conex, $consulta);

if($result){
    $mensaje1 = new LogicaUsada();
    $mensaje1->mensajeP("Usuario borrado del registro con exito","HistorialDeUsuarios.php");
}