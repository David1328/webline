<?php
if(isset($_POST["actualizar"])){

	if(strlen($_POST['temperature'])>=1&& strlen($_POST['id'])>=1 && strlen($_POST['nombre'])>=1){
		$id = trim($_POST['id']);
		$temperatura = trim($_POST['temperature']);
		$nombre = trim($_POST['nombre']);
		actualizar($temperatura,$id,$nombre);
	}

}


function actualizar($tempe,$id,$nom){
	include("../../db/con_db.php");
	include("../pruebaLogica/LogicaUsada.php");
	$mensaje1 = new LogicaUsada();
    $mensaje1->mensajeP("La actualizacion de ".$nom." fue exitosa","tablasmisas.php");
	$actualizacion="UPDATE horarios SET temperatura ='$tempe' WHERE id ='$id'";
	$result = mysqli_query($conex,$actualizacion);
}
?>