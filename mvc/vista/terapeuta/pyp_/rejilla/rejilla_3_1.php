<?php
if (isset($_REQUEST['guardar_hc_rejilla_3']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_hc_rejilla_3'] == 'new') {

$sql = "INSERT INTO hc_rejilla_3 (
`id_hc_rejilla_3`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`obje_pequeno`,
`bolsas`,
`bebesolo`,
`juegomenor`,
`quimicos`,
`almacenados`,
`estufas`,
`comida_vieja`,
`balcones`,
`vidrios`,
`juegan_solos`,
`cuchillos`,
`comida_caliente`,
`acceso_libre`,
`enchufes`,
`velas`,
`ropa_sucia`,
`manos`,
`basura`,
`trapos`,
`insectos`,
`animal_domestico`,
`polvo`,
`vivienda`,
`estufa2`,
`personas`,
`adultos`,
`cambios`,
`aguapotable`,
`alimentos_2`,
`tablapicar`,
`recipiente`,
`nobasuras`,
`extras`,
`letrina`,
`charcos`,
`toldillo`,
`descalzo`,
`juegotierra`,
`aseo_boca`,
`normas`,
`adulto21`,
`sin_asepsia`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['obje_pequeno']."' ,
'".$_REQUEST['bolsas']."' ,
'".$_REQUEST['bebesolo']."' ,
'".$_REQUEST['juegomenor']."' ,
'".$_REQUEST['quimicos']."' ,
'".$_REQUEST['almacenados']."' ,
'".$_REQUEST['estufas']."' ,
'".$_REQUEST['comida_vieja']."' ,
'".$_REQUEST['balcones']."' ,
'".$_REQUEST['vidrios']."' ,
'".$_REQUEST['juegan_solos']."' ,
'".$_REQUEST['cuchillos']."' ,
'".$_REQUEST['comida_caliente']."' ,
'".$_REQUEST['acceso_libre']."' ,
'".$_REQUEST['enchufes']."' ,
'".$_REQUEST['velas']."' ,
'".$_REQUEST['ropa_sucia']."' ,
'".$_REQUEST['manos']."' ,
'".$_REQUEST['basura']."' ,
'".$_REQUEST['trapos']."' ,
'".$_REQUEST['insectos']."' ,
'".$_REQUEST['animal_domestico']."' ,
'".$_REQUEST['polvo']."' ,
'".$_REQUEST['vivienda']."' ,
'".$_REQUEST['estufa2']."' ,
'".$_REQUEST['personas']."' ,
'".$_REQUEST['adultos']."' ,
'".$_REQUEST['cambios']."' ,
'".$_REQUEST['aguapotable']."' ,
'".$_REQUEST['alimentos_2']."' ,
'".$_REQUEST['tablapicar']."' ,
'".$_REQUEST['recipiente']."' ,
'".$_REQUEST['nobasuras']."' ,
'".$_REQUEST['extras']."' ,
'".$_REQUEST['letrina']."' ,
'".$_REQUEST['charcos']."' ,
'".$_REQUEST['toldillo']."' ,
'".$_REQUEST['descalzo']."' ,
'".$_REQUEST['juegotierra']."' ,
'".$_REQUEST['aseo_boca']."' ,
'".$_REQUEST['normas']."' ,
'".$_REQUEST['adulto21']."' ,
'".$_REQUEST['sin_asepsia']."'
) ";


} else if ($_REQUEST['id_hc_rejilla_3'] != '') {

$sql = "UPDATE hc_rejilla_3 set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`obje_pequeno` = '".$_REQUEST['obje_pequeno']."' ,
`bolsas` = '".$_REQUEST['bolsas']."' ,
`bebesolo` = '".$_REQUEST['bebesolo']."' ,
`juegomenor` = '".$_REQUEST['juegomenor']."' ,
`quimicos` = '".$_REQUEST['quimicos']."' ,
`almacenados` = '".$_REQUEST['almacenados']."' ,
`estufas` = '".$_REQUEST['estufas']."' ,
`comida_vieja` = '".$_REQUEST['comida_vieja']."' ,
`balcones` = '".$_REQUEST['balcones']."' ,
`vidrios` = '".$_REQUEST['vidrios']."' ,
`juegan_solos` = '".$_REQUEST['juegan_solos']."' ,
`cuchillos` = '".$_REQUEST['cuchillos']."' ,
`comida_caliente` = '".$_REQUEST['comida_caliente']."' ,
`acceso_libre` = '".$_REQUEST['acceso_libre']."' ,
`enchufes` = '".$_REQUEST['enchufes']."' ,
`velas` = '".$_REQUEST['velas']."' ,
`ropa_sucia` = '".$_REQUEST['ropa_sucia']."' ,
`manos` = '".$_REQUEST['manos']."' ,
`basura` = '".$_REQUEST['basura']."' ,
`trapos` = '".$_REQUEST['trapos']."' ,
`insectos` = '".$_REQUEST['insectos']."' ,
`animal_domestico` = '".$_REQUEST['animal_domestico']."' ,
`polvo` = '".$_REQUEST['polvo']."' ,
`vivienda` = '".$_REQUEST['vivienda']."' ,
`estufa2` = '".$_REQUEST['estufa2']."' ,
`personas` = '".$_REQUEST['personas']."' ,
`adultos` = '".$_REQUEST['adultos']."' ,
`cambios` = '".$_REQUEST['cambios']."' ,
`aguapotable` = '".$_REQUEST['aguapotable']."' ,
`alimentos_2` = '".$_REQUEST['alimentos_2']."' ,
`tablapicar` = '".$_REQUEST['tablapicar']."' ,
`recipiente` = '".$_REQUEST['recipiente']."' ,
`nobasuras` = '".$_REQUEST['nobasuras']."' ,
`extras` = '".$_REQUEST['extras']."' ,
`letrina` = '".$_REQUEST['letrina']."' ,
`charcos` = '".$_REQUEST['charcos']."' ,
`toldillo` = '".$_REQUEST['toldillo']."' ,
`descalzo` = '".$_REQUEST['descalzo']."' ,
`juegotierra` = '".$_REQUEST['juegotierra']."' ,
`aseo_boca` = '".$_REQUEST['aseo_boca']."' ,
`normas` = '".$_REQUEST['normas']."' ,
`adulto21` = '".$_REQUEST['adulto21']."' ,
`sin_asepsia` = '".$_REQUEST['sin_asepsia']."' WHERE `id_hc_rejilla_3` = '".$_REQUEST['id_hc_rejilla_3']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_hc_rejilla_3 = 'new';
$sql = "SELECT * from hc_rejilla_3 WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_hc_rejilla_3 = $row['id_hc_rejilla_3'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$obje_pequeno = $row['obje_pequeno'];
$bolsas = $row['bolsas'];
$bebesolo = $row['bebesolo'];
$juegomenor = $row['juegomenor'];
$quimicos = $row['quimicos'];
$almacenados = $row['almacenados'];
$estufas = $row['estufas'];
$comida_vieja = $row['comida_vieja'];
$balcones = $row['balcones'];
$vidrios = $row['vidrios'];
$juegan_solos = $row['juegan_solos'];
$cuchillos = $row['cuchillos'];
$comida_caliente = $row['comida_caliente'];
$acceso_libre = $row['acceso_libre'];
$enchufes = $row['enchufes'];
$velas = $row['velas'];
$ropa_sucia = $row['ropa_sucia'];
$manos = $row['manos'];
$basura = $row['basura'];
$trapos = $row['trapos'];
$insectos = $row['insectos'];
$animal_domestico = $row['animal_domestico'];
$polvo = $row['polvo'];
$vivienda = $row['vivienda'];
$estufa2 = $row['estufa2'];
$personas = $row['personas'];
$adultos = $row['adultos'];
$cambios = $row['cambios'];
$aguapotable = $row['aguapotable'];
$alimentos_2 = $row['alimentos_2'];
$tablapicar = $row['tablapicar'];
$recipiente = $row['recipiente'];
$nobasuras = $row['nobasuras'];
$extras = $row['extras'];
$letrina = $row['letrina'];
$charcos = $row['charcos'];
$toldillo = $row['toldillo'];
$descalzo = $row['descalzo'];
$juegotierra = $row['juegotierra'];
$aseo_boca = $row['aseo_boca'];
$normas = $row['normas'];
$adulto21 = $row['adulto21'];
$sin_asepsia = $row['sin_asepsia'];
break; }

?>
<script>

$(function(){

$("#close-hc_rejilla_3").click(function(){
$("#open-hc_rejilla_3").show();
$(this).hide();
$("#content-hc_rejilla_3").hide('slow');
});

$("#open-hc_rejilla_3").click(function(){
$("#close-hc_rejilla_3").show();
$(this).hide();
$("#content-hc_rejilla_3").show('slow');
});

});

</script>
<fieldset id="hc_rejilla_3">
<legend align="left"> <div class="arrow-c" id="close-hc_rejilla_3"></div> <div class="arrow-o" id="open-hc_rejilla_3" ></div> <font>Valoracion terapia ocupacional - hc_rejilla_3</font></legend>
<div id="content-hc_rejilla_3">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_hc_rejilla_3" id="guardar_hc_rejilla_3" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_hc_rejilla_3" name="form_hc_rejilla_3" action="<?php echo @$action_form_hc_rejilla_3 ?>#hc_rejilla_3" method="post">

<input type="hidden" id="id_hc_rejilla_3" name="id_hc_rejilla_3" value="<?php echo @$id_hc_rejilla_3 ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="id_hc_rejilla_3" name="id_hc_rejilla_3" value="<?php echo @$id_hc_rejilla_3; ?>" />


<p align="center">3. Evaluación de la condiciones ambientales y de higiene</p>

<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="102" />
  <col width="252" />
  <col width="66" />
  <col width="106" />
  <col width="120" />
  <tr height="27">
    <td height="27" width="126">PROBLEMA</td>
    <td width="385">SIGNOS DE    ATENCIÓN</td>
    <td width="68">SI / NO</td>
    <td width="145">CLASIFICAR</td>
    <td width="187">¿QUÉ HACER?</td>
  </tr>
  <tr height="27">
    <td rowspan="16" height="414" width="126">BUSQUE RIESGOS DE<br />
    ACCIDENTES EN EL HOGAR</td>
    <td width="385">Objetos    pequeños al alcance de los niños y niñas: botones, cuerdas, monedas</td>
    <td width="68"><input type="text" class="input_txt valid" id="obje_pequeno" name="obje_pequeno" value="<?php echo @$obje_pequeno; ?>" /></td>
    <td rowspan="4" width="145">RIESGO DE<br />
      AHOGAMIENTO<br />    </td>
    <td rowspan="16" width="187">*Enseñar medidas preventivas<br />
    * Coordinar educación comunitaria en          prevención de accidentes</td>
  </tr>
  <tr height="19">
    <td height="19" width="385">Se permite el juego con bolsas plasticas</td>
    <td width="68"><input type="text" class="input_txt valid" id="bolsas" name="bolsas" value="<?php echo @$bolsas; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="385">Se deja al bebé solo mientras come</td>
    <td width="68"><input type="text" class="input_txt valid" id="bebesolo" name="bebesolo" value="<?php echo @$bebesolo; ?>" /></td>
  </tr>
  <tr height="27">
    <td height="27" width="385">Se permite el juego del menor cerca a piscinas,    aljibes, lavaderos, entre otros</td>
    <td width="68"><input type="text" class="input_txt valid" id="juegomenor" name="juegomenor" value="<?php echo @$juegomenor; ?>" /></td>
  </tr>
  <tr height="27">
    <td height="27" width="385">Productos químicos al alcance de niños y niñas</td>
    <td width="68"><input type="text" class="input_txt valid" id="quimicos" name="quimicos" value="<?php echo @$quimicos; ?>" /></td>
    <td rowspan="4" width="145">RIESGO DE<br />
      INTOXICACIÓN<br />    </td>
  </tr>
  <tr height="27">
    <td height="27" width="385">Están almacenados los alimentos junto con los    productos químicos</td>
    <td width="68"><input type="text" class="input_txt valid" id="almacenados" name="almacenados" value="<?php echo @$almacenados; ?>" /></td>
  </tr>
  <tr height="27">
    <td height="27" width="385">Hay estufas, hornillas y/o calentadores en    habitaciones cerradas</td>
    <td width="68"><input type="text" class="input_txt valid" id="estufas" name="estufas" value="<?php echo @$estufas; ?>" /></td>
  </tr>
  <tr height="27">
    <td height="27" width="385">Los niños y niñas se alimentan con comidas    guardas con tiempo</td>
    <td width="68"><input type="text" class="input_txt valid" id="comida_vieja" name="comida_vieja" value="<?php echo @$comida_vieja; ?>" /></td>
  </tr>
  <tr height="27">
    <td height="27" width="385">Existen balcones, escaleras y ventanas sin    protección</td>
    <td width="68"><input type="text" class="input_txt valid" id="balcones" name="balcones" value="<?php echo @$balcones; ?>" /></td>
    <td rowspan="4" width="145">RIESGO DE TRAUMA O HERIDA<br />    </td>
  </tr>
  <tr height="27">
    <td height="27" width="385">Existen vidrios rotos al alcance de los niños y    niñas</td>
    <td width="68"><input type="text" class="input_txt valid" id="vidrios" name="vidrios" value="<?php echo @$vidrios; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="385">Los niños y niñas juegan solos</td>
    <td width="68"><input type="text" class="input_txt valid" id="juegan_solos" name="juegan_solos" value="<?php echo @$juegan_solos; ?>" /></td>
  </tr>
  <tr height="41">
    <td height="41" width="385">Objetos cortopunzantes como cuchillos,    puntillas y serruchos, están al alcance de los niños y niñas</td>
    <td width="68"><input type="text" class="input_txt valid" id="cuchillos" name="cuchillos" value="<?php echo @$cuchillos; ?>" /></td>
  </tr>
  <tr height="27">
    <td height="27" width="385">Se les sirve la comida muy caliente a los niños    y niñas</td>
    <td width="68"><input type="text" class="input_txt valid" id="comida_caliente" name="comida_caliente" value="<?php echo @$comida_caliente; ?>" /></td>
    <td rowspan="4" width="145">RIESGO DE<br />
      QUEMADURAS<br />    </td>
  </tr>
  <tr height="27">
    <td height="27" width="385">Los niños y niñas tienen acceso libre a la    cocina</td>
    <td width="68"><input type="text" class="input_txt valid" id="acceso_libre" name="acceso_libre" value="<?php echo @$acceso_libre; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="385">Los enchufes no está protegidos</td>
    <td width="68"><input type="text" class="input_txt valid" id="enchufes" name="enchufes" value="<?php echo @$enchufes; ?>" /></td>
  </tr>
  <tr height="27">
    <td height="27" width="385">Hay velas o veladoras prendidas dentro de casa</td>
    <td width="68"><input type="text" class="input_txt valid" id="velas" name="velas" value="<?php echo @$velas; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="102" />
  <col width="252" />
  <col width="66" />
  <col width="106" />
  <col width="120" />
  <tr height="19">
    <td rowspan="27" height="620" width="141">BUSQUE PROBLEMAS<br />
      AMBIENTALES Y DE<br />
      HIGIENE EN EL HOGAR<br />    </td>
    <td width="283">Niños o niñas o    adultos con ropa sucia</td>
    <td width="116"><input type="text" class="input_txt valid" id="ropa_sucia" name="ropa_sucia" value="<?php echo @$ropa_sucia; ?>" /></td>
    <td rowspan="2" width="242">ASEO PERSONAL</td>
    <td rowspan="27" width="170">* Enseñar medidas preventivas<br />
      * Coordinar acciones con la comunidad y con los organismos de salud para la    educación y prevención de riesgos ambientales que afecten la   salud de los niños y niñas<br />    </td>
  </tr>
  <tr height="27">
    <td height="27" width="283"> niños o    niñas o adultos con manos y uñas sucias</td>
    <td width="116"><input type="text" class="input_txt valid" id="manos" name="manos" value="<?php echo @$manos; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="283">Basura y desorden en la vivienda</td>
    <td width="116"><input type="text" class="input_txt valid" id="basura" name="basura" value="<?php echo @$basura; ?>" /></td>
    <td rowspan="2" width="242">ASEO EN LA VIVIENDA</td>
  </tr>
  <tr height="19">
    <td height="19" width="283">Uso de los trapos sucios en la cocina</td>
    <td width="116"><input type="text" class="input_txt valid" id="trapos" name="trapos" value="<?php echo @$trapos; ?>" /></td>
  </tr>
  <tr height="27">
    <td height="27" width="283"> Insectos    o ratones en la vivienda o alrededores</td>
    <td width="116"><input type="text" class="input_txt valid" id="insectos" name="insectos" value="<?php echo @$insectos; ?>" /></td>
    <td width="242">PRESENCIA    DE INSECTOS</td>
  </tr>
  <tr height="54">
    <td height="54" width="283">Animales domésticos dentro de la vivienda</td>
    <td width="116"><input type="text" class="input_txt valid" id="animal_domestico" name="animal_domestico" value="<?php echo @$animal_domestico; ?>" /></td>
    <td width="242">CONVIVENCIA    INADECUADA  CON MASCOTAS<br />    </td>
  </tr>
  <tr height="19">
    <td height="19" width="283">Polvo acumulado en la superficie de objetos</td>
    <td width="116"><input type="text" class="input_txt valid" id="polvo" name="polvo" value="<?php echo @$polvo; ?>" /></td>
    <td rowspan="6" width="242">RIESGO DE GRIPA Y TOS</td>
  </tr>
  <tr height="19">
    <td height="19" width="283">Vivienda sin iluminación ni ventilación</td>
    <td width="116"><input type="text" class="input_txt valid" id="vivienda" name="vivienda" value="<?php echo @$vivienda; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="283">Estufa o bracero ubicado en la habitación</td>
    <td width="116"><input type="text" class="input_txt valid" id="estufa2" name="estufa2" value="<?php echo @$estufa2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="283">Personas que fuman dentro de la vivienda</td>
    <td width="116"><input type="text" class="input_txt valid" id="personas" name="personas" value="<?php echo @$personas; ?>" /></td>
  </tr>
  <tr height="27">
    <td height="27" width="283">Adultos con tos o gripa que cuidan o alimentan    al niño o niña</td>
    <td width="116"><input type="text" class="input_txt valid" id="adultos" name="adultos" value="<?php echo @$adultos; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="283">Cambios bruscos de temperatura</td>
    <td width="116"><input type="text" class="input_txt valid" id="cambios" name="cambios" value="<?php echo @$cambios; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="283">Se consume agua no potable</td>
    <td width="116"><input type="text" class="input_txt valid" id="aguapotable" name="aguapotable" value="<?php echo @$aguapotable; ?>" /></td>
    <td width="242">AGUA    POTABLE</td>
  </tr>
  <tr height="19">
    <td height="19" width="283">Alimentos sin almacenar y no cubiertos</td>
    <td width="116"><input type="text" class="input_txt valid" id="alimentos_2" name="alimentos_2" value="<?php echo @$alimentos_2; ?>" /></td>
    <td rowspan="2" width="242">MANEJO INADECUADO<br />
    DE ALIMENTOS</td>
  </tr>
  <tr height="19">
    <td height="19" width="283">Tabla de picar y utensilios de cocina sucios</td>
    <td width="116"><input type="text" class="input_txt valid" id="tablapicar" name="tablapicar" value="<?php echo @$tablapicar; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="283">Recipientes de Basura destapados</td>
    <td width="116"><input type="text" class="input_txt valid" id="recipiente" name="recipiente" value="<?php echo @$recipiente; ?>" /></td>
    <td rowspan="2" width="242">MANEJO INADECUADO<br />
    DE BASURAS</td>
  </tr>
  <tr height="19">
    <td height="19" width="283">No recolección de basuras</td>
    <td width="116"><input type="text" class="input_txt valid" id="nobasuras" name="nobasuras" value="<?php echo @$nobasuras; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="283">Eliminación de excretas a campo abierto</td>
    <td width="116"><input type="text" class="input_txt valid" id="extras" name="extras" value="<?php echo @$extras; ?>" /></td>
    <td rowspan="2" width="242">MANEJO INADECUADO<br />
    DE HECES</td>
  </tr>
  <tr height="27">
    <td height="27" width="283">Letrina o pozo séptico mal ubicados y sin    mantenimiento</td>
    <td width="116"><input type="text" class="input_txt valid" id="letrina" name="letrina" value="<?php echo @$letrina; ?>" /></td>
  </tr>
  <tr height="27">
    <td height="27" width="283">Charcos, zanjas y objetos donde se acumula agua</td>
    <td width="116"><input type="text" class="input_txt valid" id="charcos" name="charcos" value="<?php echo @$charcos; ?>" /></td>
    <td rowspan="4" width="242">RIESGO DE DENGUE Y<br />
    MALARIA</td>
  </tr>
  <tr height="19">
    <td height="19" width="283">No usan toldillo</td>
    <td width="116"><input type="text" class="input_txt valid" id="toldillo" name="toldillo" value="<?php echo @$toldillo; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="283">Niños o niñas descalzos</td>
    <td width="116"><input type="text" class="input_txt valid" id="descalzo" name="descalzo" value="<?php echo @$descalzo; ?>" /></td>
  </tr>
  <tr height="27">
    <td height="27" width="283">Niños o niñas juegan con tierra y no se lavan    las manos</td>
    <td width="116"><input type="text" class="input_txt valid" id="juegotierra" name="juegotierra" value="<?php echo @$juegotierra; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="283">Niños y niñas sin adecuado aseo bucal</td>
    <td width="116"><input type="text" class="input_txt valid" id="aseo_boca" name="aseo_boca" value="<?php echo @$aseo_boca; ?>" /></td>
    <td rowspan="2" width="242">MANEJO INADECUADO<br />
    DE LA SALUD BUCAL</td>
  </tr>
  <tr height="27">
    <td height="27" width="283">Desconocimiento de normas de aseo de encías en    bebés</td>
    <td width="116"><input type="text" class="input_txt valid" id="normas" name="normas" value="<?php echo @$normas; ?>" /></td>
  </tr>
  <tr height="27">
    <td height="27" width="283">Adultos con tos por más de 21 días sin    observación médica</td>
    <td width="116"><input type="text" class="input_txt valid" id="adulto21" name="adulto21" value="<?php echo @$adulto21; ?>" /></td>
    <td rowspan="2" width="242">MANEJO INADECUADO<br />
    DE LA TUBERCULOSIS</td>
  </tr>
  <tr height="27">
    <td height="27" width="283">Niños y adultos con tos en contacto permanente    sin medidas de asepsia</td>
    <td width="116"><input type="text" class="input_txt valid" id="sin_asepsia" name="sin_asepsia" value="<?php echo @$sin_asepsia; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="983" border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="102" />
  <col width="252" />
  <col width="66" />
  <col width="106" />
  <col width="120" />
  <tr height="41">
    <td colspan="2" height="41">AUSENCIA    DE RIESGOS AMBIENTALES Y DE HIGIENE EN EL HOGAR</td>
    <td width="185">CONDICIONES    AMBIENTALES Y DE<br />
      HIGIENE ADECUADAS</td>
    <td colspan="2" width="309">*Hacer    consejería en medidas preventivas<br />
      *Coordinar acciones comunitarias de promoción<br />
      de la salud de niños y niñas en    la familia</td>
  </tr>
  <tr height="54">
    <td height="54" width="233">PREGUNTE POR LA SALUD DE LA<br />
      MADRE O CUIDADOR A CARGO DE LOS            NIÑOS Y NIÑAS<br />
    </td>
    <td width="254">*La    madre o cuidador presenta<br />
      alguna enfermedad</td>
    <td width="185">PROBLEMAS    DE SALUD DE LA MADRE</td>
    <td colspan="2" width="309">*Remita    a la institución de salud<br />
      * Haga seguimiento de la salud de la madre o cuidador</td>
  </tr>
</table>

<?php echo @$button ?>
</form><br>
</div>
</fieldset>