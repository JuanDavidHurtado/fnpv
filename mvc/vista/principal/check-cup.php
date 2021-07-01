<?php
$raiz = '../../../';

include ($raiz."mvc/control/utils.php");
include ($raiz."mvc/persistencia/conexion.php");

        
$conexion = new Conexion();

$isLoginAvailable = "false";

if($_REQUEST['id_cup1']!=''){
	$sql = "Select * from cups where cups='".$_REQUEST['id_cup1']."' ";
	$resultados = $conexion->EjecutarQuery($sql);
	$total_registros = mysql_num_rows($resultados);

	if ($total_registros) {
		$isLoginAvailable = "true";
	}
}
	
//header('Content-type: application/json');
echo $isLoginAvailable;

?>
