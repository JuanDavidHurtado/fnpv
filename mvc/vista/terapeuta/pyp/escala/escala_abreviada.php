<?php
if (isset($_REQUEST['guardar_escala_abreviada']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_escala_abreviada'] == 'new') {

$sql = "INSERT INTO escala_abreviada (
`id_escala_abreviada`,
`id_usuario`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`totalab_a`,
`totalab_b`,
`totalab_c`,
`totalab_d`,
`edad_meses_ab`,
`esala_a1`,
`esala_a2`,
`esala_a3`,
`esala_a4`,
`esala_a5`,
`esala_a6`,
`esala_a7`,
`esala_a8`,
`esala_a9`,
`esala_a10`,
`esala_a11`,
`esala_a12`,
`esala_a13`,
`esala_a14`,
`esala_a15`,
`esala_b1`,
`esala_b2`,
`esala_b3`,
`esala_b4`,
`esala_b5`,
`esala_b6`,
`esala_b7`,
`esala_b8`,
`esala_b9`,
`esala_b10`,
`esala_b11`,
`esala_b12`,
`esala_b13`,
`esala_b14`,
`esala_b15`,
`esala_c1`,
`esala_c2`,
`esala_c3`,
`esala_c4`,
`esala_c5`,
`esala_c6`,
`esala_c7`,
`esala_c8`,
`esala_c9`,
`esala_c10`,
`esala_c11`,
`esala_c12`,
`esala_c13`,
`esala_c14`,
`esala_c15`,
`esala_d1`,
`esala_d2`,
`esala_d3`,
`esala_d4`,
`esala_d5`,
`esala_d6`,
`esala_d7`,
`esala_d8`,
`esala_d9`,
`esala_d10`,
`esala_d11`,
`esala_d12`,
`esala_d13`,
`esala_d14`,
`esala_d15`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['totalab_a']."' ,
'".$_REQUEST['totalab_b']."' ,
'".$_REQUEST['totalab_c']."' ,
'".$_REQUEST['totalab_d']."' ,
'".$_REQUEST['edad_meses_ab']."' ,
'".$_REQUEST['esala_a1']."' ,
'".$_REQUEST['esala_a2']."' ,
'".$_REQUEST['esala_a3']."' ,
'".$_REQUEST['esala_a4']."' ,
'".$_REQUEST['esala_a5']."' ,
'".$_REQUEST['esala_a6']."' ,
'".$_REQUEST['esala_a7']."' ,
'".$_REQUEST['esala_a8']."' ,
'".$_REQUEST['esala_a9']."' ,
'".$_REQUEST['esala_a10']."' ,
'".$_REQUEST['esala_a11']."' ,
'".$_REQUEST['esala_a12']."' ,
'".$_REQUEST['esala_a13']."' ,
'".$_REQUEST['esala_a14']."' ,
'".$_REQUEST['esala_a15']."' ,
'".$_REQUEST['esala_b1']."' ,
'".$_REQUEST['esala_b2']."' ,
'".$_REQUEST['esala_b3']."' ,
'".$_REQUEST['esala_b4']."' ,
'".$_REQUEST['esala_b5']."' ,
'".$_REQUEST['esala_b6']."' ,
'".$_REQUEST['esala_b7']."' ,
'".$_REQUEST['esala_b8']."' ,
'".$_REQUEST['esala_b9']."' ,
'".$_REQUEST['esala_b10']."' ,
'".$_REQUEST['esala_b11']."' ,
'".$_REQUEST['esala_b12']."' ,
'".$_REQUEST['esala_b13']."' ,
'".$_REQUEST['esala_b14']."' ,
'".$_REQUEST['esala_b15']."' ,
'".$_REQUEST['esala_c1']."' ,
'".$_REQUEST['esala_c2']."' ,
'".$_REQUEST['esala_c3']."' ,
'".$_REQUEST['esala_c4']."' ,
'".$_REQUEST['esala_c5']."' ,
'".$_REQUEST['esala_c6']."' ,
'".$_REQUEST['esala_c7']."' ,
'".$_REQUEST['esala_c8']."' ,
'".$_REQUEST['esala_c9']."' ,
'".$_REQUEST['esala_c10']."' ,
'".$_REQUEST['esala_c11']."' ,
'".$_REQUEST['esala_c12']."' ,
'".$_REQUEST['esala_c13']."' ,
'".$_REQUEST['esala_c14']."' ,
'".$_REQUEST['esala_c15']."' ,
'".$_REQUEST['esala_d1']."' ,
'".$_REQUEST['esala_d2']."' ,
'".$_REQUEST['esala_d3']."' ,
'".$_REQUEST['esala_d4']."' ,
'".$_REQUEST['esala_d5']."' ,
'".$_REQUEST['esala_d6']."' ,
'".$_REQUEST['esala_d7']."' ,
'".$_REQUEST['esala_d8']."' ,
'".$_REQUEST['esala_d9']."' ,
'".$_REQUEST['esala_d10']."' ,
'".$_REQUEST['esala_d11']."' ,
'".$_REQUEST['esala_d12']."' ,
'".$_REQUEST['esala_d13']."' ,
'".$_REQUEST['esala_d14']."' ,
'".$_REQUEST['esala_d15']."'
) ";


} else if ($_REQUEST['id_escala_abreviada'] != '') {

$sql = "UPDATE escala_abreviada set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`totalab_a` = '".$_REQUEST['totalab_a']."' ,
`totalab_b` = '".$_REQUEST['totalab_b']."' ,
`totalab_c` = '".$_REQUEST['totalab_c']."' ,
`totalab_d` = '".$_REQUEST['totalab_d']."' ,
`edad_meses_ab` = '".$_REQUEST['edad_meses_ab']."' ,
`esala_a1` = '".$_REQUEST['esala_a1']."' ,
`esala_a2` = '".$_REQUEST['esala_a2']."' ,
`esala_a3` = '".$_REQUEST['esala_a3']."' ,
`esala_a4` = '".$_REQUEST['esala_a4']."' ,
`esala_a5` = '".$_REQUEST['esala_a5']."' ,
`esala_a6` = '".$_REQUEST['esala_a6']."' ,
`esala_a7` = '".$_REQUEST['esala_a7']."' ,
`esala_a8` = '".$_REQUEST['esala_a8']."' ,
`esala_a9` = '".$_REQUEST['esala_a9']."' ,
`esala_a10` = '".$_REQUEST['esala_a10']."' ,
`esala_a11` = '".$_REQUEST['esala_a11']."' ,
`esala_a12` = '".$_REQUEST['esala_a12']."' ,
`esala_a13` = '".$_REQUEST['esala_a13']."' ,
`esala_a14` = '".$_REQUEST['esala_a14']."' ,
`esala_a15` = '".$_REQUEST['esala_a15']."' ,
`esala_b1` = '".$_REQUEST['esala_b1']."' ,
`esala_b2` = '".$_REQUEST['esala_b2']."' ,
`esala_b3` = '".$_REQUEST['esala_b3']."' ,
`esala_b4` = '".$_REQUEST['esala_b4']."' ,
`esala_b5` = '".$_REQUEST['esala_b5']."' ,
`esala_b6` = '".$_REQUEST['esala_b6']."' ,
`esala_b7` = '".$_REQUEST['esala_b7']."' ,
`esala_b8` = '".$_REQUEST['esala_b8']."' ,
`esala_b9` = '".$_REQUEST['esala_b9']."' ,
`esala_b10` = '".$_REQUEST['esala_b10']."' ,
`esala_b11` = '".$_REQUEST['esala_b11']."' ,
`esala_b12` = '".$_REQUEST['esala_b12']."' ,
`esala_b13` = '".$_REQUEST['esala_b13']."' ,
`esala_b14` = '".$_REQUEST['esala_b14']."' ,
`esala_b15` = '".$_REQUEST['esala_b15']."' ,
`esala_c1` = '".$_REQUEST['esala_c1']."' ,
`esala_c2` = '".$_REQUEST['esala_c2']."' ,
`esala_c3` = '".$_REQUEST['esala_c3']."' ,
`esala_c4` = '".$_REQUEST['esala_c4']."' ,
`esala_c5` = '".$_REQUEST['esala_c5']."' ,
`esala_c6` = '".$_REQUEST['esala_c6']."' ,
`esala_c7` = '".$_REQUEST['esala_c7']."' ,
`esala_c8` = '".$_REQUEST['esala_c8']."' ,
`esala_c9` = '".$_REQUEST['esala_c9']."' ,
`esala_c10` = '".$_REQUEST['esala_c10']."' ,
`esala_c11` = '".$_REQUEST['esala_c11']."' ,
`esala_c12` = '".$_REQUEST['esala_c12']."' ,
`esala_c13` = '".$_REQUEST['esala_c13']."' ,
`esala_c14` = '".$_REQUEST['esala_c14']."' ,
`esala_c15` = '".$_REQUEST['esala_c15']."' ,
`esala_d1` = '".$_REQUEST['esala_d1']."' ,
`esala_d2` = '".$_REQUEST['esala_d2']."' ,
`esala_d3` = '".$_REQUEST['esala_d3']."' ,
`esala_d4` = '".$_REQUEST['esala_d4']."' ,
`esala_d5` = '".$_REQUEST['esala_d5']."' ,
`esala_d6` = '".$_REQUEST['esala_d6']."' ,
`esala_d7` = '".$_REQUEST['esala_d7']."' ,
`esala_d8` = '".$_REQUEST['esala_d8']."' ,
`esala_d9` = '".$_REQUEST['esala_d9']."' ,
`esala_d10` = '".$_REQUEST['esala_d10']."' ,
`esala_d11` = '".$_REQUEST['esala_d11']."' ,
`esala_d12` = '".$_REQUEST['esala_d12']."' ,
`esala_d13` = '".$_REQUEST['esala_d13']."' ,
`esala_d14` = '".$_REQUEST['esala_d14']."' ,
`esala_d15` = '".$_REQUEST['esala_d15']."' WHERE `id_escala_abreviada` = '".$_REQUEST['id_escala_abreviada']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_escala_abreviada = 'new';
$sql = "SELECT * from escala_abreviada WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_escala_abreviada = $row['id_escala_abreviada'];
$id_usuario = $row['id_usuario'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$totalab_a = $row['totalab_a'];
$totalab_b = $row['totalab_b'];
$totalab_c = $row['totalab_c'];
$totalab_d = $row['totalab_d'];
$edad_meses_ab = $row['edad_meses_ab'];
$esala_a1 = $row['esala_a1'];
$esala_a2 = $row['esala_a2'];
$esala_a3 = $row['esala_a3'];
$esala_a4 = $row['esala_a4'];
$esala_a5 = $row['esala_a5'];
$esala_a6 = $row['esala_a6'];
$esala_a7 = $row['esala_a7'];
$esala_a8 = $row['esala_a8'];
$esala_a9 = $row['esala_a9'];
$esala_a10 = $row['esala_a10'];
$esala_a11 = $row['esala_a11'];
$esala_a12 = $row['esala_a12'];
$esala_a13 = $row['esala_a13'];
$esala_a14 = $row['esala_a14'];
$esala_a15 = $row['esala_a15'];
$esala_b1 = $row['esala_b1'];
$esala_b2 = $row['esala_b2'];
$esala_b3 = $row['esala_b3'];
$esala_b4 = $row['esala_b4'];
$esala_b5 = $row['esala_b5'];
$esala_b6 = $row['esala_b6'];
$esala_b7 = $row['esala_b7'];
$esala_b8 = $row['esala_b8'];
$esala_b9 = $row['esala_b9'];
$esala_b10 = $row['esala_b10'];
$esala_b11 = $row['esala_b11'];
$esala_b12 = $row['esala_b12'];
$esala_b13 = $row['esala_b13'];
$esala_b14 = $row['esala_b14'];
$esala_b15 = $row['esala_b15'];
$esala_c1 = $row['esala_c1'];
$esala_c2 = $row['esala_c2'];
$esala_c3 = $row['esala_c3'];
$esala_c4 = $row['esala_c4'];
$esala_c5 = $row['esala_c5'];
$esala_c6 = $row['esala_c6'];
$esala_c7 = $row['esala_c7'];
$esala_c8 = $row['esala_c8'];
$esala_c9 = $row['esala_c9'];
$esala_c10 = $row['esala_c10'];
$esala_c11 = $row['esala_c11'];
$esala_c12 = $row['esala_c12'];
$esala_c13 = $row['esala_c13'];
$esala_c14 = $row['esala_c14'];
$esala_c15 = $row['esala_c15'];
$esala_d1 = $row['esala_d1'];
$esala_d2 = $row['esala_d2'];
$esala_d3 = $row['esala_d3'];
$esala_d4 = $row['esala_d4'];
$esala_d5 = $row['esala_d5'];
$esala_d6 = $row['esala_d6'];
$esala_d7 = $row['esala_d7'];
$esala_d8 = $row['esala_d8'];
$esala_d9 = $row['esala_d9'];
$esala_d10 = $row['esala_d10'];
$esala_d11 = $row['esala_d11'];
$esala_d12 = $row['esala_d12'];
$esala_d13 = $row['esala_d13'];
$esala_d14 = $row['esala_d14'];
$esala_d15 = $row['esala_d15'];
break; }

?>
<script>

$(function(){

$("#close-escala_abreviada").click(function(){
$("#open-escala_abreviada").show();
$(this).hide();
$("#content-escala_abreviada").hide('slow');
});

$("#open-escala_abreviada").click(function(){
$("#close-escala_abreviada").show();
$(this).hide();
$("#content-escala_abreviada").show('slow');
});

});

</script>

<script>


function sumar_escala(letra){

var valor_s=0;
var valorx=0;


    for(c=1; c<=15; c++){

       valorx=document.getElementById('esala_'+letra+c).value;

       if(valorx==""){
           valorx=0;
            document.getElementById('esala_'+letra+c).value=0;
       }
       valor_s =valor_s+parseInt(valorx);
       
    }

document.getElementById('totalab_'+letra).value=valor_s;

}

</script>
<fieldset id="escala_abreviada">
<legend align="left"> <div class="arrow-c" id="close-escala_abreviada"></div> <div class="arrow-o" id="open-escala_abreviada" ></div> <font>ESCALA ABREVIADA DE DESARROLLO (EAD-1)</font></legend>
<div id="content-escala_abreviada">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_escala_abreviada" id="guardar_escala_abreviada" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_escala_abreviada" name="form_escala_abreviada" action="<?php echo @$action_form_escala_abreviada ?>#escala_abreviada" method="post">

<input type="hidden" id="id_escala_abreviada" name="id_escala_abreviada" value="<?php echo @$id_escala_abreviada ?>" />
<input type="hidden" class="input_txt valid" id="id_escala_abreviada" name="id_escala_abreviada" value="<?php echo @$id_escala_abreviada; ?>" />




<p align="center"><strong>ESCALA ABREVIADA DE DESARROLLO (EAD-1)</strong></p>

<table border="0" align="center" cellpadding="0" cellspacing="0"  class="data">

    <tr "19">
      <td width="122" "22" "135">EDAD MESES</td>
      <td width="47" "59">ITEM</td>
      <td width="533" "329">A. MOTRICIDAD GRUESA</td>
      <td width="202">ANOTE EDAD MESES PARA CADA EVALUACION</td>
    </tr>


    <tr "19">
      <td "19" "135">&lt;1</td>
      <td "59">0</td>
      <td "329">Patea vigorosamente</td>
      <td "191"><input type="text" class="input_txt valid" id="esala_a1" name="esala_a1" value="<?php echo @$esala_a1; ?>" /></td>
    </tr>
    <tr "19">
      <td rowspan="3" "60" "135">1 A 3</td>
      <td "59">1</td>
      <td "329">Levanta la cabeza en prona</td>
      <td rowspan="3" "191"><input type="text" class="input_txt valid" id="esala_a2" name="esala_a2" value="<?php echo @$esala_a2; ?>" /></td>
    </tr>
    <tr "19">
      <td "22" "59">2</td>
      <td "329">Levanta cabeza y pecho en prona</td>
    </tr>
    <tr "22">
      <td "44" "59">3</td>
      <td "329">Sostiene cabeza al levantarlo de los brazos</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "135">4 A 6</td>
      <td "59">4</td>
      <td "329">Control de cabeza sentado</td>
      <td rowspan="3" "191"><input type="text" class="input_txt valid" id="esala_a3" name="esala_a3" value="<?php echo @$esala_a3; ?>" /></td>
    </tr>
    <tr "19">
      <td "22" "59">5</td>
      <td "329">Se voltea de un lado a otro</td>
    </tr>
    <tr "19">
      <td "22" "59">6</td>
      <td "329">Intenta sentarse solo</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "135">7 A 9</td>
      <td "59">7</td>
      <td "329">Se sostiene sentado con ayuda</td>
      <td rowspan="3" "191"><input type="text" class="input_txt valid" id="esala_a4" name="esala_a4" value="<?php echo @$esala_a4; ?>" /></td>
    </tr>
    <tr "19">
      <td "22" "59">8</td>
      <td "329">Se arrastra en posición prona</td>
    </tr>
    <tr "19">
      <td "22" "59">9</td>
      <td "329">Se sienta por si solo</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "135">10 A 12</td>
      <td "59">10</td>
      <td "329">Gatea bien</td>
      <td rowspan="3" "191"><input type="text" class="input_txt valid" id="esala_a5" name="esala_a5" value="<?php echo @$esala_a5; ?>" /></td>
    </tr>
    <tr "19">
      <td "22" "59">11</td>
      <td "329">Se agarra y se sostiene de píe</td>
    </tr>
    <tr "19">
      <td "22" "59">12</td>
      <td "329">Se para solo</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "135">13 A 18</td>
      <td "59">13</td>
      <td "329">Da pasitos solo</td>
      <td rowspan="3" "191"><input type="text" class="input_txt valid" id="esala_a6" name="esala_a6" value="<?php echo @$esala_a6; ?>" /></td>
    </tr>
    <tr "19">
      <td "22" "59">14</td>
      <td "329">Camina bien solo</td>
    </tr>
    <tr "19">
      <td "22" "59">15</td>
      <td "329">Corre</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "135">19 A 24</td>
      <td "59">16</td>
      <td "329">Patea la pelota</td>
      <td rowspan="3" "191"><input type="text" class="input_txt valid" id="esala_a7" name="esala_a7" value="<?php echo @$esala_a7; ?>" /></td>
    </tr>
    <tr "19">
      <td "22" "59">17</td>
      <td "329">Lanza pelota con las manos</td>
    </tr>
    <tr "19">
      <td "22" "59">18</td>
      <td "329">Salta en los dos pies</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "135">25 A 36</td>
      <td "59">19</td>
      <td "329">Se empina en ambos pies</td>
      <td rowspan="3" "191"><input type="text" class="input_txt valid" id="esala_a8" name="esala_a8" value="<?php echo @$esala_a8; ?>" /></td>
    </tr>
    <tr "19">
      <td "22" "59">20</td>
      <td "329">Camina hacia atrás</td>
    </tr>
    <tr "19">
      <td "22" "59">21</td>
      <td "329">Se levanta sin usar las manos</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "135">37 A 48</td>
      <td "59">22</td>
      <td "329">Camina en la punta de los pies</td>
      <td rowspan="3" "191"><input type="text" class="input_txt valid" id="esala_a9" name="esala_a9" value="<?php echo @$esala_a9; ?>" /></td>
    </tr>
    <tr "19">
      <td "22" "59">23</td>
      <td "329">Se para en un solo pie</td>
    </tr>
    <tr "19">
      <td "22" "59">24</td>
      <td "329">Lanza y agarra la pelota</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "135"> 49 A 60</td>
      <td "59">25</td>
      <td "329">Camina en línea recta</td>
      <td rowspan="3" "191"><input type="text" class="input_txt valid" id="esala_a10" name="esala_a10" value="<?php echo @$esala_a10; ?>" /></td>
    </tr>
    <tr "19">
      <td "22" "59">26</td>
      <td "329">Tres o más pasos en un pie</td>
    </tr>
    <tr "19">
      <td "22" "59">27</td>
      <td "329">Hace rebotar y agarra la pelota</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "135">61 A 72</td>
      <td "59">28</td>
      <td "329">Salta a pie juntillas cuerda a 25 cm.</td>
      <td rowspan="3" "191"><input type="text" class="input_txt valid" id="esala_a11" name="esala_a11" value="<?php echo @$esala_a11; ?>" /></td>
    </tr>
    <tr "19">
      <td "22" "59">29</td>
      <td "329">Hace caballito alternando pies</td>
    </tr>
    <tr "19">
      <td "22" "59">30</td>
      <td "329">Salta desde 60 cm. de altura</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "135">73 A 84</td>
      <td "59">31</td>
      <td "329">Juega golosa</td>
      <td rowspan="3" "191"><input type="text" class="input_txt valid" id="esala_a12" name="esala_a12" value="<?php echo @$esala_a12; ?>" /></td>
    </tr>
    <tr "19">
      <td "22" "59">32</td>
      <td "329">Hace construcción rudimentaria</td>
    </tr>
    <tr "19">
      <td "22" "59">33</td>
      <td "329">Salta alternando los pies</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "135">85 A 96</td>
      <td "59">34</td>
      <td "329">Abre y cierra las manos alternadamente</td>
      <td rowspan="3" "191"><input type="text" class="input_txt valid" id="esala_a13" name="esala_a13" value="<?php echo @$esala_a13; ?>" /></td>
    </tr>
    <tr "19">
      <td "22" "59">35</td>
      <td "329">Marcha sin perder el ritmo</td>
    </tr>
    <tr "19">
      <td "22" "59">36</td>
      <td "329">Salta cuerda</td>
    </tr>
    <tr "22">
      <td rowspan="3" "63" "135">108</td>
      <td "59">37</td>
      <td "329">Gran    habilidad de sus movimientos. Son más seguros y suaves</td>
      <td rowspan="3" "191"><input type="text" class="input_txt valid" id="esala_a14" name="esala_a14" value="<?php echo @$esala_a14; ?>" /></td>
    </tr>
    <tr "22">
      <td "63" "59">38</td>
      <td "329">Cuando    esta sentado es difícil que se quede quieto</td>
    </tr>
    <tr "19">
      <td "22" "59">39</td>
      <td "329">Violento en juegos al aire libre</td>
    </tr>
    <tr "22">
      <td rowspan="3" "63" "135">120</td>
      <td "59">40</td>
      <td "329">Su cuerpo ya esta preparado para cualquier    tipo de deporte</td>
      <td rowspan="3" "191"><input type="text" class="input_txt valid" id="esala_a15" name="esala_a15" value="<?php echo @$esala_a15; ?>" /></td>
    </tr>
    <tr "19">
      <td "22" "59">41</td>
      <td "329">Realiza muchas actividades al aire libre</td>
    </tr>
    <tr "22">
      <td "63" "59">42</td>
      <td "329">Con los ojos cerrados se mantiene de    puntillas durante 15 segundos</td>
    </tr>
  </table>
<p align="center"> <input type="button" name="Sumar" value="Sumar" onclick="sumar_escala('a')"/>   </p>
<p>&nbsp;</p>
<table border="0" align="center"cellpadding="0" cellspacing="0"  class="data">

    <tr "19">
      <td width="122" "41" "150"> EDAD MESES</td>
      <td width="47" "85">ITEM</td>
      <td width="468" "397">B. MOTRICIDAD    ADAPTATIVA</td>
      <td width="249">ANOTE EDAD MESES PARA CADA EVALUACION</td>
    </tr>


    <tr "22">
      <td "22" "150">&lt;1</td>
      <td "85">0</td>
      <td "397">Sigue movimiento horizontal y vertical de un    objeto</td>
      <td "470"><input type="text" class="input_txt valid" id="esala_b1" name="esala_b1" value="<?php echo @$esala_b1; ?>" /></td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "150">1 A 3</td>
      <td "85">1</td>
      <td "397">Abre y mira sus manos</td>
      <td rowspan="3" "470"><input type="text" class="input_txt valid" id="esala_b2" name="esala_b2" value="<?php echo @$esala_b2; ?>" /></td>
    </tr>
    <tr "19">
      <td "22" "85">2</td>
      <td "397">Sostiene un objeto en la mano</td>
    </tr>
    <tr "19">
      <td "57" "85">3</td>
      <td "397">Se lleva objeto a la boca</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "150">4 A 6</td>
      <td "85">4</td>
      <td "397">Agarra objeto voluntaria mente</td>
      <td rowspan="3" "470"><input type="text" class="input_txt valid" id="esala_b3" name="esala_b3" value="<?php echo @$esala_b3; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "85">5</td>
      <td "397">Sostiene un objeto en cada mano</td>
    </tr>
    <tr "19">
      <td "57" "85">6</td>
      <td "397">Pasa un objeto de una mano a otra</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "150">7 A 9</td>
      <td "85">7</td>
      <td "397">Manipula varios objetos a la vez</td>
      <td rowspan="3" "470"><input type="text" class="input_txt valid" id="esala_b4" name="esala_b4" value="<?php echo @$esala_b4; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "85">8</td>
      <td "397">Agarra objeto pequeño con los dedos</td>
    </tr>
    <tr "19">
      <td "57" "85">9</td>
      <td "397">Agarra cubo con pulgar e índice</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "150">10 A 12</td>
      <td "85">10</td>
      <td "397">Mete y saca objetos en caja</td>
      <td rowspan="3" "470"><input type="text" class="input_txt valid" id="esala_b5" name="esala_b5" value="<?php echo @$esala_b5; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "85">11</td>
      <td "397">Agarra tercer objeto sin soltar otro</td>
    </tr>
    <tr "19">
      <td "57" "85">12</td>
      <td "397">Busca objeto escondido</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "150">13 A 18</td>
      <td "85">13</td>
      <td "397">Hace torre de tres cubos</td>
      <td rowspan="3" "470"><input type="text" class="input_txt valid" id="esala_b6" name="esala_b6" value="<?php echo @$esala_b6; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "85">14</td>
      <td "397">Pasa hojas de un libro</td>
    </tr>
    <tr "19">
      <td "57" "85">15</td>
      <td "397">Anticipa salida de un objeto</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "150">19 A 24</td>
      <td "85">16</td>
      <td "397">Tapa bien una caja</td>
      <td rowspan="3" "470"><input type="text" class="input_txt valid" id="esala_b7" name="esala_b7" value="<?php echo @$esala_b7; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "85">17</td>
      <td "397">Hace garabatos circulares</td>
    </tr>
    <tr "19">
      <td "57" "85">18</td>
      <td "397">Hace torre de 5 o más cubos</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "150">25 A 36</td>
      <td "85">19</td>
      <td "397">Ensarta 6 o más cuentas</td>
      <td rowspan="3" "470"><input type="text" class="input_txt valid" id="esala_b8" name="esala_b8" value="<?php echo @$esala_b8; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "85">20</td>
      <td "397">Copia línea horizontal y vertical</td>
    </tr>
    <tr "19">
      <td "57" "85">21</td>
      <td "397">Separa objetos grandes y pequeños</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "150">37 A 48</td>
      <td "85">22</td>
      <td "397">Figura humana rudimentaria I</td>
      <td rowspan="3" "470"><input type="text" class="input_txt valid" id="esala_b9" name="esala_b9" value="<?php echo @$esala_b9; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "85">23</td>
      <td "397">Corta papel con tijeras</td>
    </tr>
    <tr "19">
      <td "22" "85">24</td>
      <td "397">Copia cuadrado y circulo</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "150"> 49 A 60</td>
      <td "85">25</td>
      <td "397">Dibuja figura humana II</td>
      <td rowspan="3" "470"><input type="text" class="input_txt valid" id="esala_b10" name="esala_b10" value="<?php echo @$esala_b10; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "85">26</td>
      <td "397">Agrupa por color y forma</td>
    </tr>
    <tr "19">
      <td "57" "85">27</td>
      <td "397">Dibuja escalera</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "150">61 A 72</td>
      <td "85">28</td>
      <td "397">Agrupa por color, forma y tamaño</td>
      <td rowspan="3" "470"><input type="text" class="input_txt valid" id="esala_b11" name="esala_b11" value="<?php echo @$esala_b11; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "85">29</td>
      <td "397">Reconstruye escalera de 10 cubos</td>
    </tr>
    <tr "19">
      <td "57" "85">30</td>
      <td "397">Dibuja casa</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "150">73 A 84</td>
      <td "85">31</td>
      <td "397">Escribe letras o números</td>
      <td rowspan="3" "470"><input type="text" class="input_txt valid" id="esala_b12" name="esala_b12" value="<?php echo @$esala_b12; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "85">32</td>
      <td "397">Modela figura humana</td>
    </tr>
    <tr "19">
      <td "57" "85">33</td>
      <td "397">Copia figura línea – curva</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "150">85 A 96</td>
      <td "85">34</td>
      <td "397">Colorea figura</td>
      <td rowspan="3" "470"><input type="text" class="input_txt valid" id="esala_b13" name="esala_b13" value="<?php echo @$esala_b13; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "85">35</td>
      <td "397">Hace figura con papel</td>
    </tr>
    <tr "19">
      <td "57" "85">36</td>
      <td "397">Recorta curvas y círculos</td>
    </tr>
    <tr "19">
      <td rowspan="3" "60" "150">108</td>
      <td "85">37</td>
      <td "397">Los trazos de su escritura son más firmes</td>
      <td rowspan="3" "470"><input type="text" class="input_txt valid" id="esala_b14" name="esala_b14" value="<?php echo @$esala_b14; ?>" /></td>
    </tr>
    <tr "19">
      <td "60" "85">38</td>
      <td "397">Puede escribir largo rato sin cansarse</td>
    </tr>
    <tr "22">
      <td "60" "85">39</td>
      <td "397">Avance en el dibujo, dibuja retratos y    paisajes</td>
    </tr>
    <tr "19">
      <td rowspan="3" "63">120</td>
      <td "85">40</td>
      <td "397">Habilidad para construir maquetas</td>
      <td rowspan="3" "470"><input type="text" class="input_txt valid" id="esala_b15" name="esala_b15" value="<?php echo @$esala_b15; ?>" /></td>
    </tr>
    <tr "22">
      <td "63" "85">41</td>
      <td "397">Busca diferencia entre dos dibujos    aparentemente iguales</td>
    </tr>
    <tr "22">
      <td "63" "85">42</td>
      <td "397">Rasgos de escritura más seguros pero    emborrona los trazos</td>
    </tr>
  </table>
<p align="center">	 
  <input type="button" name="Sumar2" value="Sumar" onclick="sumar_escala('b')"/>
</p>
<table border="0" align="center" cellpadding="0" cellspacing="0"  class="data">

    <tr "41">
      <td width="118" "48" "139"> EDAD MESES</td>
      <td width="47" "47">ITEM</td>
      <td width="531" "330">C. AUDICIÓN LENGUAJE</td>
      <td width="227">ANOTE EDAD MESES PARA CADA EVALUACION</td>
    </tr>


    <tr "19">
      <td "19" "139">&lt;1</td>
      <td "47">0</td>
      <td "330">Se sobresalta con ruido</td>
      <td "469"><input type="text" class="input_txt valid" id="esala_c1" name="esala_c1" value="<?php echo @$esala_c1; ?>" /></td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "139">1 A 3</td>
      <td "47">1</td>
      <td "330">Busca sonido con la mirada</td>
      <td rowspan="3" "469"><input type="text" class="input_txt valid" id="esala_c2" name="esala_c2" value="<?php echo @$esala_c2; ?>" /></td>
    </tr>
    <tr "19">
      <td "22" "47">2</td>
      <td "330">Dos sonidos guturales diferentes</td>
    </tr>
    <tr "19">
      <td "22" "47">3</td>
      <td "330">Balbucea con las personas</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "139">4 A 6</td>
      <td "47">4</td>
      <td "330">4 o más sonidos diferentes</td>
      <td rowspan="3" "469"><input type="text" class="input_txt valid" id="esala_c3" name="esala_c3" value="<?php echo @$esala_c3; ?>" /></td>
    </tr>
    <tr "19">
      <td "22" "47">5</td>
      <td "330">Ríe a carcajadas</td>
    </tr>
    <tr "19">
      <td "57" "47">6</td>
      <td "330">Reacciona cuando se le llama</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "139">7 A 9</td>
      <td "47">7</td>
      <td "330">Pronuncia tres o más silabas</td>
      <td rowspan="3" "469"><input type="text" class="input_txt valid" id="esala_c4" name="esala_c4" value="<?php echo @$esala_c4; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "47">8</td>
      <td "330">Hace sonar la campanilla</td>
    </tr>
    <tr "19">
      <td "57" "47">9</td>
      <td "330">Una palabra clara</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "139">10 A 12</td>
      <td "47">10</td>
      <td "330">Niega con la cabeza</td>
      <td rowspan="3" "469"><input type="text" class="input_txt valid" id="esala_c5" name="esala_c5" value="<?php echo @$esala_c5; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "47">11</td>
      <td "330">Llama a la mamá o al acompañante</td>
    </tr>
    <tr "19">
      <td "57" "47">12</td>
      <td "330">Entiende ordenes sencillas</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "139">13 A 18</td>
      <td "47">13</td>
      <td "330">Conoce tres objetos</td>
      <td rowspan="3" "469"><input type="text" class="input_txt valid" id="esala_c6" name="esala_c6" value="<?php echo @$esala_c6; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "47">14</td>
      <td "330">Combina dos palabras</td>
    </tr>
    <tr "19">
      <td "57" "47">15</td>
      <td "330">Reconoce seis objetos</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "139">19 A 24</td>
      <td "47">16</td>
      <td "330">Nombra cinco objetos</td>
      <td rowspan="3" "469"><input type="text" class="input_txt valid" id="esala_c7" name="esala_c7" value="<?php echo @$esala_c7; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "47">17</td>
      <td "330">Usa frases de tres palabras</td>
    </tr>
    <tr "19">
      <td "57" "47">18</td>
      <td "330">Más de veinte palabras claras</td>
    </tr>
    <tr "19">
      <td rowspan="3" "60" "139">25 A 36</td>
      <td "47">19</td>
      <td "330">Dice su nombre completo</td>
      <td rowspan="3" "469"><input type="text" class="input_txt valid" id="esala_c8" name="esala_c8" value="<?php echo @$esala_c8; ?>" /></td>
    </tr>
    <tr "22">
      <td "60" "47">20</td>
      <td "330">Reconoce alto–bajo–atrás–grande-pequeño</td>
    </tr>
    <tr "19">
      <td "60" "47">21</td>
      <td "330">Usa oraciones completas</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "139">37 A 48</td>
      <td "47">22</td>
      <td "330">Define uso de cinco objetos</td>
      <td rowspan="3" "469"><input type="text" class="input_txt valid" id="esala_c9" name="esala_c9" value="<?php echo @$esala_c9; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "47">23</td>
      <td "330">Repite tres dígitos</td>
    </tr>
    <tr "19">
      <td "57" "47">24</td>
      <td "330">Describe bien el dibujo</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "139"> 49 A 60</td>
      <td "47">25</td>
      <td "330">Cuenta en los dedos de las manos</td>
      <td rowspan="3" "469"><input type="text" class="input_txt valid" id="esala_c10" name="esala_c10" value="<?php echo @$esala_c10; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "47">26</td>
      <td "330">Distingue: Adelante-Atrás Arriba-Abajo</td>
    </tr>
    <tr "19">
      <td "57" "47">27</td>
      <td "330">Nombra 4-5 colores</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "139">61 A 72</td>
      <td "47">28</td>
      <td "330">Expresa opiniones</td>
      <td rowspan="3" "469"><input type="text" class="input_txt valid" id="esala_c11" name="esala_c11" value="<?php echo @$esala_c11; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "47">29</td>
      <td "330">Conoce izquierda y derecha</td>
    </tr>
    <tr "19">
      <td "57" "47">30</td>
      <td "330">Conoce días de la semana</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "139">73 A 84</td>
      <td "47">31</td>
      <td "330">Identifica letras iguales</td>
      <td rowspan="3" "469"><input type="text" class="input_txt valid" id="esala_c12" name="esala_c12" value="<?php echo @$esala_c12; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "47">32</td>
      <td "330">Dice frases con entonación</td>
    </tr>
    <tr "19">
      <td "57" "47">33</td>
      <td "330">Conoce: ayer, hoy y mañana</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "139">85 A 96</td>
      <td "47">34</td>
      <td "330">Cuenta hacia atrás desde 10</td>
      <td rowspan="3" "469"><input type="text" class="input_txt valid" id="esala_c13" name="esala_c13" value="<?php echo @$esala_c13; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "47">35</td>
      <td "330">Asigna orden en secuencia</td>
    </tr>
    <tr "19">
      <td "57" "47">36</td>
      <td "330">Conoce en orden los días de la semana</td>
    </tr>
    <tr "22">
      <td rowspan="3" "66" "139">108</td>
      <td "47">37</td>
      <td "330">Es un gran lector  y prefiere hacerlo para él mismo en voz    alta</td>
      <td rowspan="3" "469"><input type="text" class="input_txt valid" id="esala_c14" name="esala_c14" value="<?php echo @$esala_c14; ?>" /></td>
    </tr>
    <tr "22">
      <td "66" "47">38</td>
      <td "330">Busca las rimas a los ejemplos dados (juega    en el jardín con el patín)</td>
    </tr>
    <tr "22">
      <td "66" "47">39</td>
      <td "330">Devuelve correctamente los cambios con un    simple calculo mental</td>
    </tr>
    <tr "19">
      <td rowspan="3" "63">120</td>
      <td "47">40</td>
      <td "330">Repite mínimo 25 palabras distintas</td>
      <td rowspan="3" "469"><input type="text" class="input_txt valid" id="esala_c15" name="esala_c15" value="<?php echo @$esala_c15; ?>" /></td>
    </tr>
    <tr "22">
      <td "63" "47">41</td>
      <td "330">Darle una serie de seis números para que los    repita</td>
    </tr>
    <tr "22">
      <td "63" "47">42</td>
      <td "330">Define algunas palabras de las que    habitualmente utiliza</td>
    </tr>
  </table>
<p align="center">
  <input type="button" name="Sumar3" value="Sumar" onclick="sumar_escala('c')"/></p>
<p></p>
  <table border="0" align="center" cellpadding="0" cellspacing="0"  class="data">

    <tr "41">
      <td width="91" "62" "167">EDAD MESES</td>
      <td width="47" "102">ITEM</td>
      <td width="750" "305">D.  PERSONAL SOCIAL</td>
      <td width="195">ANOTE EDAD MESES PARA CADA EVALUACION</td>
    </tr>


    <tr "19">
      <td "19" "167">&lt;1</td>
      <td "102">0</td>
      <td "305">Sigue movimiento del rostro</td>
      <td "468"><input type="text" class="input_txt valid" id="esala_d1" name="esala_d1" value="<?php echo @$esala_d1; ?>" /></td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "167">1 A 3</td>
      <td "102">1</td>
      <td "305">Reconoce a la madre</td>
      <td rowspan="3" "468"><input type="text" class="input_txt valid" id="esala_d2" name="esala_d2" value="<?php echo @$esala_d2; ?>" /></td>
    </tr>
    <tr "19">
      <td "22" "102">2</td>
      <td "305">Sonríe al acariciarlo</td>
    </tr>
    <tr "19">
      <td "57" "102">3</td>
      <td "305">Se voltea cuando se le habla</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "167">4 A 6</td>
      <td "102">4</td>
      <td "305">Coge la mano del examinador</td>
      <td rowspan="3" "468"><input type="text" class="input_txt valid" id="esala_d3" name="esala_d3" value="<?php echo @$esala_d3; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "102">5</td>
      <td "305">Acepta y coge juguete</td>
    </tr>
    <tr "19">
      <td "57" "102">6</td>
      <td "305">Pone atención a la conversación</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "167">7 A 9</td>
      <td "102">7</td>
      <td "305">Ayuda a sostener la taza para beber</td>
      <td rowspan="3" "468"><input type="text" class="input_txt valid" id="esala_d4" name="esala_d4" value="<?php echo @$esala_d4; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "102">8</td>
      <td "305">Reacciona a imagen en  el espejo</td>
    </tr>
    <tr "19">
      <td "57" "102">9</td>
      <td "305">Imita aplauso</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "167">10 A 12</td>
      <td "102">10</td>
      <td "305">Entrega juguete al examinador</td>
      <td rowspan="3" "468"><input type="text" class="input_txt valid" id="esala_d5" name="esala_d5" value="<?php echo @$esala_d5; ?>" /></td>
    </tr>
    <tr "19">
      <td "57" "102">11</td>
      <td "305">Pide un juguete u objeto</td>
    </tr>
    <tr "19">
      <td "57" "102">12</td>
      <td "305">Bebe en taza solo</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "167">13 A 18</td>
      <td "102">13</td>
      <td "305">Señala una prenda de vestir</td>
      <td rowspan="3" "468"><input type="text" class="input_txt valid" id="esala_d6" name="esala_d6" value="<?php echo @$esala_d6; ?>" /></td>
      </tr>
    <tr "19">
      <td "57" "102">14</td>
      <td "305">Señala dos partes del cuerpo</td>
    </tr>
    <tr "19">
      <td "57" "102">15</td>
      <td "305">Avisa deseos de ir al baño</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "167">19 A 24</td>
      <td "102">16</td>
      <td "305">Señala 5 partes del cuerpo</td>
      <td rowspan="3" "468"><input type="text" class="input_txt valid" id="esala_d7" name="esala_d7" value="<?php echo @$esala_d7; ?>" /></td>
      </tr>
    <tr "19">
      <td "57" "102">17</td>
      <td "305">Trata de contar experiencias</td>
    </tr>
    <tr "19">
      <td "57" "102">18</td>
      <td "305">Control diurno de orina</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "167">25 A 36</td>
      <td "102">19</td>
      <td "305">Diferencia niño-niña</td>
      <td rowspan="3" "468"><input type="text" class="input_txt valid" id="esala_d8" name="esala_d8" value="<?php echo @$esala_d8; ?>" /></td>
      </tr>
    <tr "19">
      <td "57" "102">20</td>
      <td "305">Dice el nombre del papá y mamá</td>
    </tr>
    <tr "19">
      <td "57" "102">21</td>
      <td "305">Se lava solo las manos y la cara</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "167">37 A 48</td>
      <td "102">22</td>
      <td "305">Puede desvestirse solo</td>
      <td rowspan="3" "468"><input type="text" class="input_txt valid" id="esala_d9" name="esala_d9" value="<?php echo @$esala_d9; ?>" /></td>
      </tr>
    <tr "19">
      <td "57" "102">23</td>
      <td "305">Comparte juego con otros niños</td>
    </tr>
    <tr "19">
      <td "57" "102">24</td>
      <td "305">Tiene amigo especial</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "167"> 49 A 60</td>
      <td "102">25</td>
      <td "305">Puede vestirse y  desvestirse solo</td>
      <td rowspan="3" "468"><input type="text" class="input_txt valid" id="esala_d10" name="esala_d10" value="<?php echo @$esala_d10; ?>" /></td>
      </tr>
    <tr "19">
      <td "57" "102">26</td>
      <td "305">Sabe cuantos años tiene</td>
    </tr>
    <tr "19">
      <td "57" "102">27</td>
      <td "305">Organiza juegos</td>
    </tr>
    <tr "19">
      <td rowspan="3" "60" "167">61 A 72</td>
      <td "102">28</td>
      <td "305">Hace mandados</td>
      <td rowspan="3" "468"><input type="text" class="input_txt valid" id="esala_d11" name="esala_d11" value="<?php echo @$esala_d11; ?>" /></td>
      </tr>
    <tr "22">
      <td "60" "102">29</td>
      <td "305">Conoce nombre vereda-pueblo de residencia</td>
    </tr>
    <tr "19">
      <td "60" "102">30</td>
      <td "305">Comenta vida familiar</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "167">73 A 84</td>
      <td "102">31</td>
      <td "305">Sabe lugar que ocupa</td>
      <td rowspan="3" "468"><input type="text" class="input_txt valid" id="esala_d12" name="esala_d12" value="<?php echo @$esala_d12; ?>" /></td>
      </tr>
    <tr "19">
      <td "57" "102">32</td>
      <td "305">Participa en actividades</td>
    </tr>
    <tr "19">
      <td "57" "102">33</td>
      <td "305">Conoce fechas especiales</td>
    </tr>
    <tr "19">
      <td rowspan="3" "57" "167">85 A 96</td>
      <td "102">34</td>
      <td "305">Relaciona tiempo con actividades diarias</td>
      <td rowspan="3" "468"><input type="text" class="input_txt valid" id="esala_d13" name="esala_d13" value="<?php echo @$esala_d13; ?>" /></td>
      </tr>
    <tr "19">
      <td "57" "102">35</td>
      <td "305">Indica recorrido</td>
    </tr>
    <tr "19">
      <td "57" "102">36</td>
      <td "305">Habla sobre si mismo</td>
    </tr>
    <tr "22">
      <td rowspan="3" "66" "167">108</td>
      <td "102">37</td>
      <td "305">Intenta mantener independencia lejos del    ambiente familiar</td>
      <td rowspan="3" "468"><input type="text" class="input_txt valid" id="esala_d14" name="esala_d14" value="<?php echo @$esala_d14; ?>" /></td>
    </tr>
    <tr "22">
      <td "66" "102">38</td>
      <td "305">Acepta sus errores y tiene sentido de    justicia y honradez</td>
    </tr>
    <tr "22">
      <td "66" "102">39</td>
      <td "305">Se siente miembro de la sociedad y tiene    mucha iniciativa</td>
    </tr>
    <tr "34">
      <td rowspan="3" "90">120</td>
      <td "102">40</td>
      <td "305">La conducta de los dos sexos se diferencia    cada vez más y adquiere rasgos propios</td>
      <td rowspan="3" "468"><input type="text" class="input_txt valid" id="esala_d15" name="esala_d15" value="<?php echo @$esala_d15; ?>" /></td>
      </tr>
    <tr "22">
      <td "90" "102">41</td>
      <td "305">Se lleva bien con los padres y le gusta el    hogar</td>
    </tr>
    <tr "34">
      <td "90" "102">42</td>
      <td "305">Debido a los cambios de su cuerpo esta muy    pendiente de él y tiene muchas dudas sobre la sexualidad</td>
    </tr>
  </table>

  <p align="center">
    <input type="button" name="Sumar4" value="Sumar" onclick="sumar_escala('d')"/>
<BR>

<p align="center">Edad en meses:
  <input type="text" class="input_txt valid" id="edad_meses_ab" name="edad_meses_ab" value="<?php echo @$edad_meses_ab; ?>" />
</p>
<p align="center">Motricidad Gruesa A:
  <input type="text" class="input_txt valid" id="totalab_a" name="totalab_a" value="<?php echo @$totalab_a; ?>" />
</p>
<p align="center">Motriz fino adaptativa B:
  <input type="text" class="input_txt valid" id="totalab_b" name="totalab_b" value="<?php echo @$totalab_b; ?>" />
</p>
<p align="center">Audicion lenguaje C:
  <input type="text" class="input_txt valid" id="totalab_c" name="totalab_c" value="<?php echo @$totalab_c; ?>" />
</p>
<p align="center">Personal Social D:
  <input type="text" class="input_txt valid" id="totalab_d" name="totalab_d" value="<?php echo @$totalab_d; ?>" />
</p>
<p align="center">&nbsp;</p>
  </p>
  <table border="1" cellpadding="0" cellspacing="0">
    <col "83" span="21" />
    <tr "22">
      <td rowspan="4" "122" "51">Edad en Meses</td>
      <td colspan="20"><div align="center">PARÁMETROS NORMATIVOS PARA LA EVALUACIÓN DEL DESARROLLO</div></td>
    </tr>
    <tr "22">
      <td colspan="20" "22">DE NIÑOS MENORES DE CIENTO VEINTE ( 120 ) MESES    (10 AÑOS )</td>
    </tr>
    <tr "19">
      <td colspan="4">Motricidad Gruesa ( A )</td>
      <td colspan="4">Motricidad Fina Adaptativa ( B )</td>
      <td colspan="4">Audición y Lenguaje ( C    )</td>
      <td colspan="4">Personal Social ( D )</td>
      <td colspan="4">TOTAL</td>
    </tr>
    <tr "19">
      <td "39" "64">Alerta</td>
      <td "66">Medio</td>
      <td "71">Medio Alto</td>
      <td "35">Alto</td>
      <td "79">Alerta</td>
      <td "71">Medio Alto</td>
      <td "71">Medio Alto</td>
      <td "50">Alto</td>
      <td "64">Alerta</td>
      <td "66">Medio</td>
      <td "71">Medio Alto</td>
      <td "50">Alto</td>
      <td "64">Alerta</td>
      <td "66">Medio</td>
      <td "71">Medio Alto</td>
      <td "50">Alto</td>
      <td "64">Alerta</td>
      <td "66">Medio</td>
      <td "71">Medio Alto</td>
      <td "65">Alto</td>
    </tr>
    <tr "20">
      <td "20" "51">01-03</td>
      <td "64">0-1</td>
      <td "66">02-03</td>
      <td "71">04-05</td>
      <td "35">6</td>
      <td "79">0-1</td>
      <td "71">02-03</td>
      <td "71">04-05</td>
      <td "50">6</td>
      <td "64">0-1</td>
      <td "66">02-03</td>
      <td "71">04-05</td>
      <td "50">6</td>
      <td "64">0-1</td>
      <td "66">02-05</td>
      <td "71">04-05</td>
      <td "50">6</td>
      <td "64">0-6</td>
      <td "66">07-13</td>
      <td "71">14-22</td>
      <td "65">23</td>
    </tr>
    <tr "20">
      <td "20" "51">4 – 6</td>
      <td "64">0-4</td>
      <td "66">05-06</td>
      <td "71">07-09</td>
      <td "35">10</td>
      <td "79">0-4</td>
      <td "71">05-06</td>
      <td "71">07-09</td>
      <td "50">10</td>
      <td "64">0-4</td>
      <td "66">05-06</td>
      <td "71">07-09</td>
      <td "50">10</td>
      <td "64">0-4</td>
      <td "66">05-06</td>
      <td "71">07-09</td>
      <td "50">10</td>
      <td "64">0-19</td>
      <td "66">20-27</td>
      <td "71">28-32</td>
      <td "65">32</td>
    </tr>
    <tr "20">
      <td "20" "51">7 – 9</td>
      <td "64">0-7</td>
      <td "66">08-10</td>
      <td "71">nov-13</td>
      <td "35">14</td>
      <td "79">0-7</td>
      <td "71">08-10</td>
      <td "71">11-12</td>
      <td "50">13</td>
      <td "64">0-7</td>
      <td "66">08-09</td>
      <td "71">10-12</td>
      <td "50">13</td>
      <td "64">0-7</td>
      <td "66">08-09</td>
      <td "71">10-12</td>
      <td "50">13</td>
      <td "64">0-31</td>
      <td "66">32-39</td>
      <td "71">40-48</td>
      <td "65">49</td>
    </tr>
    <tr "20">
      <td "20" "51">10 – 12</td>
      <td "64">0-11</td>
      <td "66">12-13</td>
      <td "71">14-16</td>
      <td "35">17</td>
      <td "79">0-9</td>
      <td "71">10-12</td>
      <td "71">13-14</td>
      <td "50">15</td>
      <td "64">0-9</td>
      <td "66">10-12</td>
      <td "71">13-14</td>
      <td "50">15</td>
      <td "64">0-9</td>
      <td "66">10-12</td>
      <td "71">13-14</td>
      <td "50">15</td>
      <td "64">0-42</td>
      <td "66">43-49</td>
      <td "71">50-56</td>
      <td "65">57</td>
    </tr>
    <tr "20">
      <td "20" "51">13 – 18</td>
      <td "64">0-13</td>
      <td "66">14-16</td>
      <td "71">17-19</td>
      <td "35">20</td>
      <td "79">0-12</td>
      <td "71">13-15</td>
      <td "71">16-18</td>
      <td "50">19</td>
      <td "64">0-12</td>
      <td "66">13-14</td>
      <td "71">15-17</td>
      <td "50">18</td>
      <td "64">0-12</td>
      <td "66">13-14</td>
      <td "71">15-17</td>
      <td "50">18</td>
      <td "64">0-51</td>
      <td "66">52-60</td>
      <td "71">61-69</td>
      <td "65">70</td>
    </tr>
    <tr "20">
      <td "20" "51">19 – 24</td>
      <td "64">0-16</td>
      <td "66">17-19</td>
      <td "71">20-23</td>
      <td "35">24</td>
      <td "79">0-14</td>
      <td "71">15-18</td>
      <td "71">19-20</td>
      <td "50">21</td>
      <td "64">0-13</td>
      <td "66">14-17</td>
      <td "71">18-20</td>
      <td "50">21</td>
      <td "64">0-14</td>
      <td "66">15-17</td>
      <td "71">18-22</td>
      <td "50">23</td>
      <td "64">0-61</td>
      <td "66">62-71</td>
      <td "71">72-83</td>
      <td "65">84</td>
    </tr>
    <tr "20">
      <td "20" "51">25 – 36</td>
      <td "64">0-19</td>
      <td "66">20-23</td>
      <td "71">24-27</td>
      <td "35">28</td>
      <td "79">0-18</td>
      <td "71">19-21</td>
      <td "71">22-24</td>
      <td "50">25</td>
      <td "64">0-17</td>
      <td "66">18-21</td>
      <td "71">22-24</td>
      <td "50">25</td>
      <td "64">0-18</td>
      <td "66">19-22</td>
      <td "71">23-27</td>
      <td "50">28</td>
      <td "64">0-74</td>
      <td "66">75-86</td>
      <td "71">87-100</td>
      <td "65">101</td>
    </tr>
    <tr "20">
      <td "20" "51">37 – 48</td>
      <td "64">0-22</td>
      <td "66">23-26</td>
      <td "71">27-29</td>
      <td "35">30</td>
      <td "79">0-21</td>
      <td "71">22-24</td>
      <td "71">25-28</td>
      <td "50">29</td>
      <td "64">0-21</td>
      <td "66">22-25</td>
      <td "71">26-29</td>
      <td "50">30</td>
      <td "64">0-22</td>
      <td "66">23-26</td>
      <td "71">27-29</td>
      <td "50">30</td>
      <td "64">0-89</td>
      <td "66">90-100</td>
      <td "71">101-114</td>
      <td "65">115</td>
    </tr>
    <tr "20">
      <td "20" "51">49 – 60</td>
      <td "64">0-26</td>
      <td "66">27-29</td>
      <td "71">30</td>
      <td "35">30</td>
      <td "79">0-23</td>
      <td "71">24-28</td>
      <td "71">29</td>
      <td "50">30</td>
      <td "64">0-24</td>
      <td "66">25-28</td>
      <td "71">29</td>
      <td "50">30</td>
      <td "64">0-25</td>
      <td "66">26-28</td>
      <td "71">29</td>
      <td "50">30</td>
      <td "64">0-101</td>
      <td "66">102-113</td>
      <td "71">114</td>
      <td "65">115</td>
    </tr>
    <tr "20">
      <td "20" "51">61 – 72</td>
      <td "64">0-22</td>
      <td "66">23-28</td>
      <td "71">29-35</td>
      <td "35">36</td>
      <td "79">0-27</td>
      <td "71">28-32</td>
      <td "71">33-35</td>
      <td "50">36</td>
      <td "64">0-23</td>
      <td "66">24-30</td>
      <td "71">31-33</td>
      <td "50">34</td>
      <td "64">0-26</td>
      <td "66">27-31</td>
      <td "71">32-35</td>
      <td "50">36</td>
      <td "64">0-101</td>
      <td "66">102-122</td>
      <td "71">123-137</td>
      <td "65">138</td>
    </tr>
    <tr "20">
      <td "20" "51">73 – 84</td>
      <td "64">0-25</td>
      <td "66">26-32</td>
      <td "71">33-35</td>
      <td "35">36</td>
      <td "79">0-30</td>
      <td "71">31-33</td>
      <td "71">34-35</td>
      <td "50">36</td>
      <td "64">0-27</td>
      <td "66">28-32</td>
      <td "71">33-35</td>
      <td "50">36</td>
      <td "64">0-28</td>
      <td "66">29-33</td>
      <td "71">34-35</td>
      <td "50">36</td>
      <td "64">0-116</td>
      <td "66">117-132</td>
      <td "71">133-141</td>
      <td "65">142</td>
    </tr>
    <tr "20">
      <td "20" "51">85 – 96</td>
      <td "64">0-28</td>
      <td "66">29-35</td>
      <td "71">36-38</td>
      <td "35">39</td>
      <td "79">0-28</td>
      <td "71">29-35</td>
      <td "71">36-38</td>
      <td "50">39</td>
      <td "64">0-28</td>
      <td "66">29-35</td>
      <td "71">36-38</td>
      <td "50">39</td>
      <td "64">0-28</td>
      <td "66">29-35</td>
      <td "71">36-38</td>
      <td "50">39</td>
      <td "64">0-115</td>
      <td "66">116-128</td>
      <td "71">129-155</td>
      <td "65">156</td>
    </tr>
    <tr "20">
      <td "20" "51">108</td>
      <td "64">0-30</td>
      <td "66">31-38</td>
      <td "71">39-41</td>
      <td "35">42</td>
      <td "79">0-30</td>
      <td "71">31-35</td>
      <td "71">36-41</td>
      <td "50">42</td>
      <td "64">0-30</td>
      <td "66">31-35</td>
      <td "71">36-41</td>
      <td "50">42</td>
      <td "64">0-30</td>
      <td "66">31-35</td>
      <td "71">36-41</td>
      <td "50">42</td>
      <td "64">0-123</td>
      <td "66">124-143</td>
      <td "71">144-167</td>
      <td "65">168</td>
    </tr>
    <tr "20">
      <td "20" "51">120</td>
      <td "64">0-30</td>
      <td "66">31-40</td>
      <td "71">41-44</td>
      <td "35">45</td>
      <td "79">0-30</td>
      <td "71">35-40</td>
      <td "71">41-44</td>
      <td "50">45</td>
      <td "64">0-30</td>
      <td "66">31-40</td>
      <td "71">41-44</td>
      <td "50">45</td>
      <td "64">0-30</td>
      <td "66">35-40</td>
      <td "71">41-44</td>
      <td "50">45</td>
      <td "64">0-129</td>
      <td "66">130-163</td>
      <td "71">164-179</td>
      <td "65">180</td>
    </tr>
  </table>




<?php echo @$button ?>
</form><br>
</div>
</fieldset>