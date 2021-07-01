<?php
if (isset($_REQUEST['guardar_fr_barthel']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_fr_barthel'] == 'new') {

$sql = "INSERT INTO fr_barthel (
`id_fr_barthel`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`comer`,
`bano`,
`vestirse`,
`aseo`,
`sanitario`,
`deposicion`,
`miccion`,
`deambulacion`,
`escalones`,
`traslados`,
`resultado_barthel`,
`norton_total_1`,
`norton_fis_1`,
`norton_mental`,
`norton_actividad`,
`norton_mov`,
`norton_incon`,
`gijon_1`,
`gijon_2`,
`gijon_3`,
`gijon_total`,
`ramson_total`,
`venti_1`,
`venti_2`,
`venti_3`,
`intervencion_esp_1`,
`intervencion_esp_2`,
`intervencion_esp_3`,
`intervencion_esp_4`,
`intervencion_esp_5`,
`intervencion_esp_6`,
`reisberg_total`,
`karno`,
`intervencion_esp_7`,
`karno_val`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['comer']."' ,
'".$_REQUEST['bano']."' ,
'".$_REQUEST['vestirse']."' ,
'".$_REQUEST['aseo']."' ,
'".$_REQUEST['sanitario']."' ,
'".$_REQUEST['deposicion']."' ,
'".$_REQUEST['miccion']."' ,
'".$_REQUEST['deambulacion']."' ,
'".$_REQUEST['escalones']."' ,
'".$_REQUEST['traslados']."' ,
'".$_REQUEST['resultado_barthel']."' ,
'".$_REQUEST['norton_total_1']."' ,
'".$_REQUEST['norton_fis_1']."' ,
'".$_REQUEST['norton_mental']."' ,
'".$_REQUEST['norton_actividad']."' ,
'".$_REQUEST['norton_mov']."' ,
'".$_REQUEST['norton_incon']."' ,
'".$_REQUEST['gijon_1']."' ,
'".$_REQUEST['gijon_2']."' ,
'".$_REQUEST['gijon_3']."' ,
'".$_REQUEST['gijon_total']."' ,
'".$_REQUEST['ramson_total']."' ,
'".$_REQUEST['venti_1']."' ,
'".$_REQUEST['venti_2']."' ,
'".$_REQUEST['venti_3']."' ,
'".$_REQUEST['intervencion_esp_1']."' ,
'".$_REQUEST['intervencion_esp_2']."' ,
'".$_REQUEST['intervencion_esp_3']."' ,
'".$_REQUEST['intervencion_esp_4']."' ,
'".$_REQUEST['intervencion_esp_5']."' ,
'".$_REQUEST['intervencion_esp_6']."' ,
'".$_REQUEST['reisberg_total']."' ,
'".$_REQUEST['karno']."' ,
'".$_REQUEST['intervencion_esp_7']."' ,
'".$_REQUEST['karno_val']."'
) ";


} else if ($_REQUEST['id_fr_barthel'] != '') {

$sql = "UPDATE fr_barthel set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`comer` = '".$_REQUEST['comer']."' ,
`bano` = '".$_REQUEST['bano']."' ,
`vestirse` = '".$_REQUEST['vestirse']."' ,
`aseo` = '".$_REQUEST['aseo']."' ,
`sanitario` = '".$_REQUEST['sanitario']."' ,
`deposicion` = '".$_REQUEST['deposicion']."' ,
`miccion` = '".$_REQUEST['miccion']."' ,
`deambulacion` = '".$_REQUEST['deambulacion']."' ,
`escalones` = '".$_REQUEST['escalones']."' ,
`traslados` = '".$_REQUEST['traslados']."' ,
`resultado_barthel` = '".$_REQUEST['resultado_barthel']."' ,
`norton_total_1` = '".$_REQUEST['norton_total_1']."' ,
`norton_fis_1` = '".$_REQUEST['norton_fis_1']."' ,
`norton_mental` = '".$_REQUEST['norton_mental']."' ,
`norton_actividad` = '".$_REQUEST['norton_actividad']."' ,
`norton_mov` = '".$_REQUEST['norton_mov']."' ,
`norton_incon` = '".$_REQUEST['norton_incon']."' ,
`gijon_1` = '".$_REQUEST['gijon_1']."' ,
`gijon_2` = '".$_REQUEST['gijon_2']."' ,
`gijon_3` = '".$_REQUEST['gijon_3']."' ,
`gijon_total` = '".$_REQUEST['gijon_total']."' ,
`ramson_total` = '".$_REQUEST['ramson_total']."' ,
`venti_1` = '".$_REQUEST['venti_1']."' ,
`venti_2` = '".$_REQUEST['venti_2']."' ,
`venti_3` = '".$_REQUEST['venti_3']."' ,
`intervencion_esp_1` = '".$_REQUEST['intervencion_esp_1']."' ,
`intervencion_esp_2` = '".$_REQUEST['intervencion_esp_2']."' ,
`intervencion_esp_3` = '".$_REQUEST['intervencion_esp_3']."' ,
`intervencion_esp_4` = '".$_REQUEST['intervencion_esp_4']."' ,
`intervencion_esp_5` = '".$_REQUEST['intervencion_esp_5']."' ,
`intervencion_esp_6` = '".$_REQUEST['intervencion_esp_6']."' ,
`reisberg_total` = '".$_REQUEST['reisberg_total']."' ,
`karno` = '".$_REQUEST['karno']."' ,
`intervencion_esp_7` = '".$_REQUEST['intervencion_esp_7']."' ,
`karno_val` = '".$_REQUEST['karno_val']."' WHERE `id_fr_barthel` = '".$_REQUEST['id_fr_barthel']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_fr_barthel = 'new';
$sql = "SELECT * from fr_barthel WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_fr_barthel = $row['id_fr_barthel'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$comer = $row['comer'];
$bano = $row['bano'];
$vestirse = $row['vestirse'];
$aseo = $row['aseo'];
$sanitario = $row['sanitario'];
$deposicion = $row['deposicion'];
$miccion = $row['miccion'];
$deambulacion = $row['deambulacion'];
$escalones = $row['escalones'];
$traslados = $row['traslados'];
$resultado_barthel = $row['resultado_barthel'];
$norton_total_1 = $row['norton_total_1'];
$norton_fis_1 = $row['norton_fis_1'];
$norton_mental = $row['norton_mental'];
$norton_actividad = $row['norton_actividad'];
$norton_mov = $row['norton_mov'];
$norton_incon = $row['norton_incon'];
$gijon_1 = $row['gijon_1'];
$gijon_2 = $row['gijon_2'];
$gijon_3 = $row['gijon_3'];
$gijon_total = $row['gijon_total'];
$ramson_total = $row['ramson_total'];
$venti_1 = $row['venti_1'];
$venti_2 = $row['venti_2'];
$venti_3 = $row['venti_3'];
$intervencion_esp_1 = $row['intervencion_esp_1'];
$intervencion_esp_2 = $row['intervencion_esp_2'];
$intervencion_esp_3 = $row['intervencion_esp_3'];
$intervencion_esp_4 = $row['intervencion_esp_4'];
$intervencion_esp_5 = $row['intervencion_esp_5'];
$intervencion_esp_6 = $row['intervencion_esp_6'];
$reisberg_total = $row['reisberg_total'];
$karno = $row['karno'];
$intervencion_esp_7 = $row['intervencion_esp_7'];
$karno_val = $row['karno_val'];
break; }

?>
<script>

    $(function() {

        $("#close-fr_barthel").click(function() {
            $("#open-fr_barthel").show();
            $(this).hide();
            $("#content-fr_barthel").hide('slow');
        });

        $("#open-fr_barthel").click(function() {
            $("#close-fr_barthel").show();
            $(this).hide();
            $("#content-fr_barthel").show('slow');
        });


    }); //cierre de cuncion

</script>

<script >

//entrar valor

    function cargar_color() {

        //alert("entro color");


        var valor_b = document.getElementById('resultado_barthel').value;

        if (valor_b < 20) {
            var obj = document.getElementById('tr_1');
            obj.style.backgroundColor = "#33CCFF";
            var obj2 = document.getElementById('tr_2');
            obj2.style.backgroundColor = "#FFFFFF";
            var obj3 = document.getElementById('tr_3');
            obj3.style.backgroundColor = "#FFFFFF";
            var obj4 = document.getElementById('tr_4');
            obj4.style.backgroundColor = "#FFFFFF";
            var obj5 = document.getElementById('tr_5');
            obj5.style.backgroundColor = "#FFFFFF";

            document.getElementById('bar_oculto').value = 2;


        } else if ((valor_b >= 20) && (valor_b <= 35)) {
            var obj = document.getElementById('tr_2');
            obj.style.backgroundColor = "#33CCFF";

            var obj1 = document.getElementById('tr_1');
            obj1.style.backgroundColor = "#FFFFFF";
            var obj3 = document.getElementById('tr_3');
            obj3.style.backgroundColor = "#FFFFFF";
            var obj4 = document.getElementById('tr_4');
            obj4.style.backgroundColor = "#FFFFFF";
            var obj5 = document.getElementById('tr_5');
            obj5.style.backgroundColor = "#FFFFFF";
            document.getElementById('bar_oculto').value = 2;

        } else if ((valor_b > 35) && (valor_b <= 55)) {
            var obj = document.getElementById('tr_3');
            obj.style.backgroundColor = "#33CCFF";

            var obj1 = document.getElementById('tr_1');
            obj1.style.backgroundColor = "#FFFFFF";
            var obj2 = document.getElementById('tr_2');
            obj2.style.backgroundColor = "#FFFFFF";
            var obj4 = document.getElementById('tr_4');
            obj4.style.backgroundColor = "#FFFFFF";
            var obj5 = document.getElementById('tr_5');
            obj5.style.backgroundColor = "#FFFFFF";

            document.getElementById('bar_oculto').value = 1;

        } else if ((valor_b > 55) && (valor_b <= 99)) {
            var obj = document.getElementById('tr_4');
            obj.style.backgroundColor = "#33CCFF";


            var obj1 = document.getElementById('tr_1');
            obj1.style.backgroundColor = "#FFFFFF";
            var obj3 = document.getElementById('tr_3');
            obj3.style.backgroundColor = "#FFFFFF";
            var obj2 = document.getElementById('tr_2');
            obj2.style.backgroundColor = "#FFFFFF";
            var obj5 = document.getElementById('tr_5');
            obj5.style.backgroundColor = "#FFFFFF";

            document.getElementById('bar_oculto').value = 0;

        } else if ((valor_b = 100)) {
            var obj = document.getElementById('tr_5');
            obj.style.backgroundColor = "#33CCFF";

            var obj1 = document.getElementById('tr_1');
            obj1.style.backgroundColor = "#FFFFFF";
            var obj3 = document.getElementById('tr_3');
            obj3.style.backgroundColor = "#FFFFFF";
            var obj2 = document.getElementById('tr_2');
            obj2.style.backgroundColor = "#FFFFFF";
            var obj4 = document.getElementById('tr_4');
            obj4.style.backgroundColor = "#FFFFFF";
            document.getElementById('bar_oculto').value = 0;
        }

        //document.getElementById('total_bar').value=0;
        pasar_valores();
    }

    function cargar_valor() {

//lert("entro valor");

        document.getElementById('comer').value = '<?php echo $comer ?>';
        document.getElementById('bano').value ='<?php echo $bano; ?>';
        document.getElementById('vestirse').value ='<?php echo $vestirse; ?>';
        document.getElementById('aseo').value ='<?php echo $aseo; ?>';
        document.getElementById('sanitario').value ='<?php echo $sanitario; ?>';
        document.getElementById('deposicion').value = '<?php echo $deposicion; ?>';
        document.getElementById('miccion').value ='<?php echo $miccion; ?>';
        document.getElementById('deambulacion').value ='<?php echo $deambulacion; ?>';
        document.getElementById('escalones').value ='<?php echo $escalones; ?>';
        document.getElementById('traslados').value ='<?php echo $traslados; ?>';
        document.getElementById('resultado_barthel').value ='<?php echo $resultado_barthel; ?>';

        document.getElementById('norton_fis_1').value ='<?php echo $norton_fis_1; ?>';
        document.getElementById('norton_mental').value ='<?php echo $norton_mental; ?>';
        document.getElementById('norton_actividad').value ='<?php echo $norton_actividad; ?>';
        document.getElementById('norton_mov').value ='<?php echo $norton_mov; ?>';
        document.getElementById('norton_incon').value ='<?php echo $norton_incon; ?>';

        document.getElementById('gijon_1').value ='<?php echo $gijon_1; ?>';
        document.getElementById('gijon_2').value ='<?php echo $gijon_2; ?>';
        document.getElementById('gijon_3').value ='<?php echo $gijon_3; ?>';

        document.getElementById('ramson_total').value ='<?php echo $ramson_total; ?>';


        document.getElementById('venti_1').value ='<?php echo $venti_1; ?>';
        document.getElementById('venti_2').value ='<?php echo $venti_2; ?>';
        document.getElementById('venti_3').value ='<?php echo $venti_3; ?>';


        document.getElementById('intervencion_esp_1').value ='<?php echo $intervencion_esp_1; ?>';
        document.getElementById('intervencion_esp_2').value ='<?php echo $intervencion_esp_2; ?>';
        document.getElementById('intervencion_esp_3').value ='<?php echo $intervencion_esp_3; ?>';
        document.getElementById('intervencion_esp_4').value ='<?php echo $intervencion_esp_4; ?>';
        document.getElementById('intervencion_esp_5').value ='<?php echo $intervencion_esp_5; ?>';
        document.getElementById('intervencion_esp_6').value ='<?php echo $intervencion_esp_6; ?>';

        document.getElementById('reisberg_total').value ='<?php echo $reisberg_total; ?>';
        
        document.getElementById('karno').value ='<?php echo $karno; ?>';
        document.getElementById('karno_val').value ='<?php echo $karno_val; ?>';
        document.getElementById('intervencion_esp_7').value ='<?php echo $intervencion_esp_7; ?>';

        cargar_color();
        cargar_color_2();
    }

    function sumar_barthel() {

        var d1 = document.getElementById('comer').value;
        var d2 = document.getElementById('bano').value;
        var d3 = document.getElementById('vestirse').value;
        var d4 = document.getElementById('aseo').value;
        var d5 = document.getElementById('sanitario').value;
        var d6 = document.getElementById('deposicion').value;
        var d7 = document.getElementById('miccion').value;
        var d8 = document.getElementById('deambulacion').value;
        var d9 = document.getElementById('escalones').value;
        var d10 = document.getElementById('traslados').value;

        var resultado = parseInt(d1) + parseInt(d2) + parseInt(d3) + parseInt(d4) + parseInt(d5) + parseInt(d6) + parseInt(d7) + parseInt(d8) + parseInt(d9) + parseInt(d10);

        document.getElementById('resultado_barthel').value = parseInt(resultado);

        cargar_color();


    }// sumar bartehl


    function cargar_color_2() {


        sumar_varios();

        var valor_b2 = document.getElementById('norton_total_1').value;
        //document.getElementById('resultado_barthel').value;


        if (valor_b2 >= 14) {
            var obj = document.getElementById('tr_norton_1');
            obj.style.backgroundColor = "#FFCC00";
            var obj2 = document.getElementById('tr_norton_2');
            obj2.style.backgroundColor = "#FFFFFF";


        } else if (valor_b2 < 14) {

            var obj = document.getElementById('tr_norton_2');
            obj.style.backgroundColor = "#FFCC00";
            var obj1 = document.getElementById('tr_norton_1');
            obj1.style.backgroundColor = "#FFFFFF";

        }


        /*cambiar color gijon*/

        var valor_b3 = document.getElementById('gijon_total').value;
        //document.getElementById('resultado_barthel').value;

        if (valor_b3 <= 7) {
            var obj9 = document.getElementById('tr_gijon_1');
            obj9.style.backgroundColor = "#CCFF99";
            var obj29 = document.getElementById('tr_gijon_2');
            obj29.style.backgroundColor = "#FFFFFF";
            var obj39 = document.getElementById('tr_gijon_3');
            obj39.style.backgroundColor = "#FFFFFF";

            //poner valor
            document.getElementById('bar_oculto2').value = 0;

        } else if (valor_b3 >= 10) {
            var obj9 = document.getElementById('tr_gijon_3');
            obj9.style.backgroundColor = "#CCFF99";
            var obj19 = document.getElementById('tr_gijon_1');
            obj19.style.backgroundColor = "#FFFFFF";
            var obj39 = document.getElementById('tr_gijon_2');
            obj39.style.backgroundColor = "#FFFFFF";

            document.getElementById('bar_oculto2').value = 2;

            // }else if((valor_b3 == 8)){
        } else if ((valor_b3 >= 8) && (valor_b3 <= 9)) {

            var obj9 = document.getElementById('tr_gijon_2');
            obj9.style.backgroundColor = "#CCFF99";
            var obj19 = document.getElementById('tr_gijon_1');
            obj19.style.backgroundColor = "#FFFFFF";
            var obj39 = document.getElementById('tr_gijon_3');
            obj39.style.backgroundColor = "#FFFFFF";

            document.getElementById('bar_oculto2').value = 1;

        }

        // karnofski

          var valor_b3_1 = document.getElementById('karno_val').value;
        //document.getElementById('resultado_barthel').value;

        if ((valor_b3_1 >= 80) && (valor_b3_1 <= 100)) {
            var obj91 = document.getElementById('kar_1');
            obj91.style.backgroundColor = "#CCFF99";
            var obj291 = document.getElementById('kar_2');
            obj291.style.backgroundColor = "#FFFFFF";
            var obj391 = document.getElementById('kar_3');
            obj391.style.backgroundColor = "#FFFFFF";

            //poner valor
           document.getElementById('karno_3').value = 0;

        } else if ((valor_b3_1 >= 0) && (valor_b3_1 <= 40)) {
            var obj91 = document.getElementById('kar_3');
            obj91.style.backgroundColor = "#CCFF99";
            var obj191 = document.getElementById('kar_1');
            obj191.style.backgroundColor = "#FFFFFF";
            var obj391 = document.getElementById('kar_2');
            obj391.style.backgroundColor = "#FFFFFF";

            document.getElementById('karno_3').value = 2;

            // }else if((valor_b3 == 8)){
        } else if ((valor_b3_1 >= 50) && (valor_b3_1 <= 70)) {

            var obj91 = document.getElementById('kar_2');
            obj91.style.backgroundColor = "#CCFF99";
            var obj191 = document.getElementById('kar_1');
            obj191.style.backgroundColor = "#FFFFFF";
            var obj391 = document.getElementById('kar_3');
            obj391.style.backgroundColor = "#FFFFFF";

            document.getElementById('karno_3').value = 1;

        }


        pasar_valores();
    }

    function sumar_varios() {

        // sumar nothon
        var c1 = document.getElementById('norton_fis_1').value;
        var c2 = document.getElementById('norton_mental').value;
        var c3 = document.getElementById('norton_actividad').value;
        var c4 = document.getElementById('norton_mov').value;
        var c5 = document.getElementById('norton_incon').value;

        // total norton
        var resultado2 = parseInt(c1) + parseInt(c2) + parseInt(c3) + parseInt(c4) + parseInt(c5);
        document.getElementById('norton_total_1').value = parseInt(resultado2);


        // suma de gijon

        var c6 = document.getElementById('gijon_1').value;
        var c7 = document.getElementById('gijon_2').value;
        var c8 = document.getElementById('gijon_3').value;

        var resultado3 = parseInt(c6) + parseInt(c7) + parseInt(c8);
        document.getElementById('gijon_total').value = parseInt(resultado3);

//cargar_color_2();
//sumar_escalas();
    }


    function pasar_valores() {


        document.getElementById('total_bar').value = document.getElementById('bar_oculto').value;
        document.getElementById('total_bar2').value = document.getElementById('ramson_total').value;



        document.getElementById('total_bar3').value = document.getElementById('venti_1').value;
        document.getElementById('total_bar4').value = document.getElementById('venti_2').value;
        document.getElementById('total_bar5').value = document.getElementById('venti_3').value;
        document.getElementById('total_bar6').value = document.getElementById('intervencion_esp_1').value;
        document.getElementById('total_bar7').value = document.getElementById('intervencion_esp_2').value;
        document.getElementById('total_bar8').value = document.getElementById('intervencion_esp_3').value;
        document.getElementById('total_bar9').value = document.getElementById('intervencion_esp_4').value;
        document.getElementById('total_bar10').value = document.getElementById('intervencion_esp_5').value;
        document.getElementById('total_bar11').value = document.getElementById('intervencion_esp_6').value;
        document.getElementById('total_bar12').value = document.getElementById('bar_oculto2').value;
        document.getElementById('total_bar13').value = document.getElementById('reisberg_total').value
         document.getElementById('total_bar15').value = document.getElementById('intervencion_esp_7').value;
          document.getElementById('total_bar14').value = document.getElementById('karno_3').value;

        sumar_varios();
        sumar_escalas();
    }





    function sumar_escalas() {


//alert("DD");
        var e1 = document.getElementById('total_bar').value;
        var e2 = document.getElementById('total_bar2').value;
        var e3 = document.getElementById('total_bar3').value;
        var e4 = document.getElementById('total_bar4').value;
        var e5 = document.getElementById('total_bar5').value;
        var e6 = document.getElementById('total_bar6').value;
        var e7 = document.getElementById('total_bar7').value;
        var e8 = document.getElementById('total_bar8').value;
        var e9 = document.getElementById('total_bar9').value;
        var e10 = document.getElementById('total_bar10').value;
        var e11 = document.getElementById('total_bar11').value;
        var e12 = document.getElementById('total_bar12').value;
        var e13 = document.getElementById('total_bar13').value;
        var e14 = document.getElementById('total_bar14').value;
        var e15 = document.getElementById('total_bar15').value;

        var resultado6 = parseInt(e1) + parseInt(e2) + parseInt(e3) + parseInt(e4) + parseInt(e5) + parseInt(e6) + parseInt(e7) + parseInt(e8) + parseInt(e9) + parseInt(e10) + parseInt(e11) + parseInt(e12) + parseInt(e13)+ parseInt(e14) + parseInt(e15);

//alert("aa"+resultado6);
        document.getElementById('total_escalas').value = parseInt(resultado6);

        color_resultado();

    }// sumar escalas


    function color_resultado() {


        var valor_b = document.getElementById('total_escalas').value;
        //document.getElementById('resultado_barthel').value;


        if ((valor_b >= 14) && (valor_b <= 17)) {
            var obj = document.getElementById('res_1');
            obj.style.backgroundColor = "#00CC00";
            var obj2 = document.getElementById('res_2');
            obj2.style.backgroundColor = "#FFFFFF";
            var obj3 = document.getElementById('res_3');
            obj3.style.backgroundColor = "#FFFFFF";
            var obj4 = document.getElementById('res_4');
            obj4.style.backgroundColor = "#FFFFFF";



        } else if ((valor_b >= 10) && (valor_b <= 13)) {
            var obj = document.getElementById('res_2');
            obj.style.backgroundColor = "#00CC00";

            var obj1 = document.getElementById('res_1');
            obj1.style.backgroundColor = "#FFFFFF";
            var obj3 = document.getElementById('res_3');
            obj3.style.backgroundColor = "#FFFFFF";
            var obj4 = document.getElementById('res_4');
            obj4.style.backgroundColor = "#FFFFFF";


        } else if ((valor_b >= 6) && (valor_b <= 9)) {
            var obj = document.getElementById('res_3');
            obj.style.backgroundColor = "#00CC00";

            var obj1 = document.getElementById('res_1');
            obj1.style.backgroundColor = "#FFFFFF";
            var obj2 = document.getElementById('res_2');
            obj2.style.backgroundColor = "#FFFFFF";
            var obj4 = document.getElementById('res_4');
            obj4.style.backgroundColor = "#FFFFFF";

        } else if ((valor_b >= 0) && (valor_b <= 5)) {
            var obj = document.getElementById('res_4');
            obj.style.backgroundColor = "#00CC00";


            var obj1 = document.getElementById('res_1');
            obj1.style.backgroundColor = "#FFFFFF";
            var obj3 = document.getElementById('res_2');
            obj3.style.backgroundColor = "#FFFFFF";
            var obj2 = document.getElementById('res_3');
            obj2.style.backgroundColor = "#FFFFFF";

        }
    }


</script>
<fieldset id="fr_barthel">
    <legend align="left"> <div class="arrow-c" id="close-fr_barthel"></div> <div class="arrow-o" id="open-fr_barthel" ></div> <font>Valoracion barthel</font></legend>
    <div id="content-fr_barthel">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_fr_barthel" id="guardar_fr_barthel" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>

        <body onLoad="cargar_valor();" id="body_x">


            <form id="form_fr_barthel"  name="form_fr_barthel" action="<?php echo @$action_form_fr_barthel ?>#fr_barthel" method="post">

                <input type="hidden" id="id_fr_barthel" name="id_fr_barthel" value="<?php echo @$id_fr_barthel ?>" />

                <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                    <tr class="row1">

                    </tr>
                    <tr class="row1">

                    </tr>
                </table>

                <input type="hidden" class="input_txt valid" id="id_fr_barthel" name="id_fr_barthel" value="<?php echo @$id_fr_barthel; ?>" />



                <H2>ESCALA DE BARTHEL</H2>

                <table border="0" class="data" cellpadding="0" cellspacing="0">
                    <col width="115" />
                    <col width="393" />
                    <col width="50" />
                    <col width="83" />
                    <tr height="19">
                        <td height="19" width="155">PARAMETRO</td>
                        <td width="571">SITUACION DEL PACIENTE</td>
                        <td width="61"><div align="center">Valor</div></td>
                        <td width="84"><div align="center">Puntaje</div></td>
                    </tr>
                    <tr height="19">
                        <td rowspan="3" height="57" width="155">COMER</td>
                        <td width="571">Totalmente    independiente</td>
                        <td width="61"><div align="center">10</div></td>
                        <td rowspan="3" width="84"><label>
                                <div align="center">
                                    <select name="comer" size="1" id="comer" onChange="sumar_barthel();">
                                        <option value="10" selected="selected" >10</option>
                                        <option value="5">5</option>
                                        <option value="0">0</option>
                                    </select>
                                </div>
                            </label></td>
                    </tr>
                    <tr height="19">
                        <td height="24" width="571">Necesita ayuda para cortar carne, el pan, etc.</td>
                        <td width="61"><div align="center">5</div></td>
                    </tr>
                    <tr height="19">
                        <td height="24" width="571">Dependiente</td>
                        <td width="61"><div align="center">0</div></td>
                    </tr>
                    <tr height="19">
                        <td rowspan="2" height="38" width="155">BAÑO</td>
                        <td width="571">Independiente:    entra y sale solo del baño</td>
                        <td width="61"><div align="center">5</div></td>
                        <td rowspan="2" width="84"><div align="center">
                                <select name="bano" size="1" id="bano" onChange="sumar_barthel()">
                                    <option value="5" selected="selected">5</option>
                                    <option value="0">0</option>
                                </select>
                            </div></td>
                    </tr>
                    <tr height="19">
                        <td height="24" width="571">Dependiente</td>
                        <td width="61"><div align="center">0</div></td>
                    </tr>
                    <tr height="37">
                        <td rowspan="3" height="75" width="155">VESTIRSE</td>
                        <td width="571">Independiente:    capaz de ponerse y de quitarse la ropa, abotonarse, atarse los zapatos</td>
                        <td width="61"><div align="center">10</div></td>
                        <td rowspan="3" width="84"><div align="center">
                                <select name="vestirse" size="1" id="vestirse" onChange="sumar_barthel()">
                                    <option value="10" selected="selected">10</option>
                                    <option value="5">5</option>
                                    <option value="0">0</option>
                                </select>
                            </div></td>
                    </tr>
                    <tr height="19">
                        <td height="24" width="571">Necesita ayuda</td>
                        <td width="61"><div align="center">5</div></td>
                    </tr>
                    <tr height="19">
                        <td height="24" width="571">Dependiente</td>
                        <td width="61"><div align="center">0</div></td>
                    </tr>
                    <tr height="37">
                        <td rowspan="2" height="56" width="155">ASEO</td>
                        <td width="571">Independiente    para lavarse la cara, las manos, peinarse, afeitarse, maquillarse, etc.</td>
                        <td width="61"><div align="center">5</div></td>
                        <td rowspan="2" width="84"><div align="center">
                                <select name="aseo" size="1" id="aseo" onChange="sumar_barthel()">
                                    <option value="5" selected="selected">5</option>
                                    <option value="0">0</option>
                                </select>
                            </div></td>
                    </tr>
                    <tr height="19">
                        <td height="24" width="571">Dependiente</td>
                        <td width="61"><div align="center">0</div></td>
                    </tr>
                    <tr height="37">
                        <td rowspan="3" height="75" width="155">USO DEL SANITARIO</td>
                        <td width="571">Independiente.    Entra y sale del baño, puede usarlo solo, se sienta, se limpia, se pone la    ropa. Puede usar ayudas tecnicas.</td>
                        <td width="61"><div align="center">10</div></td>
                        <td rowspan="3" width="84"><div align="center">
                                <select name="sanitario" size="1" id="sanitario" onChange="sumar_barthel()">
                                    <option value="10" selected="selected">10</option>
                                    <option value="5">5</option>
                                    <option value="0">0</option>
                                </select>
                            </div></td>
                    </tr>
                    <tr height="19">
                        <td height="24" width="571">Necesita ayuda para ir al retrete, pero se limpia solo</td>
                        <td width="61"><div align="center">5</div></td>
                    </tr>
                    <tr height="19">
                        <td height="24" width="571">Dependiente</td>
                        <td width="61"><div align="center">0</div></td>
                    </tr>
                    <tr height="19">
                        <td rowspan="3" height="93" width="155">DEPOSICION (Ultima semana)</td>
                        <td width="571">Independiente y    continente. Usa solo el supositorio o el enema</td>
                        <td width="61"><div align="center">10</div></td>
                        <td rowspan="3" width="84"><div align="center">
                                <select name="deposicion" size="1" id="deposicion" onChange="sumar_barthel()">
                                    <option value="10" selected="selected">10</option>
                                    <option value="5">5</option>
                                    <option value="0">0</option>
                                </select>
                            </div></td>
                    </tr>
                    <tr height="55">
                        <td height="46" width="571">Ocasionalmente algun episodio de de dposicion no    controlada.  Algunos episodio de    incontnecncia o necesita ayuda para administrarse supositorios o enemas</td>
                        <td width="61"><div align="center">5</div></td>
                    </tr>
                    <tr height="19">
                        <td height="24" width="571">Dependiente. Incapaz de manejarse sin asistenia</td>
                        <td width="61"><div align="center">0</div></td>
                    </tr>
                    <tr height="19">
                        <td rowspan="3" height="75" width="155">MICCION (Ultima semana)</td>
                        <td width="571">Continencia    normal, o es capaz de cuidarse de la sonda si tiene una puesta</td>
                        <td width="61"><div align="center">10</div></td>
                        <td rowspan="3" width="84"><div align="center">
                                <select name="miccion" size="1" id="miccion" onChange="sumar_barthel()">
                                    <option value="10" selected="selected">10</option>
                                    <option value="5">5</option>
                                    <option value="0">0</option>
                                </select>
                            </div></td>
                    </tr>
                    <tr height="37">
                        <td height="46" width="571">Un episodio diario como maximo de incontinencia, o necesita    ayuda para cuidar de la sonda</td>
                        <td width="61"><div align="center">5</div></td>
                    </tr>
                    <tr height="19">
                        <td height="24" width="571">Dependiente. Incapaz de manejarse sin asistenia</td>
                        <td width="61"><div align="center">0</div></td>
                    </tr>
                    <tr height="19">
                        <td rowspan="4" height="76" width="155">DEAMBULACION</td>
                        <td width="571">Independiente,    camina solo 50 metros</td>
                        <td width="61"><div align="center">15</div></td>
                        <td rowspan="4" width="84"><div align="center">
                                <select name="deambulacion" size="1" id="deambulacion" onChange="sumar_barthel()">
                                    <option value="15" selected="selected">15</option>
                                    <option value="10">10</option>
                                    <option value="5">5</option>
                                    <option value="0">0</option>
                                </select>
                            </div></td>
                    </tr>
                    <tr height="19">
                        <td height="24" width="571">Necesita ayuda  o    supervision fisica o verbal</td>
                        <td width="61"><div align="center">10</div></td>
                    </tr>
                    <tr height="19">
                        <td height="24" width="571">Independiente en silla de ruedas sin ayuda</td>
                        <td width="61"><div align="center">5</div></td>
                    </tr>
                    <tr height="19">
                        <td height="24" width="571">Dependiente</td>
                        <td width="61"><div align="center">0</div></td>
                    </tr>
                    <tr height="19">
                        <td rowspan="3" height="57" width="155">ESCALONES</td>
                        <td width="571">Independiente    para bajar y subir escaleras</td>
                        <td width="61"><div align="center">10</div></td>
                        <td rowspan="3" width="84"><div align="center">
                                <select name="escalones" size="1" id="escalones"  onchange="sumar_barthel()">
                                    <option value="10" selected="selected">10</option>
                                    <option value="5">5</option>
                                    <option value="0">0</option>
                                </select>
                            </div></td>
                    </tr>
                    <tr height="19">
                        <td height="24" width="571">Necesita ayuda fisica o supervision para hacerlo</td>
                        <td width="61"><div align="center">5</div></td>
                    </tr>
                    <tr height="19">
                        <td height="24" width="571">Dependiente</td>
                        <td width="61"><div align="center">0</div></td>
                    </tr>
                    <tr height="19">
                        <td rowspan="4" height="76" width="155">TRASLADOS</td>
                        <td width="571">Independiente</td>
                        <td width="61"><div align="center">15</div></td>
                        <td rowspan="4" width="84"><div align="center">
                                <select name="traslados" size="1" id="traslados"  onchange="sumar_barthel()">
                                    <option value="15" selected="selected" >15</option>
                                    <option value="10">10</option>
                                    <option value="5">5</option>
                                    <option value="0">0</option>
                                </select>
                            </div></td>
                    </tr>
                    <tr height="19">
                        <td height="24" width="571">Manima ayuda fisica o supervision para hacerlo</td>
                        <td width="61"><div align="center">10</div></td>
                    </tr>
                    <tr height="19">
                        <td height="24" width="571">Necesita gran ayuda, requiere de una persona con fuerza o entrenada</td>
                        <td width="61"><div align="center">5</div></td>
                    </tr>
                    <tr height="19">
                        <td height="24" width="571">Dependiente</td>
                        <td width="61"><div align="center">0</div></td>
                    </tr>
                    <tr height="19">
                        <td colspan="3" height="19"><div align="right">TOTAL</div></td>
                        <td width="84"><div align="center">
                                <input name="resultado_barthel" type="text"  id="resultado_barthel" value="100" size="9" />
                            </div></td>
                    </tr>
                </table>
                <br>
                <br>
                <p><strong>PUNTUACION </strong></p>
                <table border="0" cellspacing="0" cellpadding="0" class="data">
                    <tr>
                        <td width="158" valign="top">
                            <strong>RESULTADO</strong></td>
                        <td width="233" valign="top"> <strong>GRADO DE DEPENDENCIA</strong></td>
                        <td width="101" valign="top">PUNTAJE</td>
                    </tr>
                    <tr id="tr_1">
                        <td width="158" valign="top">&lt;20</td>
                        <td width="233" valign="top">total</td>
                        <td width="101" rowspan="2" valign="top"><div align="center">2</div></td>
                    </tr>
                    <tr id="tr_2">
                        <td width="158" valign="top">20 – 35</td>
                        <td width="233" valign="top">Grave</td>
                    </tr>
                    <tr id="tr_3">
                        <td width="158" valign="top">40 – 55</td>
                        <td width="233" valign="top">Moderado</td>
                        <td width="101" valign="top"><div align="center">1</div></td>
                    </tr>
                    <tr id="tr_4">
                        <td width="158" valign="top">&gt;  60</td>
                        <td width="233" valign="top">Leve</td>
                        <td width="101" valign="top"><div align="center">0</div></td>
                    </tr>
                    <tr id="tr_5">
                        <td width="158" valign="top" >100</td>
                        <td width="233" valign="top" >Independiente</td>
                        <td width="101" valign="top"><div align="center">0</div></td>
                    </tr>
                </table>


                <input type="hidden" id="bar_oculto" value="0" />

                <p>&nbsp;</p>
                <table border="0" align="left" cellpadding="0" cellspacing="0"  class="data">
                  <col width="314" />
                  <col width="200" />
                  <col width="47" />
                  <col width="83" />
                  <tr height="19">
                    <td colspan="3" height="19"><center>
                      ESCALA DE ACTIVIDAD- KARNOFSKY
                    </center></td>
                  </tr>
                  <tr height="19">
                    <td height="19" width="461">SITUACION PACIENTE</td>
                    <td width="260">DEFINICION</td>
                    <td width="65">VALOR</td>
                  </tr>
                  <tr height="19">
                    <td height="19" width="461">Normal, sin quejas, sin evidencia de enfermedad</td>
                    <td rowspan="3" width="260">Capaz    de realizar una actividad y trabajo normal; no necesita cuidados especiales</td>
                    <td align="right" width="65"><div align="center">100</div></td>
                  </tr>
                  <tr height="38">
                    <td height="38" width="461">Capaz de realizar una actividad normal, signos o sintomas    menores de enfermedad</td>
                    <td align="right" width="65"><div align="center">90</div></td>
                  </tr>
                  <tr height="38">
                    <td height="38" width="461">Actividad normal con esfuerzo, algunos signos o sisntomas de    enfermedad</td>
                    <td align="right" width="65"><div align="center">80</div></td>
                  </tr>
                  <tr height="38">
                    <td height="38" width="461">Se ocupa por si mismo, incapaz de llevar una actividad normal o    realizar un trabajo activo</td>
                    <td rowspan="3" width="260">incapaz    de trabajar, capaz de vivir en el hogar y atender la mayoria de las    necesidades personales, requiere diversos grados de asistencia</td>
                    <td align="right" width="65"><div align="center">70</div></td>
                  </tr>
                  <tr height="38">
                    <td height="38" width="461">requiere asistencia ocacional, pero es capaz de atender la    mayoria de sus necesidades</td>
                    <td align="right" width="65"><div align="center">60</div></td>
                  </tr>
                  <tr height="38">
                    <td height="38" width="461">Requiere asistencia considerable y cuidados medicos</td>
                    <td align="right" width="65"><div align="center">50</div></td>
                  </tr>
                  <tr height="38">
                    <td height="38" width="461">Incapacitado, requiere cuidados y asistencia especial</td>
                    <td rowspan="5" width="260">Imposibilidad    de cuidarse a si mismo, requiere atencion institucional y hospitalaria    equivalente, la enfermedad puede progresar rapidamente</td>
                    <td align="right" width="65"><div align="center">40</div></td>
                  </tr>
                  <tr height="38">
                    <td height="38" width="461">Severamente incapacitado, la hospitalizacion esta indicada auque    la muerte no es inminente</td>
                    <td align="right" width="65"><div align="center">30</div></td>
                  </tr>
                  <tr height="38">
                    <td height="38" width="461">Es necesaria la hospitalizacion, muy enfermo, tratamiento activo    de soporte necesario</td>
                    <td align="right" width="65"><div align="center">20</div></td>
                  </tr>
                  <tr height="38">
                    <td height="38" width="461">Moribundo, proceso fatal progresando rapidamente</td>
                    <td align="right" width="65"><div align="center">10</div></td>
                  </tr>
                  <tr height="19">
                    <td height="19" width="461">Muerte</td>
                    <td align="right" width="65"><div align="center">0</div></td>
                  </tr>
                  <tr height="19">
                    <td height="56" colspan="3"><div align="center">Seleccione Puntaje KARNOFSKY
                      <select  id="karno_val" name="karno_val" onChange="cargar_color_2()">
                  <option value="100" selected="selected" >100</option>
                              <option value="90">90</option>
                              <option value="80">80</option>
                              <option value="70">70</option>
                              <option value="60">60</option>
                              <option value="50">50</option>
                              <option value="40">40</option>
                              <option value="30">30</option>
                              <option value="20">20</option>
                              <option value="10">10</option>
                              <option value="0">0</option>
                            </select>
                    </div></td>
                  </tr>
                </table>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            <table width="787" border="0" cellpadding="0" cellspacing="0" class="data">

                  <tr height="19" id="kar_1">
                    <td rowspan="3" height="57" width="125">ESCALA    KARNOFSKY</td>
                    <td align="right" width="83"><div align="center">0</div></td>
                    <td width="574">Vida normal.    Sintomas menores (80-100)</td>
                  </tr>
                  <tr height="19" id="kar_2">
                    <td height="19" align="right"><div align="center">1</div></td>
                    <td>incapacidad para el    trabajo. Requiere minima asistencia(70-50)</td>
                  </tr>
                  <tr height="19" id="kar_3">
                    <td height="19" align="right"><div align="center">2</div></td>
                    <td>incapacidad de    cuidarse a si mismo.(40-0)</td>
                  </tr>
                </table>
              <p>
                <input type="hidden" id="karno_3" value="0" />
                <input type="hidden" id="karno" value="0" />
              </p>
              <p><strong>ESCALA DE NORTHON</strong></p>
          <table width="719" cellpadding="0" cellspacing="0" class="data">
                    <col width="83" span="3">
                    <tr >
                        <td rowspan="2" width="326">RIESGO DE ULCERAS POR PRESION</td>
                        <td width="263">Menor de 12 =    Alto riesgo</td>
                        <td width="217">Total</td>
                    </tr>
                    <tr >
                        <td  width="263">Mayor de 14 = Bajo riesgo</td>
                        <td width="217"><input type="text" class="input_txt valid" id="norton_total_1" name="norton_total_1" value="0" /></td>
                    </tr>
                </table>
                <p>&nbsp;</p>
                <table width="743" cellpadding="0" cellspacing="0" class="data">
                    <col width="83" span="6">
                    <tr >
                        <td  width="162">COMPONENTE</td>
                        <td align="right" width="88"><div align="center">4</div></td>
                        <td align="right" width="148"><div align="center">3</div></td>
                        <td align="right" width="133"><div align="center">2</div></td>
                        <td align="right" width="113"><div align="center">1</div></td>
                        <td width="97">Selección </td>
                    </tr>
                    <tr >
                        <td  width="162">Condicion fisica</td>
                        <td width="88">Buena</td>
                        <td width="148">Favorable</td>
                        <td width="133">Pobre</td>
                        <td width="113">Muy    mala</td>
                        <td width="97"><select name="norton_fis_1" size="1" id="norton_fis_1" onChange="cargar_color_2()">
                                <option value="0" selected="selected">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select></td>
                    </tr>
                    <tr >
                        <td  width="162">condicion Mental</td>
                        <td width="88">Alerta</td>
                        <td width="148">Apatico</td>
                        <td width="133">Confuso</td>
                        <td width="113">Estupor</td>
                        <td width="97"><select name="norton_mental" size="1" id="norton_mental" onChange="cargar_color_2()">
                                <option value="0" selected="selected">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td  width="162">Nivel de actividad</td>
                        <td width="88">Normal</td>
                        <td width="148">Camina    con ayuda</td>
                        <td width="133">Silla</td>
                        <td width="113">Cama</td>
                        <td width="97"><select name="norton_actividad" size="1" id="norton_actividad" onChange="cargar_color_2()">
                                <option value="0" selected="selected">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td  width="162">Movilidad</td>
                        <td width="88">Completa</td>
                        <td width="148">Ligera    limitacion</td>
                        <td width="133">Muy    limitado</td>
                        <td width="113">Innmovil</td>
                        <td width="97"><select name="norton_mov" size="1" id="norton_mov" onChange="cargar_color_2()">
                                <option value="0" selected="selected">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td  width="162">Incontinencia</td>
                        <td width="88">No </td>
                        <td width="148">Ocacional</td>
                        <td width="133">Usual-orina</td>
                        <td width="113">Doble</td>
                        <td width="97"><select name="norton_incon" size="1" id="norton_incon" onChange="cargar_color_2()">
                                <option value="0" selected="selected">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select></td>
                    </tr>
                </table>
                <p>&nbsp;</p>
                <table cellspacing="0" cellpadding="0" class="data">
                    <col width="83" span="3">
                    <tr>
                        <td  colspan="2"><div align="center">ESCALA    NORTON</div></td>
                    </tr>
                    <tr  id="tr_norton_1">
                        <td width="90" height="22"><div align="center">0</div></td>
                        <td width="277"><div align="center">Mayor de 14 = Bajo riesgo</div></td>
                    </tr>
                    <tr  id="tr_norton_2">
                        <td  width="90"><div align="center">1</div></td>
                        <td width="277"><div align="center">Menor de 12 = Alto    riesgo</div></td>
                    </tr>
                </table>
                <p>&nbsp;</p>
                <p><strong>ESCALA DE VALORACION SOCIOFAMILIAR DE GIJON</strong></p>
                <table cellspacing="0" cellpadding="0" class="data">
                    <col width="388">
                    <col width="108">
                    <col width="83" span="2">
                    <tr >
                        <td width="548">SITUACION FAMILIAR</td>
                        <td width="109">PUNTAJE</td>
                        <td width="106">SELECCIÓN</td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="548">vive con la pareja y/o familia sin conflicto</td>
                        <td align="right" width="109">1</td>
                        <td width="106" rowspan="5"><select name="gijon_1" size="1" id="gijon_1" onChange="cargar_color_2()">
                                <option value="0" selected="selected">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="548">vive con pareja de edad similar</td>
                        <td align="right" width="109">2</td>
                    </tr>
                    <tr height="38">
                        <td height="38" width="548">vive con pareja y/o familia y/u otros pero no pueden o no    quieren atenderlo</td>
                        <td align="right" width="109">3</td>
                    </tr>
                    <tr height="38">
                        <td height="38" width="548">vive solo, hijos y/o familiares proximos que no cubren todas las    necesidades</td>
                        <td align="right" width="109">4</td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="548">vive    solo, familia lejana, desatendido, sin familia.</td>
                        <td align="right" width="109">5</td>
                    </tr>
                    <tr height="19">
                        <td colspan="2" height="19">RELACIONES    SOCIALES</td>
                        <td width="106">&nbsp;</td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="548">mantiene relaciones sociales fuera del domicilio</td>
                        <td align="right" width="109">1</td>
                        <td width="106" rowspan="5"><select name="gijon_2" size="1" id="gijon_2" onChange="cargar_color_2()">
                                <option value="0" selected="selected">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="548">solo se relaciona con familia, vecinos u otros, sale de la casa</td>
                        <td align="right" width="109">2</td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="548">solo se relaciona con familia, sale de la casa</td>
                        <td align="right" width="109">3</td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="548">no sale de su domicilio, recibe familia o visitas (&gt; 1    semana)</td>
                        <td align="right" width="109">4</td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="548">No sale de su domicilio, ni recibe visitas</td>
                        <td align="right" width="109">5</td>
                    </tr>
                    <tr height="19">
                        <td colspan="2" height="19">APOYOS    RED SOCIAL</td>
                        <td width="106">&nbsp;</td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="548">no no necesita ningun apoyo</td>
                        <td align="right" width="109">1</td>
                        <td width="106" rowspan="5"><select name="gijon_3" size="1" id="gijon_3" onChange="cargar_color_2()">
                                <option value="0" selected="selected">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="548">recibe apoyo de la familia y/o vecinos</td>
                        <td align="right" width="109">2</td>
                    </tr>
                    <tr height="38">
                        <td height="38" width="548">recibe apoyo social fomarl suciente(centro dia, trabajo social,    vive en residencia, etc)</td>
                        <td align="right" width="109">3</td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="548">tiene soporte social pero es insuficiente</td>
                        <td align="right" width="109">4</td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="548">no tiene ningun soporte social y lo necesita</td>
                        <td align="right" width="109">5</td>
                    </tr>
                    <tr height="19">
                        <td colspan="2" height="19">PUNTUACION</td>
                        <td width="106"><input name="gijon_total" type="text" id="gijon_total" value="0" size="10" /></td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="548">situacion sociofamiliar buena</td>
                        <td colspan="2">Menor    o igual a 7puntos</td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="548">situacion social intermedia</td>
                        <td colspan="2">8-9    puntos</td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="548">deterioro social severo(alto riesgo de institucionalizacion)</td>
                        <td colspan="2">Mayor    o igual  a 10 puntos</td>
                    </tr>
                </table>
                <p>&nbsp;</p>
                <table width="676" cellpadding="0" cellspacing="0" class="data">

                    <tr height="19">
                        <td height="22" colspan="6" align="right"><div align="center">ESCALA    ABREVIADA DE GIJON</div></td>
                    </tr>
                    <tr height="19" id="tr_gijon_1">
                        <td width="49" height="22"  align="right" ><div align="center">0</div></td>
                        <td width="625" colspan="5" >Situacion    sociafamiliar (buena Menor o igual a 7puntos)</td>
                    </tr>
                    <tr height="19" id="tr_gijon_2">
                        <td  align="right" ><div align="center">1</div></td>
                        <td colspan="5" >Situacion    social intermedia(8-9 puntos)</td>
                    </tr>
                    <tr height="19" id="tr_gijon_3">
                        <td  align="right" ><div align="center">2</div></td>
                        <td colspan="5" >deterioro    social severo(alto riesgo de institucionalizacion)(Mayor o igual  a 10 puntos)</td>
                    </tr>
                </table>
                <p>
                    <input type="hidden" id="bar_oculto2" value="0" />
                </p>
                <p>&nbsp;</p>
  <table width="527" cellpadding="0" cellspacing="0" class="data">
                    <col width="388">
                    <col width="108">
                    <col width="83">
                    <tr height="19">
                        <td height="19" width="349">ESCALA    RAMSON DE MOVILIDAD</td>
                        <td width="54">Valor</td>
                        <td width="122">Puntaje</td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="349">Buena movilidad(casi completa o total)</td>
                        <td align="right" width="54"><div align="center">0</div></td>
                        <td rowspan="3" width="122"><select name="ramson_total" size="1" id="ramson_total" onChange="pasar_valores()">
                                <option value="0" selected="selected">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select></td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="349">Moderada(capacidad limitada, aceptable)</td>
                        <td align="right" width="54"><div align="center">1</div></td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="349">Deficiente(requiere ayuda fisica)</td>
                        <td align="right" width="54"><div align="center">2</div></td>
                    </tr>
                </table>
                <p>&nbsp;</p>
                <table width="391" cellpadding="0" cellspacing="0" class="data">

                    <td height="19" width="218">APOYO    VENTILATORIO</td>
                    <td width="97">Valor</td>
                    <td width="74">Puntaje</td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="218">soporte ventilatorio</td>
                        <td width="97">No(0)    si (1)</td>
                        <td width="74"><select name="venti_1" size="1" id="venti_1" onChange="pasar_valores()">
                                <option value="0" selected="selected">0</option>
                                <option value="1">1</option>

                            </select></td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="218">cuidados traquostomia</td>
                        <td width="97">No(0)    si (1)</td>
                        <td width="74"><select name="venti_2" size="1" id="venti_2" onChange="sumar_barthel()">
                                <option value="0" selected="selected">0</option>
                                <option value="1">1</option>
                            </select></td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="218">aspiracion intratraqueal</td>
                        <td width="97">No(0)    si (1)</td>
                        <td width="74"><select name="venti_3" size="1" id="venti_3" onChange="pasar_valores()">
                                <option value="0" selected="selected">0</option>
                                <option value="1">1</option>
                            </select></td>
                    </tr>
                </table>
                <p>&nbsp;</p>
                <table cellspacing="0" cellpadding="0" class="data">

                    <tr height="19">
                        <td height="19" width="388">INTERVENCIONES    ESPECIFICAS</td>
                        <td width="108">Valor</td>
                        <td width="86">Puntaje</td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="388">aplicación de medicamentos IV o liquidos IV</td>
                        <td width="108">No(0)    si (1)</td>
                        <td width="86"><select name="intervencion_esp_1" size="1" id="intervencion_esp_1" onChange="pasar_valores()">
                                <option value="0" selected="selected">0</option>
                                <option value="1">1</option>
                            </select></td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="388">Manejo nutricion entera</td>
                        <td width="108">No(0)    si (1)</td>
                        <td width="86"><select name="intervencion_esp_2" size="1" id="intervencion_esp_2" onChange="pasar_valores()">
                                <option value="0" selected="selected">0</option>
                                <option value="1">1</option>
                            </select></td>
                    </tr>
                    <tr height="38">
                        <td height="38" width="388">abdomen abierto, fistula de alto gasto, heridas con alta    produccion de exudado</td>
                        <td width="108">No(0)    si (1)</td>
                        <td width="86"><select name="intervencion_esp_3" size="1" id="intervencion_esp_3" onChange="pasar_valores()">
                                <option value="0" selected="selected">0</option>
                                <option value="1">1</option>
                            </select></td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="388">POP inmediato de osteosintesis por fractura de cadera</td>
                        <td width="108">No(0)    si (1)</td>
                        <td width="86"><select name="intervencion_esp_4" size="1" id="intervencion_esp_4" onChange="pasar_valores()">
                                <option value="0" selected="selected">0</option>
                                <option value="1">1</option>
                            </select></td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="388">cuidados de ulcera por presion</td>
                        <td width="108">No(0)    si (1)</td>
                        <td width="86"><select name="intervencion_esp_5" size="1" id="intervencion_esp_5" onChange="pasar_valores()">
                                <option value="0" selected="selected">0</option>
                                <option value="1">1</option>
                            </select></td>
                    </tr>
                    <tr height="38">
                        <td height="38" width="388">medicion del riesfo de caida medida de traslado: incorporarse    desde una silla</td>
                        <td width="108">No(0)    si (1)</td>
                        <td width="86"><select name="intervencion_esp_6" size="1" id="intervencion_esp_6" onChange="pasar_valores()">
                                <option value="0" selected="selected">0</option>
                                <option value="1">1</option>
                            </select></td>
                    </tr>
                    <tr height="38">
                      <td height="38">Cateterismo vesical</td>
                      <td>No(0)    si (1)</td>
                      <td><select name="intervencion_esp_7" size="1" id="intervencion_esp_7" onChange="pasar_valores()">
                        <option value="0" selected="selected">0</option>
                        <option value="1">1</option>
                      </select></td>
                    </tr>
                </table>
              <p>&nbsp;</p>
                <table width="573" cellpadding="0" cellspacing="0" class="data">

                    <tr height="19">
                        <td height="19" width="446">ESCALA    DE DETERIORO DE REISBERG GDS</td>
                        <td width="48">Valor</td>
                        <td width="77">Puntaje</td>
                    </tr>
                    <tr >
                        <td  width="446">GDS 1,2,3,4,5(minimo,leve,muy leve, moderado, moderado grave)</td>
                        <td align="right" width="48"><div align="center">0</div></td>
                        <td rowspan="2" width="77"><select name="reisberg_total" size="1" id="reisberg_total" onChange=" pasar_valores()">
                                <option value="0" selected="selected">0</option>
                                <option value="1">1</option>
                            </select></td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="446">GDS 6 y 7(grave-muygrave)</td>
                        <td align="right" width="48"><div align="center">1</div></td>
                    </tr>
                </table>
                <p>&nbsp;</p>
                <p><strong>RESUMEN DE RESULTADOS</strong></p>
          <table width="818" cellpadding="0" cellspacing="0" class="data">

                    <tr height="46">
                        <td colspan="3" height="46">ESCALA    DE MEDICION REQUERIMIENTOD DE CUIDADOS BASICOS DE AUXILIAR DE ENFERMERIA</td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="178">ITEM</td>
                        <td width="470">INDICADOR    DE MEDICION</td>
                        <td width="168">CALIFICACION</td>
                    </tr>
                    <tr height="19">
                        <td rowspan="3" height="38" width="178">Actividades Basicas</td>
                        <td width="470">Escala    de Barthel</td>
                        <td width="168"><input type="text" class="input_txt valid" id="total_bar" name="total_bar" value="0" /></td>
                    </tr>
                    <tr height="19">
                      <td>Escala Karnofsky</td>
                      <td><input type="text" class="input_txt valid" id="total_bar14" name="total_bar14" value="<?php echo @$karno; ?>" /></td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="470">Sindrome de inmobilidad Ramson</td>
                        <td width="168"><input type="text" class="input_txt valid" id="total_bar2" name="total_bar2" value="<?php echo @$ramson_total; ?>" /></td>
                    </tr>
                    <tr height="19">
                        <td rowspan="3" height="57" width="178">Apoyo ventilatorio</td>
                        <td width="470">Soporte    ventilatorio</td>
                        <td width="168"><input type="text" class="input_txt valid" id="total_bar3" name="total_bar3" value="<?php echo @$venti_1; ?>" /></td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="470">cuidados traqueostomia</td>
                        <td width="168"><input type="text" class="input_txt valid" id="total_bar4" name="total_bar4" value="<?php echo @$venti_2; ?>" /></td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="470">aspiracion intratraqueal de secreciones</td>
                        <td width="168"><input type="text" class="input_txt valid" id="total_bar5" name="total_bar5" value="<?php echo @$venti_3; ?>" /></td>
                    </tr>
                    <tr height="19">
                        <td rowspan="8" height="171" width="178">intervenciones especificas</td>
                        <td width="470">aplicación    de medicamentos IV o liquidos IV</td>
                        <td width="168"><input type="text" class="input_txt valid" id="total_bar6" name="total_bar6" value="<?php echo @$intervencion_esp_1; ?>" /></td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="470">Manejo de nutricion enteral</td>
                        <td width="168"><input type="text" class="input_txt valid" id="total_bar7" name="total_bar7" value="<?php echo @$intervencion_esp_2; ?>" /></td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="470">abdomen abierto, fistula de alto gasto, heridas    con alta produccion de exudado</td>
                        <td width="168"><input type="text" class="input_txt valid" id="total_bar8" name="total_bar8" value="<?php echo @$intervencion_esp_3; ?>" /></td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="470">POP inmediato de osteosintesis por fractura de    cadera</td>
                        <td width="168"><input type="text" class="input_txt valid" id="total_bar9" name="total_bar9" value="<?php echo @$intervencion_esp_4; ?>" /></td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="470">cuidados de ulcera por presion</td>
                        <td width="168"><input type="text" class="input_txt valid" id="total_bar10" name="total_bar10" value="<?php echo @$intervencion_esp_5; ?>" /></td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="470">Medicion del riesgo de caida</td>
                        <td width="168"><input type="text" class="input_txt valid" id="total_bar11" name="total_bar11" value="<?php echo @$intervencion_esp_6; ?>" /></td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="470">Ered de apoyo sociofamiliar Gijon</td>
                        <td width="168"><input type="text" class="input_txt valid" id="total_bar12" name="total_bar12" value="0" /></td>
                    </tr>
                    <tr height="19">
                        <td height="19" width="470">sindrome demencial REISBERG GDS</td>
                        <td width="168"><input type="text" class="input_txt valid" id="total_bar13" name="total_bar13" value="<?php echo @$reisberg_total; ?>" /></td>
                    </tr>
                    <tr height="19">
                      <td height="29">&nbsp;</td>
                      <td height="29">Cateterismo vesical</td>
                      <td><input type="text" class="input_txt valid" id="total_bar15" name="total_bar15" value="<?php echo @$cate_v; ?>" /></td>
                    </tr>
                    <tr height="19">
                        <td colspan="2" height="33"><div align="right"><strong>TOTAL</strong></div></td>
                        <td width="168"><input type="text" class="input_txt valid" id="total_escalas" name="total_escalas" value="0" /></td>
                    </tr>
                </table>
          <br>
                <br>
                <table width="710" height="132" align="center" cellpadding="0" cellspacing="0" class="data">
                    <col width="83">
                    <col width="388">
                    <col width="108">
                    <tr >
                        <td height="42" colspan="2"><div align="center">Interpretacion de resultados</div></td>
                    </tr>
                    <tr id="res_1">
                        <td width="197" height="22"><div align="center">14-17 puntos</div></td>
                        <td width="511"><div align="center">24 horas CBEA</div></td>
                    </tr>
                    <tr  id="res_2">
                        <td height="22" width="197"><div align="center">10-13 puntos</div></td>
                        <td width="511"><div align="center">12    horas CBEA</div></td>
                    </tr>
                    <tr  id="res_3">
                        <td height="22" width="197"><div align="center">6-9 puntos</div></td>
                        <td width="511"><div align="center">6    Horas CBEA</div></td>
                    </tr>
                    <tr  id="res_4">
                        <td  width="197"><div align="center">0-5 puntos</div></td>
                        <td width="511"><div align="center">Cuidados    a cargo de un miembro de familia y/o cuidados</div></td>
                    </tr>
                </table>
                <p>&nbsp;</p>

                <p><?php echo @$button ?></p>

            </form>
        </body>
        <br>
        <a href='#' onClick='imprSelec("content-fr_barthel")' >Imprimir</a>
    </div>
</fieldset>