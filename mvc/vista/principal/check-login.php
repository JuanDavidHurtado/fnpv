<?php
$raiz = '../../../';

include ($raiz."mvc/control/utils.php");
include ($raiz."mvc/persistencia/conexion.php");

        
$conexion = new Conexion();

$isLoginAvailable = "true";

if($_REQUEST['password']!=$_REQUEST['acc']){
	$sql = "Select * from usuario where password='".$_REQUEST['password']."' ";
	$resultados = $conexion->EjecutarQuery($sql);
	$total_registros = mysql_num_rows($resultados);

	if ($total_registros) {
		$isLoginAvailable = "false";
	}
}
	
//header('Content-type: application/json');
echo $isLoginAvailable;

?>
