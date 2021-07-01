<?php



?>

<?php

if(!isset($_REQUEST['identificacion'])){

?>
<form method="post" action="?option=user&acc=search">
    <label>Identificacion</label>
    <br>
    <input type="text" name="identificacion" id="identificacion" />
    <button>Enviar</button>
</form>
<?php

}else{
    
    
    $sql = "SELECT * FROM paciente WHERE identificacion = '".$_REQUEST['identificacion']."' ";
    $result = $conexion->EjecutarQuery($sql);
    if(mysql_num_rows($result)){
      
    }else{
        
    }
    
    
}

?>


