<?php
if (isset($_REQUEST['guardar_hc_embarazo_2']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_hc_embarazo_2'] == 'new') {

        $sql = "INSERT INTO hc_embarazo_2 (
`id_hc_embarazo_2`,
`id_usuario`,
`id_proceso`,
`id_historia`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`embarazo_1x`,
`embarazo_2x`,
`embarazo_3x`,
`embarazo_4x`,
`embarazo_5x`,
`embarazo_6x`,
`embarazo_7x`,
`embarazo_8x`,
`embarazo_9x`,
`embarazo_10x`,
`embarazo_11x`,
`embarazo_12x`,
`embarazo_13x`,
`embarazo_14x`,
`embarazo_15`,
`embarazo_16`,
`embarazo_17`,
`embarazo_18`,
`embarazo_19`,
`embarazo_20`,
`embarazo_21`,
`embarazo_22`,
`embarazo_23`,
`embarazo_24`,
`embarazo_25`,
`embarazo_26`,
`embarazo_27`,
`embarazo_28`,
`embarazo_30`,
`embarazo_29`,
`embarazo_34`,
`embarazo_31`,
`embarazo_32`,
`embarazo_33`,
`embarazo_35`,
`embarazo_36`,
`embarazo_37`,
`embarazo_38`,
`embarazo_39`,
`embarazo_40`,
`embarazo_41`,
`embarazo_42`,
`embarazo_43`,
`embarazo_44`,
`embarazo_45`,
`embarazo_46`,
`embarazo_47`,
`embarazo_48`,
`embarazo_49`,
`embarazo_50`,
`embarazo_51`,
`embarazo_52`,
`embarazo_53`,
`embarazo_54`,
`embarazo_55`,
`embarazo_56`,
`embarazo_57`,
`embarazo_58`,
`embarazo_59`,
`embarazo_60`,
`embarazo_61`,
`embarazo_62`,
`embarazo_63`,
`embarazo_64`


) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['id_historia'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['embarazo_1x'] . "' ,
'" . $_REQUEST['embarazo_2x'] . "' ,
'" . $_REQUEST['embarazo_3x'] . "' ,
'" . $_REQUEST['embarazo_4x'] . "' ,
'" . $_REQUEST['embarazo_5x'] . "' ,
'" . $_REQUEST['embarazo_6x'] . "' ,
'" . $_REQUEST['embarazo_7x'] . "' ,
'" . $_REQUEST['embarazo_8x'] . "' ,
'" . $_REQUEST['embarazo_9x'] . "' ,
'" . $_REQUEST['embarazo_10x'] . "' ,
'" . $_REQUEST['embarazo_11x'] . "' ,
'" . $_REQUEST['embarazo_12x'] . "' ,
'" . $_REQUEST['embarazo_13x'] . "' ,
'" . $_REQUEST['embarazo_14x'] . "' ,
'" . $_REQUEST['embarazo_15'] . "' ,
'" . $_REQUEST['embarazo_16'] . "' ,
'" . $_REQUEST['embarazo_17'] . "' ,
'" . $_REQUEST['embarazo_18'] . "' ,
'" . $_REQUEST['embarazo_19'] . "' ,
'" . $_REQUEST['embarazo_20'] . "' ,
'" . $_REQUEST['embarazo_21'] . "' ,
'" . $_REQUEST['embarazo_22'] . "' ,
'" . $_REQUEST['embarazo_23'] . "' ,
'" . $_REQUEST['embarazo_24'] . "' ,
'" . $_REQUEST['embarazo_25'] . "' ,
'" . $_REQUEST['embarazo_26'] . "' ,
'" . $_REQUEST['embarazo_27'] . "' ,
'" . $_REQUEST['embarazo_28'] . "' ,
'" . $_REQUEST['embarazo_30'] . "' ,
'" . $_REQUEST['embarazo_29'] . "' ,
'" . $_REQUEST['embarazo_34'] . "' ,
'" . $_REQUEST['embarazo_31'] . "' ,
'" . $_REQUEST['embarazo_32'] . "' ,
'" . $_REQUEST['embarazo_33'] . "' ,
'" . $_REQUEST['embarazo_35'] . "' ,
'" . $_REQUEST['embarazo_36'] . "' ,
'" . $_REQUEST['embarazo_37'] . "' ,
'" . $_REQUEST['embarazo_38'] . "' ,
'" . $_REQUEST['embarazo_39'] . "' ,
'" . $_REQUEST['embarazo_40'] . "' ,
'" . $_REQUEST['embarazo_41'] . "' ,
'" . $_REQUEST['embarazo_42'] . "' ,
'" . $_REQUEST['embarazo_43'] . "' ,
'" . $_REQUEST['embarazo_44'] . "' ,
'" . $_REQUEST['embarazo_45'] . "' ,
'" . $_REQUEST['embarazo_46'] . "' ,
'" . $_REQUEST['embarazo_47'] . "' ,
'" . $_REQUEST['embarazo_48'] . "' ,
'" . $_REQUEST['embarazo_49'] . "' ,
'" . $_REQUEST['embarazo_50'] . "' ,
'" . $_REQUEST['embarazo_51'] . "' ,
'" . $_REQUEST['embarazo_52'] . "' ,
'" . $_REQUEST['embarazo_53'] . "' ,
'" . $_REQUEST['embarazo_54'] . "',
'" . $_REQUEST['embarazo_55'] . "',
'" . $_REQUEST['embarazo_56'] . "',
'" . $_REQUEST['embarazo_57'] . "',
'" . $_REQUEST['embarazo_58'] . "',
'" . $_REQUEST['embarazo_59'] . "',
'" . $_REQUEST['embarazo_60'] . "',
'" . $_REQUEST['embarazo_61'] . "',
'" . $_REQUEST['embarazo_62'] . "',
'" . $_REQUEST['embarazo_63'] . "',
'" . $_REQUEST['embarazo_64'] . "'
) ";

//echo "$sql"; exit;

    } else if ($_REQUEST['id_hc_embarazo_2'] != '') {

        $sql = "UPDATE hc_embarazo_2 set
`id_usuario` = '" . $_REQUEST['id_usuario'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`id_historia` = '" . $_REQUEST['id_historia'] . "' ,
`id_cita` = '" . $_REQUEST['id_cita'] . "' ,
`id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ,
`id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ,
`embarazo_1x` = '" . $_REQUEST['embarazo_1x'] . "' ,
`embarazo_2x` = '" . $_REQUEST['embarazo_2x'] . "' ,
`embarazo_3x` = '" . $_REQUEST['embarazo_3x'] . "' ,
`embarazo_4x` = '" . $_REQUEST['embarazo_4x'] . "' ,
`embarazo_5x` = '" . $_REQUEST['embarazo_5x'] . "' ,
`embarazo_6x` = '" . $_REQUEST['embarazo_6x'] . "' ,
`embarazo_7x` = '" . $_REQUEST['embarazo_7x'] . "' ,
`embarazo_8x` = '" . $_REQUEST['embarazo_8x'] . "' ,
`embarazo_9x` = '" . $_REQUEST['embarazo_9x'] . "' ,
`embarazo_10x` = '" . $_REQUEST['embarazo_10x'] . "' ,
`embarazo_11x` = '" . $_REQUEST['embarazo_11x'] . "' ,
`embarazo_12x` = '" . $_REQUEST['embarazo_12x'] . "' ,
`embarazo_13x` = '" . $_REQUEST['embarazo_13x'] . "' ,
`embarazo_14x` = '" . $_REQUEST['embarazo_14x'] . "' ,
`embarazo_15` = '" . $_REQUEST['embarazo_15'] . "' ,
`embarazo_16` = '" . $_REQUEST['embarazo_16'] . "' ,
`embarazo_17` = '" . $_REQUEST['embarazo_17'] . "' ,
`embarazo_18` = '" . $_REQUEST['embarazo_18'] . "' ,
`embarazo_19` = '" . $_REQUEST['embarazo_19'] . "' ,
`embarazo_20` = '" . $_REQUEST['embarazo_20'] . "' ,
`embarazo_21` = '" . $_REQUEST['embarazo_21'] . "' ,
`embarazo_22` = '" . $_REQUEST['embarazo_22'] . "' ,
`embarazo_23` = '" . $_REQUEST['embarazo_23'] . "' ,
`embarazo_24` = '" . $_REQUEST['embarazo_24'] . "' ,
`embarazo_25` = '" . $_REQUEST['embarazo_25'] . "' ,
`embarazo_26` = '" . $_REQUEST['embarazo_26'] . "' ,
`embarazo_27` = '" . $_REQUEST['embarazo_27'] . "' ,
`embarazo_28` = '" . $_REQUEST['embarazo_28'] . "' ,
`embarazo_30` = '" . $_REQUEST['embarazo_30'] . "' ,
`embarazo_29` = '" . $_REQUEST['embarazo_29'] . "' ,
`embarazo_34` = '" . $_REQUEST['embarazo_34'] . "' ,
`embarazo_31` = '" . $_REQUEST['embarazo_31'] . "' ,
`embarazo_32` = '" . $_REQUEST['embarazo_32'] . "' ,
`embarazo_33` = '" . $_REQUEST['embarazo_33'] . "' ,
`embarazo_35` = '" . $_REQUEST['embarazo_35'] . "' ,
`embarazo_36` = '" . $_REQUEST['embarazo_36'] . "' ,
`embarazo_37` = '" . $_REQUEST['embarazo_37'] . "' ,
`embarazo_38` = '" . $_REQUEST['embarazo_38'] . "' ,
`embarazo_39` = '" . $_REQUEST['embarazo_39'] . "' ,
`embarazo_40` = '" . $_REQUEST['embarazo_40'] . "' ,
`embarazo_41` = '" . $_REQUEST['embarazo_41'] . "' ,
`embarazo_42` = '" . $_REQUEST['embarazo_42'] . "' ,
`embarazo_43` = '" . $_REQUEST['embarazo_43'] . "' ,
`embarazo_44` = '" . $_REQUEST['embarazo_44'] . "' ,
`embarazo_45` = '" . $_REQUEST['embarazo_45'] . "' ,
`embarazo_46` = '" . $_REQUEST['embarazo_46'] . "' ,
`embarazo_47` = '" . $_REQUEST['embarazo_47'] . "' ,
`embarazo_48` = '" . $_REQUEST['embarazo_48'] . "' ,
`embarazo_49` = '" . $_REQUEST['embarazo_49'] . "' ,
`embarazo_50` = '" . $_REQUEST['embarazo_50'] . "' ,
`embarazo_51` = '" . $_REQUEST['embarazo_51'] . "' ,
`embarazo_52` = '" . $_REQUEST['embarazo_52'] . "' ,
`embarazo_53` = '" . $_REQUEST['embarazo_53'] . "' ,
`embarazo_54` = '" . $_REQUEST['embarazo_54'] . "' ,
`embarazo_55` = '" . $_REQUEST['embarazo_55'] . "' ,
`embarazo_56` = '" . $_REQUEST['embarazo_56'] . "' ,
`embarazo_57` = '" . $_REQUEST['embarazo_57'] . "' ,
`embarazo_58` = '" . $_REQUEST['embarazo_58'] . "' ,
`embarazo_59` = '" . $_REQUEST['embarazo_59'] . "' ,
`embarazo_60` = '" . $_REQUEST['embarazo_60'] . "' ,
`embarazo_61` = '" . $_REQUEST['embarazo_61'] . "' ,
`embarazo_62` = '" . $_REQUEST['embarazo_62'] . "' ,
`embarazo_63` = '" . $_REQUEST['embarazo_63'] . "' ,
`embarazo_64` = '" . $_REQUEST['embarazo_64'] . "' WHERE `id_hc_embarazo_2` = '" . $_REQUEST['id_hc_embarazo_2'] . "' ;";

    }

    $conexion->EjecutarQuery($sql);
}
$id_hc_embarazo_2 = 'new';
$sql              = "SELECT * from hc_embarazo_2 WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result           = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_hc_embarazo_2 = $row['id_hc_embarazo_2'];
    $id_usuario       = $row['id_usuario'];
    $id_proceso       = $row['id_proceso'];
    $id_historia      = $row['id_historia'];
    $id_cita          = $row['id_cita'];
    $id_vinicial      = $row['id_vinicial'];
    $id_revaloracion  = $row['id_revaloracion'];
    $embarazo_1x      = $row['embarazo_1x'];
    $embarazo_2x      = $row['embarazo_2x'];
    $embarazo_3x      = $row['embarazo_3x'];
    $embarazo_4x      = $row['embarazo_4x'];
    $embarazo_5x      = $row['embarazo_5x'];
    $embarazo_6x      = $row['embarazo_6x'];
    $embarazo_7x      = $row['embarazo_7x'];
    $embarazo_8x      = $row['embarazo_8x'];
    $embarazo_9x      = $row['embarazo_9x'];
    $embarazo_10x     = $row['embarazo_10x'];
    $embarazo_11x     = $row['embarazo_11x'];
    $embarazo_12x     = $row['embarazo_12x'];
    $embarazo_13x     = $row['embarazo_13x'];
    $embarazo_14x     = $row['embarazo_14x'];
    $embarazo_15      = $row['embarazo_15'];
    $embarazo_16      = $row['embarazo_16'];
    $embarazo_17      = $row['embarazo_17'];
    $embarazo_18      = $row['embarazo_18'];
    $embarazo_19      = $row['embarazo_19'];
    $embarazo_20      = $row['embarazo_20'];
    $embarazo_21      = $row['embarazo_21'];
    $embarazo_22      = $row['embarazo_22'];
    if ($embarazo_22 == "") {$embarazo_22 = "NORMAL";}
    $embarazo_23 = $row['embarazo_23'];
    if ($embarazo_23 == "") {$embarazo_23 = "NORMAL";}
    $embarazo_24 = $row['embarazo_24'];
    if ($embarazo_24 == "") {$embarazo_24 = "NORMAL";}
    $embarazo_25 = $row['embarazo_25'];
    if ($embarazo_25 == "") {$embarazo_25 = "NORMAL";}
    $embarazo_26 = $row['embarazo_26'];
    if ($embarazo_26 == "") {$embarazo_26 = "NORMAL";}
    $embarazo_27 = $row['embarazo_27'];
    if ($embarazo_27 == "") {$embarazo_27 = "NORMAL";}
    $embarazo_28 = $row['embarazo_28'];
    if ($embarazo_28 == "") {$embarazo_28 = "NORMAL";}
    $embarazo_29 = $row['embarazo_29'];
    if ($embarazo_29 == "") {$embarazo_29 = "NORMAL";}
    $embarazo_30 = $row['embarazo_30'];
    $embarazo_31 = $row['embarazo_31'];
    $embarazo_32 = $row['embarazo_32'];
    $embarazo_33 = $row['embarazo_33'];
    $embarazo_34 = $row['embarazo_34'];
    $embarazo_35 = $row['embarazo_35'];
    $embarazo_36 = $row['embarazo_36'];
    $embarazo_37 = $row['embarazo_37'];
    $embarazo_38 = $row['embarazo_38'];
    $embarazo_39 = $row['embarazo_39'];
    $embarazo_40 = $row['embarazo_40'];
    $embarazo_41 = $row['embarazo_41'];
    $embarazo_42 = $row['embarazo_42'];
    $embarazo_43 = $row['embarazo_43'];
    $embarazo_44 = $row['embarazo_44'];
    $embarazo_45 = $row['embarazo_45'];
    $embarazo_46 = $row['embarazo_46'];
    $embarazo_47 = $row['embarazo_47'];
    $embarazo_48 = $row['embarazo_48'];
    $embarazo_49 = $row['embarazo_49'];
    $embarazo_50 = $row['embarazo_50'];
    $embarazo_51 = $row['embarazo_51'];
    $embarazo_52 = $row['embarazo_52'];
    $embarazo_53 = $row['embarazo_53'];
    $embarazo_54 = $row['embarazo_54'];
    $embarazo_55 = $row['embarazo_55'];
    $embarazo_56 = $row['embarazo_56'];
    $embarazo_57 = $row['embarazo_57'];
    $embarazo_58 = $row['embarazo_58'];
    $embarazo_59 = $row['embarazo_59'];
    $embarazo_60 = $row['embarazo_60'];
    $embarazo_61 = $row['embarazo_61'];
    $embarazo_62 = $row['embarazo_62'];
    $embarazo_63 = $row['embarazo_63'];
    $embarazo_64 = $row['embarazo_64'];

    break;}

// verficar lista de si y no

if ($row['embarazo_31'] == 1) {
    $style_a = ' selected="selected" ';
} else if ($row['embarazo_31'] == 2) {
    $style_m = ' selected="selected" ';
} else if ($row['embarazo_31'] == 3) {
    $style_b = ' selected="selected" ';
} else {
    $style_a = "";
    $style_m = "";
    $style_b = "";
}

if ($row['embarazo_1x'] == 0) {
    $style_e1 = ' selected="selected" ';
} else if ($row['embarazo_1x'] == 1) {
    $style_e2 = ' selected="selected" ';
}

if ($row['embarazo_2x'] == 0) {
    $style_e3 = ' selected="selected" ';
} else if ($row['embarazo_2x'] == 1) {
    $style_e4 = ' selected="selected" ';
}

if ($row['embarazo_3x'] == 0) {
    $style_e5 = ' selected="selected" ';
} else if ($row['embarazo_3x'] == 1) {
    $style_e6 = ' selected="selected" ';
}

if ($row['embarazo_4x'] == 0) {
    $style_e7 = ' selected="selected" ';
} else if ($row['embarazo_4x'] == 1) {
    $style_e8 = ' selected="selected" ';
}

if ($row['embarazo_5x'] == 0) {
    $style_e9 = ' selected="selected" ';
} else if ($row['embarazo_5x'] == 1) {
    $style_e10 = ' selected="selected" ';
}

if ($row['embarazo_6x'] == 0) {
    $style_e11 = ' selected="selected" ';
} else if ($row['embarazo_6x'] == 1) {
    $style_e12 = ' selected="selected" ';
}

if ($row['embarazo_7x'] == 0) {
    $style_e13 = ' selected="selected" ';
} else if ($row['embarazo_7x'] == 1) {
    $style_e14 = ' selected="selected" ';
}

if ($row['embarazo_8x'] == 0) {
    $style_e15 = ' selected="selected" ';
} else if ($row['embarazo_8x'] == 1) {
    $style_e16 = ' selected="selected" ';
}

if ($row['embarazo_9x'] == 0) {
    $style_e17 = ' selected="selected" ';
} else if ($row['embarazo_9x'] == 1) {
    $style_e18 = ' selected="selected" ';
}

?>

<script>

$(function(){

$("#close-hc_embarazo_2").click(function(){
$("#open-hc_embarazo_2").show();
$(this).hide();
$("#content-hc_embarazo_2").hide('slow');
});

$("#open-hc_embarazo_2").click(function(){
$("#close-hc_embarazo_2").show();
$(this).hide();
$("#content-hc_embarazo_2").show('slow');
});

});
</script>
  <script type="text/javascript">


   $(function() {

        // calendarios de historia clinica

        $("#embarazo_38").datepicker({
        changeMonth: true,
        numberOfMonths: 1,
        dateFormat: "yy-mm-dd"
        });
        $("#embarazo_40").datepicker({
        changeMonth: true,
        numberOfMonths: 1,
        dateFormat: "yy-mm-dd"
        });
        $("#embarazo_42").datepicker({
        changeMonth: true,
        numberOfMonths: 1,
        dateFormat: "yy-mm-dd"
        });
        $("#embarazo_44").datepicker({
        changeMonth: true,
        numberOfMonths: 1,
        dateFormat: "yy-mm-dd"
        });
        $("#embarazo_46").datepicker({
        changeMonth: true,
        numberOfMonths: 1,
        dateFormat: "yy-mm-dd"
        });
        $("#embarazo_48").datepicker({
        changeMonth: true,
        numberOfMonths: 1,
        dateFormat: "yy-mm-dd"
        });
        $("#embarazo_50").datepicker({
        changeMonth: true,
        numberOfMonths: 1,
        dateFormat: "yy-mm-dd"
        });
        $("#embarazo_52").datepicker({
        changeMonth: true,
        numberOfMonths: 1,
        dateFormat: "yy-mm-dd"
        });
        $("#embarazo_54").datepicker({
        changeMonth: true,
        numberOfMonths: 1,
        dateFormat: "yy-mm-dd"
        });
        $("#embarazo_56").datepicker({
        changeMonth: true,
        numberOfMonths: 1,
        dateFormat: "yy-mm-dd"
        });

        $("#embarazo_58").datepicker({
        changeMonth: true,
        numberOfMonths: 1,
        dateFormat: "yy-mm-dd"
        });
        $("#embarazo_60").datepicker({
        changeMonth: true,
        numberOfMonths: 1,
        dateFormat: "yy-mm-dd"
        });


    });


</script>
<script type="text/javascript">
    //calcular IMC
    // function calcular_img_4(){


   // var valor_b1 = document.getElementById('embarazo_15').value;
   // var valor_a1 = document.getElementById('embarazo_16').value;

   // var resultado= parseInt(valor_b1)/(parseInt(valor_a1)*parseInt(valor_a1));

//alert(resultado);

//var numero = resultado;
//var resDecimal = numero.toFixed(4);

//    document.getElementById('embarazo_19').value=resDecimal;
//}


     function calcular_img_4()
{
  var altura=document.getElementById("embarazo_16").value; // TALLA
  altura=altura.toString().replace(',','.');
  var alturaMetro=altura/100;
  var peso=document.getElementById("embarazo_15").value; // PESO



        /*CALCULO IMC*/
        var alturaCuadrado=alturaMetro*alturaMetro;
        var imc=peso/alturaCuadrado;
        document.getElementById("embarazo_19").value=Math.round(imc*100)/100; // IMC

}

</script>

<fieldset id="hc_embarazo_2">
<legend align="left"> <div class="arrow-c" id="close-hc_embarazo_2"></div> <div class="arrow-o" id="open-hc_embarazo_2" ></div> <font>Valoracion Biopsicosocial</font></legend>
<div id="content-hc_embarazo_2">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_hc_embarazo_2" id="guardar_hc_embarazo_2" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>
<form id="form_hc_embarazo_2" name="form_hc_embarazo_2" action="<?php echo @$action_form_hc_embarazo_2 ?>#hc_embarazo_2" method="post" onsubmit="return validar1()";>

<input type="hidden" id="id_hc_embarazo_2" name="id_hc_embarazo_2" value="<?php echo @$id_hc_embarazo_2 ?>" />


&nbsp;
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr>
    <td colspan="2" ><div align="center">VALORACION    BIOPSICOSOCIAL</div></td>
  </tr>
  <tr>
    <td colspan="2" ></td>
  </tr>
    <tr>
     <td width="529" >¿El embarazo fue planeado?</td>
     <td width="98" >
        No<input type="radio" name="embarazo_1x" id="embarazo_1x" value="0" required <?php if ($embarazo_1x == 0) {echo 'checked="checked"';}?><?php if ($embarazo_1x == 0) {$embarazo_1x = "NO";}?>>
        Si<input type="radio" name="embarazo_1x" id="embarazo_1x" value="1" <?php if ($embarazo_1x == 1) {echo 'checked="checked"';}?><?php if ($embarazo_1x == 1) {$embarazo_1x = "SI";}?>></td>
    </tr>
        <tr>
          <td width="529" >¿El embarazo fue Deseado?</td>
            <td width="98">
                No<input type="radio" name="embarazo_2x" id="embarazo_2x" value="0" <?php if ($embarazo_2x == 0) {echo 'checked="checked"';}?><?php if ($embarazo_2x == 0) {$embarazo_2x = "NO";}?>>
                Si<input type="radio" name="embarazo_2x" id="embarazo_2x" value="1" <?php if ($embarazo_2x == 1) {echo 'checked="checked"';}?><?php if ($embarazo_2x == 1) {$embarazo_2x = "SI";}?>></td>
           </tr>
    <tr>
        <td width="529" >¿DURANTE EL ULTIMO AÑO, ha sido humillada,    menospreciada insultada o amenazada por su pareja?</td>
        <td width="98">
            No<input type="radio" name="embarazo_3x" id="embarazo_3x" value="0" <?php if ($embarazo_3x == 0) {echo 'checked="checked"';}?><?php if ($embarazo_3x == 0) {$embarazo_3x = "NO";}?>>
           Si<input type="radio" name="embarazo_3x" id="embarazo_3x" value="1" <?php if ($embarazo_3x == 1) {echo 'checked="checked"';}?><?php if ($embarazo_3x == 1) {$embarazo_3x = "SI";}?>></td>
   </tr>
  <tr>
    <td colspan="2" >&nbsp;</td>
  </tr>
  <tr>
    <td width="529">¿DURANTE EL ULTIMO AÑO fue golpeada    bofeteada pateada o lastimada físicamente o de otra manera?</td>
        <td width="98">
            No<input type="radio" name="embarazo_4x" id="embarazo_4x" value="0" <?php if ($embarazo_4x == 0) {echo 'checked="checked"';}?><?php if ($embarazo_4x == 0) {$embarazo_4x = "NO";}?>>
            Si <input type="radio" name="embarazo_4x" id="embarazo_4x" value="1" <?php if ($embarazo_4x == 1) {echo 'checked="checked"';}?><?php if ($embarazo_4x == 1) {$embarazo_4x = "SI";}?>></td>
  </tr>
  <tr>
    <td colspan="2" >&nbsp;</td>
  </tr>
  <tr>
    <td width="529">¿DESDE QUE ESTA EN GESTACION· golpeada    bofeteada pateada o lastimada físicamente o de otra manera?</td>
    <td width="98">
        No<input type="radio" name="embarazo_5x" id="embarazo_5x" value="0" <?php if ($embarazo_5x == 0) {echo 'checked="checked"';}?><?php if ($embarazo_5x == 0) {$embarazo_5x = "NO";}?>>
        Si<input type="radio" name="embarazo_5x" id="embarazo_5x" value="1" <?php if ($embarazo_5x == 1) {echo 'checked="checked"';}?><?php if ($embarazo_5x == 1) {$embarazo_5x = "SI";}?>></td>
  </tr>
  <tr>
    <td colspan="2" >&nbsp;</td>
  </tr>
  <tr>
    <td width="529" >¿DURANTE EL ULTIMO AÑO fue forzada a tener    relaciones sexuales?</td>
    <td width="98">
        No<input type="radio" name="embarazo_6x" id="embarazo_6x" value="0" <?php if ($embarazo_6x == 0) {echo 'checked="checked"';}?><?php if ($embarazo_6x == 0) {$embarazo_6x = "NO";}?>>
        Si<input type="radio" name="embarazo_6x" id="embarazo_6x" value="1"<?php if ($embarazo_6x == 1) {echo 'checked="checked"';}?><?php if ($embarazo_6x == 1) {$embarazo_6x = "SI";}?>></td>
  </tr>
  <tr>
    <td colspan="2" >&nbsp;</td>
  </tr>
  </table>
<p>&nbsp;</p>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr>
    <td colspan="2" ><div align="center">RIESGO DEPRESION POSTPARTO</div></td>
  </tr>
    <tr>
    <td colspan="2" >&nbsp;</td>
  </tr>
  <tr>
    <td width="529" >¿DURANTE EL MES PASADO, con frecuencia    se ha sentido triste deprimida o sin esperanza con frecuencia?</td>
    <td width="98" >
        No<input type="radio" name="embarazo_7x" id="embarazo_7x" value="0" <?php if ($embarazo_7x == 0) {echo 'checked="checked"';}?><?php if ($embarazo_7x == 0) {$embarazo_7x = "NO";}?>>
        Si<input type="radio" name="embarazo_7x" id="embarazo_7x" value="1" <?php if ($embarazo_7x == 1) {echo 'checked="checked"';}?><?php if ($embarazo_7x == 1) {$embarazo_7x = "SI";}?>></td>
  </tr>
  <tr>
    <td colspan="2" >&nbsp;</td>
  </tr>
  <tr>
    <td >¿DURANTE EL MES PASADO, ha permanecido    preocupada por tener poco interés o placer para hacer las cosas cotidianas?</td>
    <td width="98" >
        No<input type="radio" name="embarazo_8x" id="embarazo_8x" value="0" <?php if ($embarazo_8x == 0) {echo 'checked="checked"';}?><?php if ($embarazo_8x == 0) {$embarazo_8x = "NO";}?>>
        Si<input type="radio" name="embarazo_8x" id="embarazo_8x" value="1" <?php if ($embarazo_8x == 1) {echo 'checked="checked"';}?><?php if ($embarazo_8x == 1) {$embarazo_8x = "SI";}?>></td>
  </tr>
  <tr>
    <td colspan="2" >&nbsp;</td>
  </tr>
  <tr>
    <td width="529" >¿SIENTE QUE NECESITA AYUDA?</td>
     <td width="98">
        No<input type="radio" name="embarazo_9x" id="embarazo_9x" value="0" <?php if ($embarazo_9x == 0) {echo 'checked="checked"';}?><?php if ($embarazo_9x == 0) {$embarazo_9x = "NO";}?>>
        Si<input type="radio" name="embarazo_9x" id="embarazo_9x" value="1" <?php if ($embarazo_9x == 1) {echo 'checked="checked"';}?><?php if ($embarazo_9x == 1) {$embarazo_9x = "SI";}?>></td>
  </tr>
   <tr>
      <td width="529" >¿Ha utilizado sustancias psicoactivas o alcohol?</td>
     <td width="98" >
        No<input type="radio" name="embarazo_10x" id="embarazo_10x" value="0" <?php if ($embarazo_10x == 0) {echo 'checked="checked"';}?><?php if ($embarazo_10x == 0) {$embarazo_10x = "NO";}?>>
        Si<input type="radio" name="embarazo_10x" id="embarazo_10x" value="1" <?php if ($embarazo_10x == 1) {echo 'checked="checked"';}?><?php if ($embarazo_10x == 1) {$embarazo_10x = "SI";}?>></td>
  </tr>
</table>

<p>&nbsp;</p>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">

  <tr height="">
    <td colspan="7" height=""><div align="center">EXAMEN FISICO</div><BR></td>
  </tr>
  <tr height="">
    <td height="" width="">T A
      <input name="embarazo_11x" type="text" class="" id="embarazo_11x" value="<?php echo @$embarazo_11x; ?>" size="5"  />
      mmHg</td>
    <td colspan="2">&nbsp || F R
      <input name="embarazo_12x" type="text" class="" id="embarazo_12x" value="<?php echo @$embarazo_12x; ?>" size="5"  />
      min</td>
    <td width=""> &nbsp || F C
      <input name="embarazo_13x" type="text" class="" id="embarazo_13x" value="<?php echo @$embarazo_13x; ?>" size="5" />
      min</td>
    <td width=""> &nbsp || T°
        <input name="embarazo_14x" type="text" class="" id="embarazo_14x"   value="<?php echo @$embarazo_14x; ?>" size="5" />
      °C</td>
    <td width=""> &nbsp || Peso
        <input name="embarazo_15" type="text" class="" id="embarazo_15" onchange="calcular_img_4()" onkeypress="return isNumberKey(event)" value="<?php echo @$embarazo_15; ?>" size="5" />
      Kg</td>
    <td width=""> &nbsp || Talla
      <input name="embarazo_16" type="text" class="" id="embarazo_16" onchange="calcular_img_4()" onkeypress="return isNumberKey(event)" value="<?php echo @$embarazo_16; ?>" size="5" />
      cm</td>
  </tr>
  <tr height="">
    <td height="" colspan="7"><BR>Apariencia
      <input name="embarazo_17" type="text" class="" id="embarazo_17" value="<?php echo @$embarazo_17; ?>" size="38"  />

|| SPO2<input type="text" class="" id="embarazo_18" name="embarazo_18" value="<?php echo @$embarazo_18; ?>"/>
|| IMC
<input name="embarazo_19" type="text" class="" id="embarazo_19" readonly="readonly" value="<?php echo @$embarazo_19; ?>" size="7" /></td>
    </tr>
    <tr height="">
    <td height="" colspan="7"><BR>Altura Uterina
      <input name="embarazo_20" type="text" class="" id="embarazo_20" value="<?php echo @$embarazo_20; ?>" size="36" />

|| Estado Nutricional<input type="text" class="" id="embarazo_21" name="embarazo_21" value="<?php echo @$embarazo_21; ?>" />
    </tr>
 </table>

<p>&nbsp;</p>

<p>

<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr>
    <td width="378" colspan="5" > <div align="center">REVISION POR SISTEMAS</div></td>
  </tr>
  </table>
 <table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr>
    <td width="150" >Cabeza</td>
    <td width="50" >
  <td width="100"><textarea id="embarazo_22" name="embarazo_22" size="10"  cols="60" rows="1"  ><?php echo @$embarazo_22; ?></textarea> </td>

    </td>
  </tr>
  <tr>
    <td width="226" >Orl</td>
    <td width="142" >
    <td width="100"><textarea id="embarazo_23" name="embarazo_23" size="10"  cols="60" rows="1" ><?php echo @$embarazo_23; ?></textarea> </td>
          </td>
  </tr>
  <tr>
    <td width="226" >Tórax-Cardio-Respiratorio</td>
    <td width="142" >
    <td width="100"><textarea id="embarazo_24" name="embarazo_24" size="10"  cols="60" rows="1"><?php echo @$embarazo_24; ?></textarea> </td>
         </td>
  </tr>
  <tr>
    <td width="226" >Genitourinario</td>
    <td width="142" >
    <td width="100"><textarea id="embarazo_25" name="embarazo_25" size="10"  cols="60" rows="1"  ><?php echo @$embarazo_25; ?></textarea> </td>
          </td>
  </tr>
  <tr>
    <td width="226" >Neurólogo</td>
    <td width="142" >
    <td width="100"><textarea id="embarazo_26" name="embarazo_26" size="10"  cols="60" rows="1" ><?php echo @$embarazo_26; ?></textarea> </td>
          </td>
  </tr>
  <tr>
    <td width="226" >Abdomen</td>
    <td width="142" >
    <td width="100"><textarea id="embarazo_27" name="embarazo_27" size="10"  cols="60" rows="1"><?php echo @$embarazo_27; ?></textarea> </td>
          </td>
  </tr>
  <tr>
    <td width="226" >Osteo-Muscular</td>
    <td width="142" >
  <td width="100"><textarea id="embarazo_28" name="embarazo_28" size="10"  cols="60" rows="1"><?php echo @$embarazo_28; ?></textarea> </td>
          </td>
  </tr>
  <tr>
    <td width="226" >Piel Y Anexos</td>
    <td width="142" >
  <td width="100"><textarea id="embarazo_29" name="embarazo_29" size="10"  cols="60" rows="1"><?php echo @$embarazo_29; ?></textarea> </td>
          </td>
  </tr>
</table>
&nbsp;
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr>
    <td colspan="2" ><div align="center">VALORACION GINECOLOGICA</div></td>
  </tr>
    <tr>
    <td width="278" >Valoracion del cuello</td>
    <td width="158" >
      <input type="text"  id="embarazo_30" name="embarazo_30" size="10" value="<?php echo @$embarazo_30; ?>" />
    </td>
  </tr>
    <tr>
    <td width="278" >Tamaño</td>
    <td width="158" >
      <input type="text"  id="embarazo_31" name="embarazo_31" size="10" value="<?php echo @$embarazo_31; ?>"/>
    </td>
  </tr>
    <tr>
    <td width="278" >Posicion uterina</td>
    <td width="158" >
      <input type="text"  id="embarazo_32" name="embarazo_32" size="10" value="<?php echo @$embarazo_32; ?>"/>
    </td>
  </tr>
  <tr>
    <td width="278" >Otros</td>
    <td width="158" >
      <input type="text"  id="embarazo_33" name="embarazo_33" size="10" value="<?php echo @$embarazo_33; ?>"/>
    </td>
  </tr>
  </table>
&nbsp;
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr>
    <td colspan="2" ><div align="center">VALORACION OBSTETRICA</div></td>
  </tr>
  <tr>
    <td width="278" >Numero De Fetos</td>
    <td width="158" >
      <input type="text"  id="embarazo_34" name="embarazo_34" size="10" value="<?php echo @$embarazo_34; ?>"/>
    </td>
  </tr>
  <tr>
    <td width="278" >Situación Y Presentación Fetal</td>
    <td width="158" >
      <input type="text"  id="embarazo_35" name="embarazo_35" size="10" value="<?php echo @$embarazo_35; ?>"/>
    </td>
  </tr>
  <tr>
    <td width="278" >Frecuencia Cardiaca Fetal</td>
    <td width="158" >
      <input type="text"  id="embarazo_36" name="embarazo_36" size="10" value="<?php echo @$embarazo_36; ?>"/>
    </td>
  </tr>
  <tr>
    <td width="278" >Movimientos Fetales</td>
    <td width="158" >
      <input type="text"  id="embarazo_37" name="embarazo_37" size="10" value="<?php echo @$embarazo_37; ?>"/>
    </td>
  </tr>
</table>
&nbsp;
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr>
    <td width="250" ><div align="center">PARACLINICOS</div></td>
    <td width="70" ><div align="center">Fecha</div></td>
    <td width="70" ><div align="center">Resultado</div></td>
  </tr>
  <tr><!-- tres-->
    <td width="356" >Urocultivo Y Antibiograma</td>
    <td width="106" ><input type="text"  id="embarazo_38" name="embarazo_38" onclick="style_()" autocomplete="off" size="10" value="<?php echo @$embarazo_38; ?>" /></td>
    <td width="106" ><input type="text"  id="embarazo_39" name="embarazo_39" size="12" value="<?php echo @$embarazo_39; ?>" /></td>
  </tr>
  <tr>
    <td width="356" >Hemograma</td>
    <td width="106" ><input type="text"  id="embarazo_40" name="embarazo_40"  onclick="style_()" autocomplete="off" size="10" value="<?php echo @$embarazo_40; ?>"/></td>
    <td width="106" ><input type="text"  id="embarazo_41" name="embarazo_41" size="12"  value="<?php echo @$embarazo_41; ?>" /></td>
  </tr>
  <tr>
    <td width="356" >Hemoclasificacion</td>
    <td width="106" ><input type="text"  id="embarazo_42" name="embarazo_42"  onclick="style_()" autocomplete="off" size="10" value="<?php echo @$embarazo_42; ?>" /></td>
    <td width="106" ><input type=""  id="embarazo_43" name="embarazo_43" size="12" value="<?php echo @$embarazo_43; ?>" /></td>
  </tr>
  <tr>
    <td width="356" >Glicemia</td>
    <td width="106" ><input type="text" id="embarazo_44" name="embarazo_44"  onclick="style_()" autocomplete="off" size="10" value="<?php echo @$embarazo_44; ?>" /></td>
    <td width="106" ><input type="text"  id="embarazo_45" name="embarazo_45"  size="12" value="<?php echo @$embarazo_45; ?>" /></td>
  </tr>
  <tr>
    <td width="356" >Prueba Rápida VIH</td>
    <td width="106" ><input type="text"  id="embarazo_46" name="embarazo_46"  onclick="style_()" autocomplete="off" size="10" value="<?php echo @$embarazo_46; ?>" /></td>
    <td width="106" ><input type="text" class=" " id="embarazo_47" name="embarazo_47" size="12" value="<?php echo @$embarazo_47; ?>" ></td>
  </tr>
  <tr>
    <td width="356" >Prieba Treponemica Rápida Para    Sifilis</td>
    <td width="106" ><input type="text"  id="embarazo_48" name="embarazo_48" onclick="style_()" autocomplete="off"  size="10" value="<?php echo @$embarazo_48; ?>" /></td>
    <td width="106" ><input type="text" class=" " id="embarazo_49" name="embarazo_49" size="12" value="<?php echo @$embarazo_49; ?>" /></td>
  </tr>
  <tr>
    <td width="356" >Antígena De Superficie Para Hepatitis    B-Hbsag</td>
    <td width="106" ><input type="text"  id="embarazo_50" name="embarazo_50" onclick="style_()" autocomplete="off" size="10" value="<?php echo @$embarazo_50; ?>" /></td>
    <td width="106" ><input type="text" class="" id="embarazo_51" name="embarazo_51" size="12" value="<?php echo @$embarazo_51; ?>" "/></td>
  </tr>
  <tr>
    <td width="356" >Pruebas De IgG para toxoplasma</td>
    <td width="106" ><input type="text" class="" id="embarazo_52" name="embarazo_52" onclick="style_()"autocomplete="off" size="10" value="<?php echo @$embarazo_52; ?>"/></td>
    <td width="106" ><input type="text" class="" id="embarazo_53" name="embarazo_53" size="12" value="<?php echo @$embarazo_53; ?>"/></td>
  </tr>
  <tr>
    <td width="356" >Ecografía</td>
    <td width="106" ><input type="text"  id="embarazo_54" name="embarazo_54"  class="  " autocomplete="off" onclick="style_()" size="10" value="<?php echo @$embarazo_54; ?>"/></td>
    <td width="106" ><input type="text" class="" id="embarazo_55" name="embarazo_55" size="12" value="<?php echo @$embarazo_55; ?>" /></td>
  </tr>
  <tr>
    <td width="356" >IgM Para Toxoplasma</td>
    <td width="106" ><input type="text"  id="embarazo_56" name="embarazo_56"  class="" autocomplete="off" onclick="style_()" size="10" value="<?php echo @$embarazo_56; ?>" /></td>
    <td width="106" ><input type="text" class="" id="embarazo_57" name="embarazo_57" size="12" value="<?php echo @$embarazo_57; ?>"/></td>
  </tr>
  <tr>
    <td width="356" >IgG para rubeola</td>
    <td width="106" ><input type="text"  id="embarazo_58" name="embarazo_58"  class=""  autocomplete="off"  onclick="style_()" size="10" value="<?php echo @$embarazo_58; ?>"/></td>
    <td width="106" ><input type="text" class="" id="embarazo_59" name="embarazo_59" size="12" value="<?php echo @$embarazo_59; ?>" /></td>
  </tr>
  <tr>
    <td width="356" >Tamizaje para cuello uterino</td>
    <td width="106" ><input type="text"  id="embarazo_60" name="embarazo_60"  class=""  autocomplete="off" onchange="activar()"  onclick="style_()" size="10" value="<?php echo @$embarazo_60; ?>" /></td>
    <td width="106" ><input type="text" class="" id="embarazo_61" name="embarazo_61" size="12" value="<?php echo @$embarazo_61; ?>" ></td>
  </tr>
</table>

<p>&nbsp;</p>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr>
    <td height="19" width="100"><div align="center">    OBSERVACION</td>
  </tr>
  <tr>
    <td width="144"><textarea id="embarazo_62" name="embarazo_62"  cols="60" rows="1"><?php echo @$embarazo_62; ?></textarea> </td>
  </tr>
</table>

<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr>
  <p>&nbsp;</p>
 <table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
       <td width="403" colspan="2" ><div align="center">     RIESGO MATERNO</div></td>
  </tr>
  <tr>
    <td width="214" >Seleccione el riesgo</td>
     <td width="188">
        Alto<input type="radio" name="embarazo_63" id="embarazo_63" value="0" required <?php if ($embarazo_63 == 0) {echo 'checked="checked"';}?><?php if ($embarazo_63 == 0) {$embarazo_63 = "ALTO";}?>>
        Medio<input type="radio" name="embarazo_63" id="embarazo_63" value="1" required <?php if ($embarazo_63 == 1) {echo 'checked="checked"';}?><?php if ($embarazo_63 == 1) {$embarazo_63 = "MEDIO";}?>>
        Bajo<input type="radio" name="embarazo_63" id="embarazo_63" value="2" required <?php if ($embarazo_63 == 2) {echo 'checked="checked"';}?><?php if ($embarazo_63 == 2) {$embarazo_63 = "BAJO";}?>></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr>
    <td width="214" ><div align="center"> PLAN DE CUIDADO </td>
  </tr>

    <tr>
  <td width="100"><textarea id="embarazo_64" name="embarazo_64"  cols="60" rows="1" ><?php echo @$embarazo_64; ?></textarea> </td>
        </tr>
</table>
 <br>
<br>
<?php echo @$button ?>
</form><br>
<div id="imprimir_formularios_oculto" style="display: none">

    <?php

$tamfont = 10;
?>
<?php

include $GLOBALS['raiz'] . 'mvc/vista/terapeuta/formularios/datos_p.php';

?>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="" style="font-size: <?php echo $tamfont ?>px !important">
   <?php

/*
$cita_x = $_REQUEST['id_cita_h'];
ECHO  $sql2 = "Select * from cita where id_cita=".$cita_x;
$result2 = $conexion->EjecutarQuery($sql2);
$row2 = mysql_fetch_array($result2);
$fecha_cita_1 = $row2['fecha'];*/

$sql2         = "Select * from valoracion_inicial_ where id_valoracion_inicial_=" . $_REQUEST['id_vinicial'];
$result2      = $conexion->EjecutarQuery($sql2);
$row2         = mysql_fetch_array($result2);
$fecha_cita_1 = $row2['fecha'];
/* echo "<pre>";
print_r($_REQUEST);
echo "</pre>";*/

//$NNNNN=$_REQUEST['motivo_1'];

echo '<tr><td colspan=2>-HISTORIA:-
                ' . $_REQUEST['proceso'] . '-FECHA- ' . $fecha_cita_1 . '
            </td>
    </tr>';

if ($motivo_1 != "") {

    echo '<tr ><td width="15PX">- MOTIVO DE CONSULTA-</td>
                <td >
                    ' . $motivo_1 . '
                </td>
        </tr>';
}

if ($actual_1 != "") {

    echo '<tr><td>- ENFERMEDAD ACTUAL-</td>
                <td>
                    ' . @$actual_1 . '
                </td>
        </tr>';
}

//personales

?>
</table>
<hr width=750>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">
    <tr height="">
         <td colspan="12" height=""><div align="center">ANTECEDENTES PERSONALES</div><BR></td>
    </tr>
     <tr>
            <?php
if ($embarazo_1 != "") {
    echo '<td height="" width="168">Quirurgicos</td>
                    <td>
                        ' . $embarazo_1 . '
                    </td>';
}
if ($embarazo_2 != "") {
    echo '<td height="" width="168">Patológicos</td>
                    <td>
                        ' . $embarazo_2 . '
                    </td>
                 ';
}
?>
    </tr>
    <tr>
        <?php
if ($embarazo_3 != "") {
    echo '<td height="" width="168">Toxicos</td>
                        <td>
                            ' . $embarazo_3 . '
                        </td>
                     ';
}

if ($embarazo_4 != "") {
    echo '<td height="" width="168">Alérgicos y Farmacolólogicos </td>
                        <td>
                            ' . $embarazo_4 . '
                        </td>';
}
?>
    </tr>
    <tr>
        <?php
if ($embarazo_5 != "") {
    // pendiente el or
    echo '<td height="" width="168">Traumatologicos</td>
                        <td>
                            ' . $embarazo_5 . '
                        </td>';
}
if ($embarazo_6 != "") {
    // pendiente el or
    echo '<td height="" width="168">Ginecologicos</td>
                        <td>
                            ' . $embarazo_6 . '
                        </td>';
}
?>
    </tr>
    <tr>
      <?php
if ($embarazo_7 != "") {
    echo '<td height="14" width="168">Otro</td>
                        <td>
                            ' . $embarazo_7 . '
                        </td>';
}
?>
    </tr>
</table>
<hr width=750>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">
      <tr height="">
         <td colspan="12" height=""><div align="center">ANTECEDENTES GINECOLÓGICOS</div><BR></td>
      </tr>
        <?php
if ($embarazo_8 != "") {
    echo '<tr>
           <td height="" width="40%">Edad Menarquia </td>
                    <td>
                        ' . $embarazo_8 . '
                    </td>
            </tr>';
}
if ($embarazo_9 != "") {
    echo '<tr>
           <td height="" width="168">Patrón Ciclos Menstruales</td>
                      <td>
                        ' . $embarazo_9 . '
                    </td>
            </tr>';
}
if ($embarazo_10 != "") {
    echo '<tr>
           <td height="" width="168">Fecha Ultimas 2 Menstruaciones </td>
                    <td>
                        ' . $embarazo_10 . '
                    </td>
            </tr>';
}
if ($embarazo_11 != "") {
    echo '<tr>
           <td height="" width="168">Intervalo intergenecicos </td>
                    <td>
                        ' . $embarazo_11 . '
                    </td>
            </tr>';
}
if ($embarazo_12 != "") {
    echo '<tr>
           <td height="" width="168">Métodos Anticonceptivos Utilizados </td>
                    <td>
                        ' . $embarazo_12 . '
                    </td>
            </tr>';
}
if ($embarazo_13 != "") {
    echo '<tr>
           <td height="" width="168">Fecha Ultimo Uso Métodos Anticonceptivos</td>
                    <td>
                        ' . $embarazo_13 . '
                    </td>
            </tr>';
}
if ($embarazo_14 != "") {
    echo '<tr>
           <td height="" width="168">Antecedente O Presencia Flujo Vaginal </td>
                    <td>
                        ' . $embarazo_14 . '
                    </td>
            </tr>';
}
if ($eptopico != "") {
    echo '<tr>
           <td height="" width="168">Tratamiento Infertilidad </td>
                    <td>
                        ' . $eptopico . '
                    </td>
            </tr>';
}
if ($gemelos != "") {
    echo '<tr>
           <td height="" width="168">Infección De Transmisión Sexual </td>
                    <td>
                        ' . $gemelos . '
                    </td>
            </tr>';
}
if ($ultimo25 != "") {
    echo '<tr>
           <td height="" width="168">Ultima Fecha De Tamización De Cáncer De Cuello Uterino</td>
                    <td>
                        ' . $ultimo25 . '
                    </td>
            </tr>';
}

?>
</table>
<hr width=750>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">
    <tr height="">
        <td colspan="12" height=""><div align="center">ANTECEDENTE OBSTETRICOS</div><BR></td>
          </tr>
            <?php
if ($normal40 != "") {
    echo '<tr>
           <td height="" width="30%">Total gestación </td>
                    <td>
                        ' . $normal40 . '
                    </td>
            </tr>';
}
if ($ges_peso != "") {
    echo '<tr>
           <td height="" width="168">Abortos</td>
                    <td>
                        ' . $ges_peso . '
                    </td>
         </tr>';
}
if ($ges_talla != "") {
    echo '<tr>
           <td height="" width="168">Ectopicos</td>
                    <td>
                        ' . $ges_talla . '
                    </td>
            </tr>';
}
if ($fpp != "") {
    echo '<tr>
           <td height="" width="168">Numero de partos</td>
                    <td>
                        ' . $fpp . '
                    </td>
            </tr>';
}
if ($ges__fum != "") {
    echo '<tr>
           <td height="" width="168">Fecha de ultimo parto </td>
                    <td>
                        ' . $ges__fum . '
                    </td>
            </tr>';
}
?>
<tr>
<?php
if ($eg_fum != "") {
    echo ' <td height="" width="200px">Parto</td>
                    <td width="150px">
                        ' . $eg_fum . '
                    </td>';
}
if ($eg_eco != "") {
    echo '
                    <td width="">
                        ' . $eg_eco . '
                    </td>';
}
if ($antirubeola_1 != "") {
    echo '
                    <td width="">
                        ' . $antirubeola_1 . '
                    </td>';
}

?>
 </tr>
 <?php
if ($fum_1_act != "") {
    echo '<tr>
           <td height="" width="168">Sindrome de HELLP </td>
                    <td>
                        ' . $fum_1_act . '
                    </td>
            </tr>';
}
if ($fum_1_pas != "") {
    echo '<tr>
           <td height="" width="168">Intervalo Intergenesicos</td>
                    <td>
                        ' . $fum_1_pas . '
                    </td>
            </tr>';
}
if ($fum_1_drog != "") {
    echo '<tr>
           <td height="" width="168">Numero de nacidos o muertos </td>
                    <td>
                        ' . $fum_1_drog . '
                    </td>
            </tr>';
}
if ($fum_1_alcohol != "") {
    echo '<tr>
           <td height="" width="168">Peso al nacer  </td>
                    <td>
                        ' . $fum_1_alcohol . '
                    </td>
            </tr>';
}
if ($fum_1_violencia != "") {
    echo '<tr>
           <td height="" width="168">Molas</td>
                    <td>
                        ' . $fum_1_violencia . '
                    </td>
            </tr>';
}
if ($fum_2_act != "") {
    echo '<tr>
           <td height="" width="168">Placenta Previa</td>
                    <td>
                        ' . $fum_2_act . '
                    </td>
            </tr>';
}
if ($fum_2_pas != "") {
    echo '<tr>
           <td height="" width="168">Abrupto</td>
                    <td>
                        ' . $fum_2_pas . '
                    </td>
            </tr>';
}
if ($fum_2_drog != "") {
    echo '<tr>
           <td height="" width="168">Ruptura Prematura Membrana </td>
                    <td>
                        ' . $fum_2_drog . '
                    </td>
            </tr>';
}
if ($fum_2_alcohol != "") {
    echo '<tr>
           <td height="" width="168">Polihidramnios</td>
                    <td>
                        ' . $fum_2_alcohol . '
                    </td>
            </tr>';
}
if ($fum_2_violencia != "") {
    echo '<tr>
           <td height="" width="168">Oligoamnios</td>
                    <td>
                        ' . $fum_2_violencia . '
                    </td>
            </tr>';
}
if ($fum_3_act != "") {
    echo '<tr>
           <td height="" width="168">Retardo En Crecimiento Intrauterino</td>
                    <td>
                        ' . $fum_3_act . '
                    </td>
            </tr>';
}
if ($fum_3_pas != "") {
    echo '<tr>
           <td height="" width="168">Retención Placentaria</td>
                    <td>
                        ' . $fum_3_pas . '
                    </td>
            </tr>';
}
if ($fum_3_drog != "") {
    echo '<tr>
           <td height="" width="168">Infección En El Posparto   </td>
                    <td>
                        ' . $fum_3_drog . '
                    </td>
            </tr>';
}
if ($fum_3_alcohol != "") {
    echo '<tr>
           <td height="" width="168">Hemorragia Obstétrica Que Requirió Trasfusión  </td>
                    <td>
                        ' . $fum_3_alcohol . '
                    </td>
            </tr>';
}
if ($fum_3_violencia != "") {
    echo '<tr>
           <td height="" width="168">Preeclampsia</td>
                    <td>
                        ' . $fum_3_violencia . '
                    </td>
            </tr>';
}
if ($ex_mamas != "") {
    echo '<tr>
           <td height="" width="168">Eclampsia</td>
                    <td>
                        ' . $ex_mamas . '
                    </td>
            </tr>';
}
if ($ex_odon != "") {
    echo '<tr>
           <td height="" width="168">Hijos Con Malformación Congénita   </td>
                    <td>
                        ' . $ex_odon . '
                    </td>
            </tr>';
}
if ($tetano1 != "") {
    echo '<tr>
           <td height="" width="168">Muerte Perinatal  (S/N)    </td>
                    <td>
                        ' . $tetano1 . '
                    </td>
            </tr>';
}
if ($tetano2 != "") {
    echo '<tr>
           <td height="" width="168">Muerte Perinatal  (Causa)  </td>
                    <td>
                        ' . $tetano2 . '
                    </td>
            </tr>';
}
?>
</table>
<hr width=750>
<br>
<table border="0" align="center" width="745" cellspacing="0" class="" style="font-size: <?php echo $tamfont ?>px !important">
      <tr height="">
        <td colspan="4" height="" width="200px" align="center">ANTECEDENTES FAMILIARES</td>
      </tr>
    <tr>
        <?php
if ($tetano3 != "") {
    echo '<td height="" width="25%">Hipertensión Arterial Crónica</td>
                        <td  width="15%">
                           ' . $tetano3 . '
                        </td>
                ';
}if ($cervix_1 != "") {
    echo ' <td width="250px">
                           ' . $cervix_1 . '
                        </td>
                ';
}
?>
    </tr>
    <tr>
        <?php
if ($cervix_2 != "") {
    echo '<td height="" width="200px">Preeclampsia</td>
                        <td  width="200px">
                           ' . $cervix_2 . '
                        </td>
                ';
}if ($cervix_3 != "") {
    echo ' <td>
                           ' . $cervix_3 . '
                        </td>
                ';
}
?>
    </tr>   <tr>
        <?php
if ($rh_grupo != "") {
    echo '<td height="" width="">Eclampsia</td>
                        <td  width="200px">
                           ' . $rh_grupo . '
                        </td>
                ';
}if ($fh_factor != "") {
    echo ' <td>
                           ' . $fh_factor . '
                        </td>
                ';
}
?>
    </tr>   <tr>
        <?php
if ($rh_glubo != "") {
    echo '<td height="" width="">Cardiopatía</td>
                        <td  width="200px">
                           ' . $rh_glubo . '
                        </td>
                ';
}if ($rh_inmu != "") {
    echo ' <td>
                           ' . $rh_inmu . '
                        </td>
                ';
}
?>
    </tr>
     <tr>
        <?php
if ($toxo_1 != "") {
    echo '<td height="" width="">Diabetes</td>
                        <td  width="200px">
                           ' . $toxo_1 . '
                        </td>
                ';
}if ($toxo_2 != "") {
    echo ' <td>
                           ' . $toxo_2 . '
                        </td>
                ';
}
?>
    </tr>
     <tr>
        <?php
if ($toxo_3 != "") {
    echo '<td height="" width="">Enfermedades Metabólicas</td>
                        <td  width="200px">
                           ' . $toxo_3 . '
                        </td>
                ';
}if ($vih_1 != "") {
    echo ' <td>
                           ' . $vih_1 . '
                        </td>
                ';
}
?>
    </tr>
    <tr>
        <?php
if ($enfinf1 != "") {
    echo '<td height="" width="">Enfermedad Autoinmune</td>
                        <td  width="200px">
                           ' . $enfinf1 . '
                        </td>
                ';
}if ($enfinf2 != "") {
    echo ' <td>
                           ' . $enfinf2 . '
                        </td>
                ';
}
?>
    </tr>
    <tr>
        <?php
if ($enfinf3 != "") {
    echo '<td height="" width="">Enfermedad Infecciosa</td>
                        <td  width="200px">
                           ' . $enfinf3 . '
                        </td>
                ';
}if ($enfinf4 != "") {
    echo ' <td>
                           ' . $enfinf4 . '
                        </td>
                ';
}
?>
    </tr>
   <tr>
        <?php
if ($enfinf5 != "") {
    echo '<td height="" width="">Congénitas</td>
                        <td  width="200px">
                           ' . $enfinf5 . '
                        </td>
                ';
}if ($cong_1 != "") {
    echo ' <td>
                           ' . $cong_1 . '
                        </td>
                ';
}
?>
    </tr>
     <tr>
        <?php
if ($cong_2 != "") {
    echo '<td height="" width="">Epilepsia</td>
                        <td  width="200px">
                           ' . $cong_2 . '
                        </td>
                ';
}if ($cong_3 != "") {
    echo ' <td>
                           ' . $cong_3 . '
                        </td>
                ';
}
?>
    </tr>
    <tr>
        <?php
if ($cong_4 != "") {
    echo '<td height="" width="">Trastornos Mentales</td>
                        <td  width="200px">
                           ' . $cong_4 . '
                        </td>
                ';
}if ($cong_5 != "") {
    echo ' <td>
                           ' . $cong_5 . '
                        </td>
                ';
}
?>
    </tr>
    <tr>
        <?php
if ($cong_6 != "") {
    echo '<td height="" width="">Gestación Múltiples</td>
                        <td  width="200px">
                           ' . $cong_6 . '
                        </td>
                ';
}if ($cong_7 != "") {
    echo ' <td>
                           ' . $cong_7 . '
                        </td>
                ';
}
?>
    </tr>
    <tr>
        <?php
if ($cong_8 != "") {
    echo '<td height="" width="">Tuberculosis</td>
                        <td  width="200px">
                           ' . $cong_8 . '
                        </td>
                ';
}if ($cong_9 != "") {
    echo ' <td>
                           ' . $cong_9 . '
                        </td>
                ';
}
?>
    </tr>
    <tr>
        <?php
if ($cong_10 != "") {
    echo '<td height="" width="">Neoplasia</td>
                        <td  width="200px">
                           ' . $cong_10 . '
                        </td>
                ';
}if ($cong_11 != "") {
    echo ' <td>
                           ' . $cong_11 . '
                        </td>
                ';
}
?>
    </tr>
    <tr>
        <?php
if ($cong_12 != "") {
    echo '<td height="" width="">Otras  ¿Cuál?</td>
                        <td  width="200px">
                           ' . $cong_12 . '
                        </td>
                ';
}if ($cong_13 != "") {
    echo ' <td>
                           ' . $cong_13 . '
                        </td>
                ';
}
?>
    </tr>
</table>
<hr width=750>
<br>
<table border="0" align="center" width="745" cellspacing="0" class="" style="font-size: <?php echo $tamfont ?>px !important">
      <tr height="">
        <td colspan="4" height="" align="center">GESTACION ACTUAL</td>
      </tr>
        <?php
if ($cong_14 != "") {
    echo '<tr>
            <td height="" width="30%">Semana De Gestación probable </td>
            <td  width="">
               ' . $cong_14 . '
            </td>
         </tr>';
}if ($cong_15 != "") {
    echo '<tr>
            <td height="" width="">Edad gestacional probable</td>
            <td  width="">
               ' . $cong_15 . '
            </td>
         </tr>';
}if ($cong_16 != "") {
    echo '<tr>
            <td height="" width="">Movimientos fetales  </td>
            <td  width="">
               ' . $cong_16 . '
            </td>
         </tr>';
}if ($cong_17 != "") {
    echo '<tr>
            <td height="" width="">Sintematologia</td>
            <td  width="">
               ' . $cong_17 . '
            </td>
         </tr>';
}if ($cong_18 != "") {
    echo '<tr>
            <td height="" width="">Cefalea Persistente  </td>
            <td  width="">
               ' . $cong_18 . '
            </td>
         </tr>';
}if ($cong_19 != "") {
    echo '<tr>
            <td height="" width="">Edema Progresivo </td>
            <td  width="">
               ' . $cong_19 . '
            </td>
         </tr>';
}if ($cong_20 != "") {
    echo '<tr>
            <td height="" width="">Epigastralgia</td>
            <td  width="">
               ' . $cong_20 . '
            </td>
         </tr>';
}if ($cong_21 != "") {
    echo '<tr>
            <td height="" width="">Otros</td>
            <td  width="">
               ' . $cong_21 . '
            </td>
         </tr>';
}
?>
   </tr>
</table>
<hr width=750>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="6" align="center" align="left">VALORACION BIOPSICOSOCIAL</td>
      </tr>
     <?php
if ($embarazo_1x != "") {
    echo '<tr>
                <td height="" width="50px">¿El embarazo fue planeado?  </td>
                    <td align="left" width="200px">
                        ' . $embarazo_1x . '
                    </td>
           </tr>';
}if ($embarazo_2x != "") {
    echo '<tr>
                <td height="" width="">¿El embarazo fue Deseado?    </td>
                    <td align="left">
                        ' . $embarazo_2x . '
                    </td>
           </tr>';
}if ($embarazo_3x != "") {
    echo '<tr>
                <td height="" width="">¿DURANTE EL ULTIMO AÑO, ha sido humillada, menospreciada insultada o amenazada por su pareja?</td>
                    <td align="left">
                        ' . $embarazo_3x . '
                    </td>
           </tr>';
}if ($embarazo_4x != "") {
    echo '<tr>
                <td height="" width="">¿DURANTE EL ULTIMO AÑO fue golpeada bofeteada pateada o lastimada físicamente o de otra manera? </td>
                    <td align="left">
                        ' . $embarazo_4x . '
                    </td>
           </tr>';
}if ($embarazo_5x != "") {
    echo '<tr>
                <td height="" width="">¿DESDE QUE ESTA EN GESTACION· golpeada bofeteada pateada o lastimada físicamente o de otra manera?   </td>
                    <td align="left">
                        ' . $embarazo_5x . '
                    </td>
           </tr>';
}if ($embarazo_6x != "") {
    echo '<tr>
                <td height="" width="">¿DURANTE EL ULTIMO AÑO fue forzada a tener relaciones sexuales?  </td>
                    <td align="left">
                        ' . $embarazo_6x . '
                    </td>
           </tr>';
}
?>
</table>
<hr width=750>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">
      <tr height="19">
        <td width="" height="19" colspan="2" align="center" >RIESGO DEPRESION POSTPARTO</td>
    </tr>
          <?php
if ($embarazo_7x != "") {
    echo '<tr>
             <td height="" width="">¿DURANTE EL MES PASADO, con frecuencia se ha sentido triste deprimida o sin esperanza con frecuencia?  </td>
                <td align="left" width="150px">
                    ' . $embarazo_7x . '
                </td>
           </tr>';
}
if ($embarazo_8x != "") {
    echo '<tr>
             <td height="" width="">¿DURANTE EL MES PASADO, ha permanecido preocupada por tener poco interés o placer para hacer las cosas cotidianas?  </td>
                <td align="left">
                    ' . $embarazo_8x . '
                </td>
           </tr>';
}
if ($embarazo_9x != "") {
    echo '<tr>
             <td height="" width="">¿SIENTE QUE NECESITA AYUDA? </td>
                <td align="left">
                    ' . $embarazo_9x . '
                </td>
           </tr>';
}
if ($embarazo_10x != "") {
    echo '<tr>
             <td height="" width="">¿Ha utilizado sustancias psicoactivas o alcohol?    </td>
                <td align="left">
                    ' . $embarazo_10x . '
                </td>
           </tr>';
}
?>

</table>

<br>
<table width="745" border="0" style="border:1px solid #000000; font-size:90%;" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">
      <tr height="">
         <td colspan="12" height=""><div align="center">EXAMEN FISICO</div><BR></td>
      </tr>
    <tr>
          <?php

if ($embarazo_11x != "") {
    echo '
                      <td height="" width="">T A</td>
                        <td align="left">
                            ' . $embarazo_11x . '
                        mmHg</td>';
}

if ($embarazo_12x != "") {
    echo '<td height="" width="">|| F.Respiratoria</td>
                        <td>
                            ' . $embarazo_12x . '
                        _ por min</td>
                     ';
}
if ($embarazo_13x != "") {
    echo '
                      <td height="" width="">|| F.Pulso</td>
                        <td>
                            ' . $embarazo_13x . '
                        _por min</td>
                     ';
}
if ($embarazo_14x != "") {
    echo '
                      <td height="" width="">||Temperatura</td>
                        <td>
                            ' . $embarazo_14x . '
                        _°C</td>
                     ';
}
if ($embarazo_15 != "") {
    echo '
                      <td height="" width="">|| Peso</td>
                        <td>
                            ' . $embarazo_15 . '
                        _KG</td>
                     ';
}
if ($embarazo_16 != "") {
    echo '
                      <td height="" width="">|| Talla</td>
                        <td>
                            ' . $embarazo_16 . '
                        _cm</td>
                     ';
}
?>
    </tr>
    <tr>
    <?php
if ($embarazo_17 != "") {
    echo '<td height="" width="">Apariencia</td>
                    <td>
                        ' . $embarazo_17 . '
                    </td>';
}
if ($embarazo_18 != "") {
    // pendiente el or
    echo '<td height="" width="10">|| SPO2</td>
                    <td>
                        ' . $embarazo_18 . '
                    </td>';
}
if ($embarazo_19 != "") {
    // pendiente el or
    echo ' <td height="" width="10">|| IMC</td>
                    <td>
                        ' . $embarazo_19 . '
                    </td>
                 ';
}
?>
   </tr>
   <tr>
    <?php
if ($embarazo_20 != "") {
    echo '<td height="" width="">Altura Uterina</td>
                    <td>
                        ' . $embarazo_20 . '
                    </td>';
}
if ($embarazo_21 != "") {
    // pendiente el or
    echo '<td height="" width="10">|| Estado Nutricional</td>
                    <td>
                        ' . $embarazo_21 . '
                    </td>';
}
?>
   </tr>
</table>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="4" align="center">REVISION POR SISTEMAS</td>
      </tr>
      <?php
if ($embarazo_22 != "") {
    echo '<tr>
              <td height="" width="200px">Cabeza</td>
                <td align="left">
                    ' . $embarazo_22 . '
                </td>
          </tr>';
}if ($embarazo_23 != "") {
    echo '<tr>
              <td height="" width="">Orl</td>
                <td align="left">
                    ' . $embarazo_23 . '
                </td>
          </tr>';
}if ($embarazo_24 != "") {
    echo '<tr>
              <td height="" width="">Tórax-Cardio-Respiratorio </td>
                <td align="left">
                    ' . $embarazo_24 . '
                </td>
          </tr>';
}if ($embarazo_25 != "") {
    echo '<tr>
              <td height="" width="">Genitourinario</td>
                <td align="left">
                    ' . $embarazo_25 . '
                </td>
          </tr>';
}if ($embarazo_26 != "") {
    echo '<tr>
              <td height="" width="">Neurólogo</td>
                <td align="left">
                    ' . $embarazo_26 . '
                </td>
          </tr>';
}if ($embarazo_27 != "") {
    echo '<tr>
              <td height="" width="">Abdomen</td>
                <td align="left">
                    ' . $embarazo_27 . '
                </td>
          </tr>';
}if ($embarazo_28 != "") {
    echo '<tr>
              <td height="" width="">Osteo-Muscular </td>
                <td align="left">
                    ' . $embarazo_28 . '
                </td>
          </tr>';
}if ($embarazo_29 != "") {
    echo '<tr>
              <td height="" width="">Piel Y Anexos  </td>
                <td align="left">
                    ' . $embarazo_29 . '
                </td>
          </tr>';
}
?>

</table>
<hr width=750>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="2" align="center">VALORACION GINECOLOGICA</td>
      </tr>
      <?php
if ($embarazo_30 != "") {
    echo '<tr>
              <td height="" width="200px">Valoracion del cuello  </td>
                <td align="left">
                    ' . $embarazo_30 . '
                </td>
          </tr>';
}if ($embarazo_31 != "") {
    echo '<tr>
              <td height="" width="">Tamaño</td>
                <td align="left">
                    ' . $embarazo_31 . '
                </td>
          </tr>';
}if ($embarazo_32 != "") {
    echo '<tr>
              <td height="" width="">Posicion uterina</td>
                <td align="left">
                    ' . $embarazo_32 . '
                </td>
          </tr>';
}if ($embarazo_33 != "") {
    echo '<tr>
              <td height="" width="">Otros</td>
                <td align="left">
                    ' . $embarazo_33 . '
                </td>
          </tr>';
}
?>

</table>
<hr width=750>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="2" align="center">VALORACION OBSTETRICA</td>
      </tr>
      <?php
if ($embarazo_34 != "") {
    echo '<tr>
              <td height="" width="200px">Numero De Fetos</td>
                <td align="left">
                    ' . $embarazo_34 . '
                </td>
          </tr>';
}if ($embarazo_35 != "") {
    echo '<tr>
              <td height="" width="">Situación Y Presentación Fetal</td>
                <td align="left">
                    ' . $embarazo_35 . '
                </td>
          </tr>';
}if ($embarazo_36 != "") {
    echo '<tr>
              <td height="" width="">Frecuencia Cardiaca Fetal </td>
                <td align="left">
                    ' . $embarazo_36 . '
                </td>
          </tr>';
}if ($embarazo_37 != "") {
    echo '<tr>
              <td height="" width="">Movimientos Fetales</td>
                <td align="left">
                    ' . $embarazo_37 . '
                </td>
          </tr>';
}
?>

</table>
<hr width=750>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="100px" height="" colspan="4" align="center">PARACLINICOS</td>
        <td width="100px" height="" colspan="4" align="center">Fecha</td>
        <td width="100px" height="" colspan="4" align="center">Resultado</td>
      </tr>
    <tr>
      <?php
if ($embarazo_38 != "") {
    echo '<td height="" width="40%">Urocultivo Y Antibiograma  </td>
                <td align="left" width="50%">
                    ' . $embarazo_38 . '
                </td>';
}if ($embarazo_39 != "") {
    echo '<td align="left">
                    ' . $embarazo_39 . '
                </td>';
}
?>
    </tr>
    <tr>
      <?php
if ($embarazo_40 != "") {
    echo '<td height="" width="">Hemograma</td>
                <td align="left">
                    ' . $embarazo_40 . '
                </td>';
}if ($embarazo_41 != "") {
    echo '<td align="left">
                    ' . $embarazo_41 . '
                </td>';
}
?>
    </tr>
    <tr>
      <?php
if ($embarazo_42 != "") {
    echo '<td height="" width="">Hemoclasificacion</td>
                <td align="left">
                    ' . $embarazo_42 . '
                </td>';
}if ($embarazo_43 != "") {
    echo '<td align="left">
                    ' . $embarazo_43 . '
                </td>';
}
?>
    </tr>
    <tr>
      <?php
if ($embarazo_44 != "") {
    echo '<td height="" width="">Glicemia</td>
                <td align="left">
                    ' . $embarazo_44 . '
                </td>';
}if ($embarazo_45 != "") {
    echo '<td align="left">
                    ' . $embarazo_45 . '
                </td>';
}
?>
    </tr>
    <tr>
      <?php
if ($embarazo_46 != "") {
    echo '<td height="" width="">Prueba Rápida VIH  </td>
                <td align="left">
                    ' . $embarazo_46 . '
                </td>';
}if ($embarazo_47 != "") {
    echo '<td align="left">
                    ' . $embarazo_47 . '
                </td>';
}
?>
    </tr>
    <tr>
      <?php
if ($embarazo_48 != "") {
    echo '<td height="" width="">Prieba Treponemica Rápida Para Sifilis </td>
                <td align="left">
                    ' . $embarazo_48 . '
                </td>';
}if ($embarazo_49 != "") {
    echo '<td align="left">
                    ' . $embarazo_49 . '
                </td>';
}
?>
    </tr>
    <tr>
      <?php
if ($embarazo_50 != "") {
    echo '<td height="" width="">Antígena De Superficie Para Hepatitis B-Hbsag  </td>
                <td align="left">
                    ' . $embarazo_50 . '
                </td>';
}if ($embarazo_51 != "") {
    echo '<td align="left">
                    ' . $embarazo_51 . '
                </td>';
}
?>
    </tr>
    <tr>
      <?php
if ($embarazo_52 != "") {
    echo '<td height="" width="">Pruebas De IgG para toxoplasma </td>
                <td align="left">
                    ' . $embarazo_52 . '
                </td>';
}if ($embarazo_53 != "") {
    echo '<td align="left">
                    ' . $embarazo_53 . '
                </td>';
}
?>
    </tr>
    <tr>
      <?php
if ($embarazo_54 != "") {
    echo '<td height="" width="">Ecografía</td>
                <td align="left">
                    ' . $embarazo_54 . '
                </td>';
}if ($embarazo_55 != "") {
    echo '<td align="left">
                    ' . $embarazo_55 . '
                </td>';
}
?>
    </tr>
    <tr>
      <?php
if ($embarazo_56 != "") {
    echo '<td height="" width="">IgM Para Toxoplasma</td>
                <td align="left">
                    ' . $embarazo_56 . '
                </td>';
}if ($embarazo_57 != "") {
    echo '<td align="left">
                    ' . $embarazo_57 . '
                </td>';
}
?>
    </tr>
    <tr>
      <?php
if ($embarazo_58 != "") {
    echo '<td height="" width="">IgG para rubeola </td>
                <td align="left">
                    ' . $embarazo_58 . '
                </td>';
}if ($embarazo_59 != "") {
    echo '<td align="left">
                    ' . $embarazo_59 . '
                </td>';
}
?>
    </tr>
    <tr>
      <?php
if ($embarazo_60 != "") {
    echo '<td height="" width="">Tamizaje para cuello uterino</td>
                <td align="left">
                    ' . $embarazo_60 . '
                </td>';
}if ($embarazo_61 != "") {
    echo '<td align="left">
                    ' . $embarazo_61 . '
                </td>';
}
?>
    </tr>
</table>
<hr width=750>
<br>
<br>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="2" align="center">OBSERVACION</td>
      </tr>
      <?php
if ($embarazo_62 != "") {
    echo '<tr>
                      <td align="left">
                    ' . $embarazo_62 . '
                     </td>
                </tr>';
}
?>
 </table>
 <hr width=750>
 <br>
  <table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="2" align="center">RIESGO MATERNO</td>
      </tr>
      <?php
if ($embarazo_63 != "") {
    echo '<tr>
            <td height="" width="168">Seleccione el riesgo</td>
                      <td align="left">
                    ' . $embarazo_63 . '
                     </td>
                </tr>';
}
?>
 </table>
 <hr width=750>
 <br>
  <table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="2" align="center">PLAN DE CUIDADO</td>
      </tr>
      <?php
if ($embarazo_64 != "") {
    echo '<tr>
                      <td align="left">
                    ' . $embarazo_64 . '
                     </td>
                </tr>';
}
?>
 </table>
  <hr width=750>
<br>
<!-- *******************************************************IMPRIMIR DIAGNOSTICO *************************************++ -->
    <div id="content_notas">
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="2" align="left">Tipo de Consulta:</td>

                   <?php
$sql4f         = "Select fin_consulta from valoracion_inicial where id_vinicial=" . $_REQUEST['id_vinicial'] . " and historia=" . $_REQUEST['historia'];
$result4f      = $conexion->EjecutarQuery($sql4f);
$row4f         = mysql_fetch_array($result4f);
$tipo_consulta = $row4f['fin_consulta'];
echo '
     <td width="85%">
                    ' . $tipo_consulta . '
                </td>

             ';
?>
</tr>
</table>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="2" align="left">Tipo de Dianostico:</td>

                   <?php
$sql4f             = "Select tipo_diagnostico from valoracion_inicial where id_vinicial=" . $_REQUEST['id_vinicial'] . " and historia=" . $_REQUEST['historia'];
$result4f          = $conexion->EjecutarQuery($sql4f);
$row4f             = mysql_fetch_array($result4f);
$tipo_diagnostico1 = $row4f['tipo_diagnostico'];
echo '
     <td width="85%"> ' . $tipo_diagnostico1 . '
                </td>

             ';
?>
</tr>
</table>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="2" align="left">Causa Extrema:</td>

                   <?php
$sql4f          = "Select causa_externa from valoracion_inicial where id_vinicial=" . $_REQUEST['id_vinicial'] . " and historia=" . $_REQUEST['historia'];
$result4f       = $conexion->EjecutarQuery($sql4f);
$row4f          = mysql_fetch_array($result4f);
$causa_externa1 = $row4f['causa_externa'];
echo '
     <td width="85%">
       ' . $causa_externa1 . '
                </td>

             ';
?>
</tr>
</table>
           <br>
           <br>


        <table width="750" border="0" style="border:1px solid #000000; font-size:90%;" align="left" width="80%" cellspacing="0" class="" style="font-size: <?php echo $tamfont ?>px !important">

            <?php
$sql = "Select c.estado,c.id_usuario,vi.*,us.nombre,us.apellido
                        from valoracion_inicial  as vi inner join usuario as us
                        on vi.id_usuario = us.id_usuario
                        inner join cita as c on vi.id_cita = c.id_cita
                        where id_vinicial=" . $_REQUEST['id_vinicial'] . " and  vi.historia='" . @$_REQUEST['historia'] . "'";

$resultados      = $conexion->EjecutarQuery($sql);
$total_registros = mysql_num_rows($resultados);
$sql_search      = $sql . " ORDER BY vi.fecha DESC ";
$resultados      = $conexion->EjecutarQuery($sql_search);
//   $total_paginas = ceil($total_registros / $registros);

echo "<tbody><tr class='t_head'>
                        <th valign='left' width='50px'>Cita</th>

                        <th valign='center' width='100px'>Profesional</th>
                        <th valign='center' width='70px'>Fecha</th>
                        <th valign='center'>Diagnostico</th>
                        <th valign='center'>Observacion</th>
                      </tr></tbody>";
$contador = 0;
if ($total_registros) {
    $bool_style = true;
    while ($row_f = mysql_fetch_array($resultados)) {

        if ($bool_style) {
            $style_file_table = "row1";
        } else {
            $style_file_table = "row2";
        }
        $bool_style = !$bool_style;

        $diagnostico = '';
        if ($row_f['diagnostico_principal'] != '') {
            $sql      = "select * from enfermedadescie10 where codigo='" . $row_f['diagnostico_principal'] . "'";
            $result_d = $conexion->EjecutarQuery($sql);
            $row_d    = mysql_fetch_array($result_d);
            $diagnostico .= $row_d['codigo'] . "-" . $row_d['enfermedad'];
        }
        if ($row_f['diagnostico_dx1'] != '') {
            $sql      = "select * from enfermedadescie10 where codigo='" . $row_f['diagnostico_dx1'] . "'";
            $result_d = $conexion->EjecutarQuery($sql);
            $row_d    = mysql_fetch_array($result_d);
            $diagnostico .= "<br>" . $row_d['codigo'] . "-" . $row_d['enfermedad'];
        }
        if ($row_f['diagnostico_dx2'] != '') {
            $sql      = "select * from enfermedadescie10 where codigo='" . $row_f['diagnostico_dx2'] . "'";
            $result_d = $conexion->EjecutarQuery($sql);
            $row_d    = mysql_fetch_array($result_d);
            $diagnostico .= "<br>" . $row_d['codigo'] . "-" . $row_d['enfermedad'];
        }
        if ($row_f['diagnostico_dx3'] != '') {
            $sql      = "select * from enfermedadescie10 where codigo='" . $row_f['diagnostico_dx3'] . "'";
            $result_d = $conexion->EjecutarQuery($sql);
            $row_d    = mysql_fetch_array($result_d);
            $diagnostico .= "<br>" . $row_d['codigo'] . "-" . $row_d['enfermedad'];
        }

        echo "<tr class='$style_file_table'>";

        $sesion = $row_f['id_cita'];
        if ($row_f['estado'] == 'FINALIZADO' && ($row_f['id_usuario'] == $_SESSION['id_usuario'])) {
            $sesion = "<a href='index.php?option=init_cita&acc_c=" . $row_f['id_cita'] . "'>" . $row_f['id_cita'] . "</a>";
        }

        echo "<td align='left'>" . $sesion . "</td>";

        echo "<td align='center'>" . $row_f['nombre'] . " " . $row_f['apellido'] . "</td>";
        echo "<td align='center'>" . $row_f['fecha'] . "</td>";
        echo "<td align='left'>" . $diagnostico . "</td>";
        echo "<td align='left'>" . $row_f['valoracion_inicial'] . "</td>";

        echo "</tr>";
    }
} else {
    echo "<font color='darkgray'>(sin resultados)</font>";
}

?>
  </table>
 </div>
</div>
</fieldset>

<a href='#' onclick='imprSelec34("imprimir_formularios_oculto", true, "v")' class="no_print" >Imprimir Embarazo</a>

 <style type="text/css">

        @media print
        {
            #imprimir_formularios_oculto{
                font-size: 10px !important;
            }
            /*
            .Estilo2 {font-size: 12px}
            .Estilo4 {
                font-size: 24px;
                color: #CC3300;
            }
            .Estilo5 {font-size: 18px}
            */
        }
    </style>

<script type="text/javascript">



 //document.getElementById('embarazo_31').value=<?php echo @$embarazo_31 ?>

   //util

  /*function activar() {
    var campo = document.getElementById("embarazo_60");
    console.log(campo.value);
    if(campo.value == ""){
      console.log("elimina");
      $('#embarazo_61').removeAttr("required");
    }
    else{
//var x = document.getElementById("embarazo_61").required;
              console.log("crea");

        $('#embarazo_61').required;
    }
    }*/


</script>
    <script type="text/javascript">

        function imprSelec34(nombre)
        {
            var ficha = document.getElementById(nombre);
            var ventimp = window.open(' ', 'ventana1', 'popimpr');

            var content = '<link  type="text/css" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/css.css" rel="stylesheet" />';
            content += '<title>http://190.146.87.72/fvnpv </title>';
            content += ficha.innerHTML;

            ventimp.document.write(content);
            ventimp.document.close();
            ventimp.print( );
           // history.back();
        }
</script>
<script>
  function validar1(){

     var embarazo_11x = document.getElementById('embarazo_11x').value;  // T A
     var embarazo_12x = document.getElementById('embarazo_12x').value; // F R
     var embarazo_13x = document.getElementById('embarazo_13x').value;  //FC
     var embarazo_14x = document.getElementById('embarazo_14x').value; //T
     var embarazo_15 = document.getElementById('embarazo_15').value; // PESO
     var embarazo_16 = document.getElementById('embarazo_16').value; // TALLA





if(embarazo_11x=="" ){
    alert("Campo T A Obligatorio");
    return false;
  }else if(embarazo_12x==""){
    alert("Campo F R Obligatorio");
    return false;
 }else if(embarazo_13x==""){
    alert("Campo F C Obligatorio");
    return false;
 }else if(embarazo_14x==""){
    alert("Campo T° Obligatorio");
    return false;
 }else if(embarazo_15==""){
    alert("Campo Peso Obligatorio");
    return false;
 }else if(embarazo_16==""){
    alert("Campo Talla Obligatorio");
    return false;
 }
}

</script>