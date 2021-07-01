<?php
if (isset($_REQUEST['guardar_hc_referencia']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_hc_referencia'] == 'new') {

$sql = "INSERT INTO hc_referencia (
`id_hc_referencia`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`serv_1`,
`serv_2`,
`ref_descripcion`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['serv_1']."' ,
'".$_REQUEST['serv_2']."' ,
'".$_REQUEST['ref_descripcion']."'
) ";


} else if ($_REQUEST['id_hc_referencia'] != '') {

$sql = "UPDATE hc_referencia set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`serv_1` = '".$_REQUEST['serv_1']."' ,
`serv_2` = '".$_REQUEST['serv_2']."' ,
`ref_descripcion` = '".$_REQUEST['ref_descripcion']."' WHERE `id_hc_referencia` = '".$_REQUEST['id_hc_referencia']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_hc_referencia = 'new';
$sql = "SELECT * from hc_referencia WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_hc_referencia = $row['id_hc_referencia'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$serv_1 = $row['serv_1'];
$serv_2 = $row['serv_2'];
$ref_descripcion = $row['ref_descripcion'];
break; }

?>
<script>

$(function(){

$("#close-hc_referencia").click(function(){
$("#open-hc_referencia").show();
$(this).hide();
$("#content-hc_referencia").hide('slow');
});

$("#open-hc_referencia").click(function(){
$("#close-hc_referencia").show();
$(this).hide();
$("#content-hc_referencia").show('slow');
});

});

</script>
<fieldset id="hc_referencia">
<legend align="left"> <div class="arrow-c" id="close-hc_referencia"></div> <div class="arrow-o" id="open-hc_referencia" ></div> <font>Formato de referencia para pacientes</font></legend>
<div id="content-hc_referencia">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_hc_referencia" id="guardar_hc_referencia" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_hc_referencia" name="form_hc_referencia" action="<?php echo @$action_form_hc_referencia ?>#hc_referencia" method="post">

<input type="hidden" id="id_hc_referencia" name="id_hc_referencia" value="<?php echo @$id_hc_referencia ?>" />

        <?php

        $sql_diagn = "Select * from valoracion_inicial where id_valoracion_inicial= ".$_REQUEST['id_vinicial']." ";
        $result_diag = $conexion->EjecutarQuery($sql_diagn);
        $row_diag = mysql_fetch_array($result_diag);
        //$fecha_cita= $row_diag['fecha'];
        $id_cita= $row_diag['id_cita'];

        $sql_cita = "Select * from cita where id_cita= " . $id_cita . " ";
        $result_cita = $conexion->EjecutarQuery($sql_cita);
        $row_cita = mysql_fetch_array($result_cita);

        $fecha_cita= $row_cita['fecha_hora_fin'];

        $id_usuario5 = $row_diag['id_usuario'];
        $sql5 = "Select * from usuario where id_usuario={$id_usuario5}";
        $resultf5 = $conexion->EjecutarQuery($sql5);
        $rowf5 = mysql_fetch_array($resultf5);
        $firma = 'avatar_anonimo.png';
        ?>

<table style="font-size: <?php echo $tamfont ?>px !important" width="620" border="0" class="data"  align="center" cellpadding="0" cellspacing="0">
        <tr >
            <td width="156" rowspan="7" align="center" valign="middle" ><?php echo "<img src='" . Utils::$http_ruta . "mvc/vista/imagenes/logo2.png' width='100px' />"; ?></td>
            <td width="375"><div align="center">SOLUCIONES Y    EMPRENDIMENTO EMPRESARIAL</div></td>
            <td rowspan="8" width="156"><div align="center"><span class="Estilo5">Formula Medica N&deg; </span><br />
                    <span class="Estilo4">CIT-<?php echo $id_cita ?> </span></div></td>
        </tr>
        <tr>
            <td ><div align="center">SIEMPRE IPS SAS</div></td>
        </tr>
        <tr>
            <td ><div align="center">NIT:900589346-6</div></td>
        </tr>
        <tr >
            <td ><div align="center">Regimen Com&uacute;n</div></td>
        </tr>
        <tr >
            <td ><div align="center">Calle 11# 9N-94 Santa Clara Popay&aacute;n(Cauca)</div></td>
        </tr>
        <tr>
            <td><div align="center">Tel. 092-8361098-3217128172</div></td>
        </tr>
        <tr >
            <td ><div align="center"><a href="mailto:administracion@siempree.com">administracion@siempree.com</a></div></td>
        </tr>
        <tr >
            <td colspan="2" >Resoluci&oacute;n DIAN 170000034583 Feb 14 de 2013 numeracion desde 1    hasta 10000</td>
        </tr>
    </table>
<br>
<?php

    include ($GLOBALS['raiz'] . 'mvc/vista/terapeuta/form_paciente.php'); /* */

     include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/historia_entrada/hc_acudiente.php');
    ?>
    <br>

<br>
    <table width="638" align="center" cellpadding="0" cellspacing="0">
  <col width="265">
  <col width="83">
  <tr height="19">
    <td colspan="2" height="19"><div align="center">FORMATO    DE REFERENCIA PARA PACIENTES</div></td>
  </tr>
  <tr height="19">
    <td width="373" height="19">Servicio que    solicita la referencia</td>
    <td width="348"><input name="serv_1" type="text" id="serv_1" value="<?php echo @$serv_1; ?>" size="45" /></td>
  </tr>
  <tr height="19">
    <td height="19">Servicio para    el cual se solicita la referencia</td>
    <td><input name="serv_2" type="text" id="serv_2" value="<?php echo @$serv_2; ?>" size="45" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19"><div align="center">INFORMACION CLINICA   RELEVANTE</div></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="97"><textarea name="ref_descripcion" cols="100" rows="8" id="ref_descripcion"><?php echo @$ref_descripcion; ?></textarea></td>
  </tr>
</table>

<?php echo @$button ?>
</form><br><center>



        <?php
               echo "<br>Fecha: ".$fecha_cita;
        $nombre_usuario = $rowf5['nombre']." ".$rowf5['apellido'];
        echo "<br>Profesional: ".$nombre_usuario;
        echo "<br>Telefono:".$rowf5['tel']."<br>";

        ?>
        

</center>
<BR>
<a href='#' onClick='imprSelec("content-hc_referencia")' >Imprimir Referencia</a>
</div>
</fieldset>