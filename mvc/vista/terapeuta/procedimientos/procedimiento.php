<?php
if (isset($_REQUEST['guardar_procedimiento']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_procedimiento'] == 'new') {

$sql = "INSERT INTO procedimiento (
`id_procedimiento`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`ordem`,
`fecha_aten`,
`hora_aten`,
`autorizacion2`,
`ambito`,
`codigo_cup`,
`nombre_cup`,
`cantidad2`,
`finalidad`,
`personal_atencion`,
`edad_ges`,
`control_p`,
`c_principal1`,
`i_principal1`,
`c_dx11`,
`c_dx21`,
`forma`,
`resultado`,
`imagen`,
`nombre_1`,
`nombre_2`,
`nombre_3`,
`nombre_4`,
`nombre_5`,
`nombre_6`,
`nombre_7`,
`edad_1`,
`edad_2`,
`edad_3`,
`edad_4`,
`edad_5`,
`edad_6`,
`edad_7`,
`edad_8`,
`sexo_1`,
`sexo_2`,
`sexo_3`,
`sexo_4`,
`sexo_5`,
`sexo_6`,
`sexo_7`,
`fecha_1`,
`fecha_2`,
`fecha_3`,
`fecha_4`,
`fecha_5`,
`fecha_6`,
`fecha_7`,
`i_dx11`,
`i_dx21`,
`id_cita`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['ordem']."' ,
'".$_REQUEST['fecha_aten']."' ,
'".$_REQUEST['hora_aten']."' ,
'".$_REQUEST['autorizacion2']."' ,
'".$_REQUEST['ambito']."' ,
'".$_REQUEST['codigo_cup']."' ,
'".$_REQUEST['nombre_cup']."' ,
'".$_REQUEST['cantidad2']."' ,
'".$_REQUEST['finalidad']."' ,
'".$_REQUEST['personal_atencion']."' ,
'".$_REQUEST['edad_ges']."' ,
'".$_REQUEST['control_p']."' ,
'".$_REQUEST['c_principal1']."' ,
'".$_REQUEST['i_principal1']."' ,
'".$_REQUEST['c_dx11']."' ,
'".$_REQUEST['c_dx21']."' ,
'".$_REQUEST['forma']."' ,
'".$_REQUEST['resultado']."' ,
'".$_REQUEST['imagen']."' ,
'".$_REQUEST['nombre_1']."' ,
'".$_REQUEST['nombre_2']."' ,
'".$_REQUEST['nombre_3']."' ,
'".$_REQUEST['nombre_4']."' ,
'".$_REQUEST['nombre_5']."' ,
'".$_REQUEST['nombre_6']."' ,
'".$_REQUEST['nombre_7']."' ,
'".$_REQUEST['edad_1']."' ,
'".$_REQUEST['edad_2']."' ,
'".$_REQUEST['edad_3']."' ,
'".$_REQUEST['edad_4']."' ,
'".$_REQUEST['edad_5']."' ,
'".$_REQUEST['edad_6']."' ,
'".$_REQUEST['edad_7']."' ,
'".$_REQUEST['edad_8']."' ,
'".$_REQUEST['sexo_1']."' ,
'".$_REQUEST['sexo_2']."' ,
'".$_REQUEST['sexo_3']."' ,
'".$_REQUEST['sexo_4']."' ,
'".$_REQUEST['sexo_5']."' ,
'".$_REQUEST['sexo_6']."' ,
'".$_REQUEST['sexo_7']."' ,
'".$_REQUEST['fecha_1']."' ,
'".$_REQUEST['fecha_2']."' ,
'".$_REQUEST['fecha_3']."' ,
'".$_REQUEST['fecha_4']."' ,
'".$_REQUEST['fecha_5']."' ,
'".$_REQUEST['fecha_6']."' ,
'".$_REQUEST['fecha_7']."' ,
'".$_REQUEST['i_dx11']."' ,
'".$_REQUEST['i_dx21']."' ,
'".$_REQUEST['id_cita']."'
) ";


} else if ($_REQUEST['id_procedimiento'] != '') {

$sql = "UPDATE procedimiento set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`ordem` = '".$_REQUEST['ordem']."' ,
`fecha_aten` = '".$_REQUEST['fecha_aten']."' ,
`hora_aten` = '".$_REQUEST['hora_aten']."' ,
`autorizacion2` = '".$_REQUEST['autorizacion2']."' ,
`ambito` = '".$_REQUEST['ambito']."' ,
`codigo_cup` = '".$_REQUEST['codigo_cup']."' ,
`nombre_cup` = '".$_REQUEST['nombre_cup']."' ,
`cantidad2` = '".$_REQUEST['cantidad2']."' ,
`finalidad` = '".$_REQUEST['finalidad']."' ,
`personal_atencion` = '".$_REQUEST['personal_atencion']."' ,
`edad_ges` = '".$_REQUEST['edad_ges']."' ,
`control_p` = '".$_REQUEST['control_p']."' ,
`c_principal1` = '".$_REQUEST['c_principal1']."' ,
`i_principal1` = '".$_REQUEST['i_principal1']."' ,
`c_dx11` = '".$_REQUEST['c_dx11']."' ,
`c_dx21` = '".$_REQUEST['c_dx21']."' ,
`forma` = '".$_REQUEST['forma']."' ,
`resultado` = '".$_REQUEST['resultado']."' ,
`imagen` = '".$_REQUEST['imagen']."' ,
`nombre_1` = '".$_REQUEST['nombre_1']."' ,
`nombre_2` = '".$_REQUEST['nombre_2']."' ,
`nombre_3` = '".$_REQUEST['nombre_3']."' ,
`nombre_4` = '".$_REQUEST['nombre_4']."' ,
`nombre_5` = '".$_REQUEST['nombre_5']."' ,
`nombre_6` = '".$_REQUEST['nombre_6']."' ,
`nombre_7` = '".$_REQUEST['nombre_7']."' ,
`edad_1` = '".$_REQUEST['edad_1']."' ,
`edad_2` = '".$_REQUEST['edad_2']."' ,
`edad_3` = '".$_REQUEST['edad_3']."' ,
`edad_4` = '".$_REQUEST['edad_4']."' ,
`edad_5` = '".$_REQUEST['edad_5']."' ,
`edad_6` = '".$_REQUEST['edad_6']."' ,
`edad_7` = '".$_REQUEST['edad_7']."' ,
`edad_8` = '".$_REQUEST['edad_8']."' ,
`sexo_1` = '".$_REQUEST['sexo_1']."' ,
`sexo_2` = '".$_REQUEST['sexo_2']."' ,
`sexo_3` = '".$_REQUEST['sexo_3']."' ,
`sexo_4` = '".$_REQUEST['sexo_4']."' ,
`sexo_5` = '".$_REQUEST['sexo_5']."' ,
`sexo_6` = '".$_REQUEST['sexo_6']."' ,
`sexo_7` = '".$_REQUEST['sexo_7']."' ,
`fecha_1` = '".$_REQUEST['fecha_1']."' ,
`fecha_2` = '".$_REQUEST['fecha_2']."' ,
`fecha_3` = '".$_REQUEST['fecha_3']."' ,
`fecha_4` = '".$_REQUEST['fecha_4']."' ,
`fecha_5` = '".$_REQUEST['fecha_5']."' ,
`fecha_6` = '".$_REQUEST['fecha_6']."' ,
`fecha_7` = '".$_REQUEST['fecha_7']."' ,
`i_dx11` = '".$_REQUEST['i_dx11']."' ,
`i_dx21` = '".$_REQUEST['i_dx21']."' ,
`id_cita` = '".$_REQUEST['id_cita']."' WHERE `id_procedimiento` = '".$_REQUEST['id_procedimiento']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_procedimiento = 'new';
$sql = "SELECT * from procedimiento WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_procedimiento = $row['id_procedimiento'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$ordem = $row['ordem'];
$fecha_aten = $row['fecha_aten'];
$hora_aten = $row['hora_aten'];
$autorizacion2 = $row['autorizacion2'];
$ambito = $row['ambito'];
$codigo_cup = $row['codigo_cup'];
$nombre_cup = $row['nombre_cup'];
$cantidad2 = $row['cantidad2'];
$finalidad = $row['finalidad'];
$personal_atencion = $row['personal_atencion'];
$edad_ges = $row['edad_ges'];
$control_p = $row['control_p'];
$c_principal1 = $row['c_principal1'];
$i_principal1 = $row['i_principal1'];
$c_dx11 = $row['c_dx11'];
$c_dx21 = $row['c_dx21'];
$forma = $row['forma'];
$resultado = $row['resultado'];
$imagen = $row['imagen'];
$nombre_1 = $row['nombre_1'];
$nombre_2 = $row['nombre_2'];
$nombre_3 = $row['nombre_3'];
$nombre_4 = $row['nombre_4'];
$nombre_5 = $row['nombre_5'];
$nombre_6 = $row['nombre_6'];
$nombre_7 = $row['nombre_7'];
$edad_1 = $row['edad_1'];
$edad_2 = $row['edad_2'];
$edad_3 = $row['edad_3'];
$edad_4 = $row['edad_4'];
$edad_5 = $row['edad_5'];
$edad_6 = $row['edad_6'];
$edad_7 = $row['edad_7'];
$edad_8 = $row['edad_8'];
$sexo_1 = $row['sexo_1'];
$sexo_2 = $row['sexo_2'];
$sexo_3 = $row['sexo_3'];
$sexo_4 = $row['sexo_4'];
$sexo_5 = $row['sexo_5'];
$sexo_6 = $row['sexo_6'];
$sexo_7 = $row['sexo_7'];
$fecha_1 = $row['fecha_1'];
$fecha_2 = $row['fecha_2'];
$fecha_3 = $row['fecha_3'];
$fecha_4 = $row['fecha_4'];
$fecha_5 = $row['fecha_5'];
$fecha_6 = $row['fecha_6'];
$fecha_7 = $row['fecha_7'];
$i_dx11 = $row['i_dx11'];
$i_dx21 = $row['i_dx21'];
$id_cita = $row['id_cita'];
break; }

?>

<script>

$(function(){

$("#close-procedimiento").click(function(){
$("#open-procedimiento").show();
$(this).hide();
$("#content-procedimiento").hide('slow');
});

$("#open-procedimiento").click(function(){
$("#close-procedimiento").show();
$(this).hide();
$("#content-procedimiento").show('slow');
});

});



</script>

<script type="text/javascript">
	$(function() {
		$( "#fecha_aten" ).datepicker({
                dateFormat: 'yy-mm-dd'

            });

	});


function pasar_v(){


            var valor=(document.getElementById('nombre_cup').value);
   document.getElementById('codigo_cup').value=valor;


}
	</script>


 
<fieldset id="procedimiento">
<legend align="left"> <div class="arrow-c" id="close-procedimiento"></div> <div class="arrow-o" id="open-procedimiento" ></div> <font>Procedimiento</font></legend>
<div id="content-procedimiento">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_procedimiento" id="guardar_procedimiento" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_procedimiento" name="form_procedimiento" action="<?php echo @$action_form_procedimiento ?>#procedimiento" method="post">

<input type="hidden" id="id_procedimiento" name="id_procedimiento" value="<?php echo @$id_procedimiento ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<table border='0' cellpadding='0' cellspacing='0' class='data' align="center"  >
<tr><td colspan="6" class="table1" align="center"><h3>Registrar procedimiento</h3></td></tr>
 <tr>
   <td width="314" >Orden:</td>
   <td width="461"  ><input type="text" class="input_txt valid" id="ordem" name="ordem" value="<?php echo @$ordem; ?>" /></td>
  <td colspan="3" >Fecha :<input type="text" class="input_txt valid" id="fecha_aten" name="fecha_aten" value="<?php echo @$fecha_aten; ?>" />Hora:
      <input type="text" size="10"   id="hora_aten" name="hora_aten" value="<?php echo @$hora_aten; ?>" />      </td>
   </tr>
<tr>
<td>Servicio</td>
<td class="tablewhite">

<select name="nombre_cup" class="input_txt valid" id="nombre_cup"  onchange="pasar_v()" >
  <option value="0"> [ SELECCIONAR ]</option>
  <?php
                    $sql = "Select * from cups";
                    $result = $conexion->EjecutarQuery($sql);
                    while ($row = mysql_fetch_array($result)) {
                        $style_s = "";
                        if ($row['cups'] == @$codigo_cup) {
                            $style_s = "selected";
                        }
                        echo "<option value='" . $row['cups'] . "' $style_s >" . $row['nombre'] . "</option>";
                    }
                    ?>
</select>
<input name="codigo_cup" type="text" class="input_txt valid" id="codigo_cup" value="<?php echo @$codigo_cup; ?>" readonly="true" /></td><td class="tablewhite" colspan="3">
    
  Cant :
  <input type="text" size="10" class="input_txt valid" id="cantidad2" name="cantidad2" value="<?php echo @$cantidad2; ?>" /></td>
</tr> 
<tr>
<td>Ambito de realizaci&oacute;n :</td>
<td colspan="4" class="tablewhite"><select name="ambito" class="input_txt valid" id="ambito"  value="<?php echo @$ambito; ?>"  >
 <option value=""> [ SELECCIONAR ]</option>
                    <?php
                    $sql = "Select * from ambito";
                    $result = $conexion->EjecutarQuery($sql);
                    while ($row = mysql_fetch_array($result)) {
                        $style_s = "";
                        if ($row['id_ambito'] == @$ambito) {
                            $style_s = "selected";
                        }
                        echo "<option value='" . $row['id_ambito'] . "' $style_s >" . $row['nombre'] . "</option>";
                    }
                    ?>
</select>
   Autorizacion :
    <input type="text" class="input_txt valid" id="autorizacion2" name="autorizacion2" value="<?php echo @$autorizacion2; ?>" /></td>
</tr>
<tr>
 <td>Finalidad procedimiento :</td>
 <td colspan="4" class="tablewhite"><select class="input_txt valid" id="finalidad" name="finalidad" value="<?php echo @$finalidad; ?>" >
  <option value=""> [ SELECCIONAR ]</option>
                    <?php
                    $sql = "Select * from fin_procedimiento";
                    $result = $conexion->EjecutarQuery($sql);
                    while ($row = mysql_fetch_array($result)) {
                        $style_s = "";
                        if ($row['id_fin_procedimiento'] == @$finalidad) {
                            $style_s = "selected";
                        }
                        echo "<option value='" . $row['id_fin_procedimiento'] . "' $style_s >" . $row['nombre'] . "</option>";
                    }
                    ?>
</select></td>
</tr>

<tr class="oculta" id='per'>
 <td>Personal que atiende el procedimiento :</td>
 <td colspan="" class="tablewhite"><select  class="input_txt valid" id="personal_atencion" name="personal_atencion" value="<?php echo @$personal_atencion; ?>" >
<option value=""> [ SELECCIONAR ]</option>
                    <?php
                    $sql = "Select * from personal_atencion";
                    $result = $conexion->EjecutarQuery($sql);
                    while ($row = mysql_fetch_array($result)) {
                        $style_s = "";
                        if ($row['id'] == @$personal_atencion) {
                            $style_s = "selected";
                        }
                        echo "<option value='" . $row['id'] . "' $style_s >" . $row['nombre'] . "</option>";
                    }
                    ?>
</select></td>
<td colspan="4"><strong>
  Diligenciable solo para procedimientos relacionados con el parto</strong></td>
</tr>
<input name="rn" type="hidden" value="0" />
<input name="npartos" type="hidden" value="" />
<tr class="oculta">
  <td colspan="5">&nbsp;</td>
</tr>
<tr bordercolor="1" class="oculta">
  <td colspan="5">
  <label><strong>Diligenciable solo para procedimientos de parto</strong></label>
    <label style="margin-left:580px" class="tablewhite"></label><br />

    <table border="1" cellpadding="0" cellspacing="0">
      <col width="124" />
      <col width="83" span="2" />
      <col width="113" />
      <tr height="19">
        <td height="19" width="124">Datos</td>
        <td width="83">Nombre</td>
        <td width="83">Edad</td>
        <td width="83">Sexo</td>
        <td width="113">Fecha Nacimiento</td>
      </tr>
      <tr height="19">
        <td height="19">Nacido 1</td>
        <td><input type="text" class="input_txt valid" id="nombre_1" name="nombre_1" value="<?php echo @$nombre_1; ?>" /></td>
        <td><input type="text" class="input_txt valid" id="edad_1" name="edad_1" value="<?php echo @$edad_1; ?>" /></td>
        <td><input type="text" class="input_txt valid" id="sexo_1" name="sexo_1" value="<?php echo @$sexo_1; ?>" /></td>
        <td><input type="text" class="input_txt valid" id="fecha_1" name="fecha_1" value="<?php echo @$fecha_1; ?>" /></td>
      </tr>
      <tr height="19">
        <td height="19">Nacido 2</td>
        <td><input type="text" class="input_txt valid" id="nombre_2" name="nombre_2" value="<?php echo @$nombre_2; ?>" /></td>
        <td><input type="text" class="input_txt valid" id="edad_2" name="edad_2" value="<?php echo @$edad_2; ?>" /></td>
        <td><input type="text" class="input_txt valid" id="sexo_2" name="sexo_2" value="<?php echo @$sexo_2; ?>" /></td>
        <td><input type="text" class="input_txt valid" id="fecha_2" name="fecha_2" value="<?php echo @$fecha_2; ?>" /></td>
      </tr>
      <tr height="19">
        <td height="19">Nacido 3</td>
        <td><input type="text" class="input_txt valid" id="nombre_3" name="nombre_3" value="<?php echo @$nombre_3; ?>" /></td>
        <td><input type="text" class="input_txt valid" id="edad_3" name="edad_3" value="<?php echo @$edad_3; ?>" /></td>
        <td><input type="text" class="input_txt valid" id="sexo_3" name="sexo_3" value="<?php echo @$sexo_3; ?>" /></td>
        <td><input type="text" class="input_txt valid" id="fecha_3" name="fecha_3" value="<?php echo @$fecha_3; ?>" /></td>
      </tr>
      <tr height="19">
        <td height="19">Nacido 4</td>
        <td><input type="text" class="input_txt valid" id="nombre_4" name="nombre_4" value="<?php echo @$nombre_4; ?>" /></td>
        <td><input type="text" class="input_txt valid" id="edad_4" name="edad_4" value="<?php echo @$edad_4; ?>" /></td>
        <td><input type="text" class="input_txt valid" id="sexo_4" name="sexo_4" value="<?php echo @$sexo_4; ?>" /></td>
        <td><input type="text" class="input_txt valid" id="fecha_4" name="fecha_4" value="<?php echo @$fecha_4; ?>" /></td>
      </tr>
      <tr height="19">
        <td height="19">Nacido 5</td>
        <td><input type="text" class="input_txt valid" id="nombre_5" name="nombre_5" value="<?php echo @$nombre_5; ?>" /></td>
        <td><input type="text" class="input_txt valid" id="edad_5" name="edad_5" value="<?php echo @$edad_5; ?>" /></td>
        <td><input type="text" class="input_txt valid" id="sexo_5" name="sexo_5" value="<?php echo @$sexo_5; ?>" /></td>
        <td><input type="text" class="input_txt valid" id="fecha_5" name="fecha_5" value="<?php echo @$fecha_5; ?>" /></td>
      </tr>
      <tr height="19">
        <td height="19">Nacido 6</td>
        <td><input type="text" class="input_txt valid" id="nombre_6" name="nombre_6" value="<?php echo @$nombre_6; ?>" /></td>
        <td><input type="text" class="input_txt valid" id="edad_6" name="edad_6" value="<?php echo @$edad_6; ?>" /></td>
        <td><input type="text" class="input_txt valid" id="sexo_6" name="sexo_6" value="<?php echo @$sexo_6; ?>" /></td>
        <td><input type="text" class="input_txt valid" id="fecha_6" name="fecha_6" value="<?php echo @$fecha_6; ?>" /></td>
      </tr>
      <tr height="19">
        <td height="19">Nacido 7</td>
        <td><input type="text" class="input_txt valid" id="nombre_7" name="nombre_7" value="<?php echo @$nombre_7; ?>" /></td>
        <td><input type="text" class="input_txt valid" id="edad_7" name="edad_7" value="<?php echo @$edad_7; ?>" /></td>
        <td><input type="text" class="input_txt valid" id="sexo_7" name="sexo_7" value="<?php echo @$sexo_7; ?>" /></td>
        <td><input type="text" class="input_txt valid" id="fecha_7" name="fecha_7" value="<?php echo @$fecha_7; ?>" /></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <div id="parto">
  
  <table class="table1" width="100%" border="0"><tr>
  <td width="18%">Edad gestacional :</td>
  <td width="28%" class="tablewhite"> <input type="text" id="edad_ges" name="edad_ges" value="<?php echo @$edad_ges; ?>" >
    
    semanas </td>
 <td width="13%">Control prenatal(si/no)   </td>
 <td width="41%" class="tablewhite">
  <input type="text" class="input_txt valid" id="control_p" name="control_p" value="<?php echo @$control_p; ?>" >  </td>
    </tr>
</table>
 </div></td>
</tr>

<input name="concepto" type="hidden" value="02" />
<tr class="oculta"><td colspan="5">&nbsp;</td>
</tr>
 <tr class="oculta">
   <td colspan="2">Forma realizaci�n acto quirurgico
   <td width="482" colspan="1" class="tablewhite">
     <select class="input_txt valid" id="forma" name="forma" value="<?php echo @$forma; ?>" >
    <option value=""> [ SELECCIONAR ]</option>
                    <?php
                    $sql = "Select * from acto";
                    $result = $conexion->EjecutarQuery($sql);
                    while ($row = mysql_fetch_array($result)) {
                        $style_s = "";
                        if ($row['id_acto'] == @$forma) {
                            $style_s = "selected";
                        }
                        echo "<option value='" . $row['id_acto'] . "' $style_s >" . $row['nombre'] . "</option>";
                    }
                    ?>
</select></td>
 </tr><tr><td colspan="5" class="tablewhite"><br /></td>
 </tr>
</table>

<?php echo @$button ?>
</form>
<br>
<br>


<a href='#' onclick='imprSelec("content-procedimiento", true)' class="no_print">Imprimir formulario</a>
<br>
</div>
</fieldset>