<?php
$usuario_c = $_SESSION['id_usuario'];
$proc      = $_REQUEST['id_proceso'];
$h_pac     = $_REQUEST['historia'];
$inic      = $_REQUEST['id_vinicial'];

?>


<style type="text/css">
  div.contenedor {
    position: relative;
    width: 100px;
  }


  .inp {
    font-family: Arial;
    color: #008585;
    font-size: 8pt;
    border: 1px solid #008585;
    padding-left: 3px;
    text-align:left;

  }

  div.fill2 {
    font-family: Arial;
    font-size: 8pt;
    display: none;
    width: 128px;
    position:absolute;
    color: #E0EBEB;
    background-color: #E0EBEB;
    border: 1px solid #008585;
    overflow: auto;
    height: 150px;
    top: -1px;
  }

  tr.fill2 {
    font-family: Arial;
    font-size: 8pt;
    color: #E0EBEB;
    background-color: #008585;
    border: 1px solid #008585;
  }

  tr {
    font-family: Arial;
    font-size: 8pt;
    background-color: #E0EBEB;
    color: #008585;
    border: 1px solid #E0EBEB;
  }
</style>


<style type="text/css">
  body {
  font-family: Helvetica;
  font-size: 11px;
  color: #000;
  background-color: #FFFFFF;
  }

  h3 {
    margin: 0px;
    padding: 0px;
  }

  .suggestionsBox2 {
    position: relative;
    left: 30px;
    margin: 10px 0px 0px 0px;
    width: 900px;
                height: 400px;
                font-size: 12px;
    background-color: #212427;
    -moz-border-radius: 7px;
    -webkit-border-radius: 7px;
    border: 2px solid #000;
    color: #fff;
                overflow: scroll;


  }

  .suggestionList2{
    margin: 0px;
    padding: 0px;
  }

  .suggestionList2 li {

    margin: 0px 0px 3px 0px;
    padding: 3px;
    cursor: pointer;
  }

  .suggestionList2 li:hover {
    background-color: #659CD8;
  }
.Estilo11 {
  font-size: 8pt;
  font-weight: bold;
}
.Estilo13 {color: #ABABAB}
.Estilo14 {font-size: 10pt}
</style>
    <script>

    function ajaxobj() {
    try {
        _ajaxobj = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            _ajaxobj = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            _ajaxobj = false;
        }
    }

    if (!_ajaxobj && typeof XMLHttpRequest != 'undefined') {
        _ajaxobj = new XMLHttpRequest();
    }

    return _ajaxobj;
    }

    function guardar_diagnostico() {

    var nom_ay_diagno = $("#nom_ay_diagno").val();
    var id_usuario =<?php echo $usuario_c; ?>;
    var id_proceso =<?php echo $proc; ?>;
    var historia =<?php echo $h_pac; ?>;
    var id_vinicial =<?php echo $inic; ?>;
    var parameters = "opcion=35&id_usuario="+id_usuario+"&id_proceso="+id_proceso+"&historia="+historia+"&id_vinicial="+id_vinicial+"&nom_ay_diagno="+nom_ay_diagno;

    //alert(parameters);

    $.ajax({
        data: parameters,
        dataType: "json",
        type: "POST",
        url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php",
        success: function(data) {
            if (data.bool) {
                 var mm=data.resultado;
            }
        }, error: function(request, error) {

        }
    });
    // location.reload(true);
    window.location.reload(true);
       // limpiartodo();
    }

    function borrar_diagnostico(valor_w) {

       var parameters = "opcion=85&valor1="+valor_w

    //alert(parameters);
    $.ajax({
        data: parameters,
        dataType: "json",
        type: "POST",
        url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php",
        success: function(data) {
            if (data.bool) {
                 var mm=data.bool;
            }
        }, error: function(request, error) {

        }
    });
     window.location.reload(true);
        //limpiartodo();
    }

    function limpiartodo() {
     location.reload(true);
    }


    function lookup2(inputString) {

    //
    if(inputString.length == 0) {
    // Hide the suggestion box.
    $('#suggestions2').hide();
    } else {

          var parameters = "opcion=33&queryString="+inputString;

            //alert(parameters);

                     $.ajax({
                        data: parameters,
                        dataType: "",
                        type: "POST",
                        url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php",
                        success: function(data) {

                             if(data.length >0) {
                                    $('#suggestions2').show();
                                    $('#autoSuggestionsList2').html(data);
                            }

                        }, error: function(request, error) {

                        }
                    });
    }
    } // lookup



    function fill2(object) {
    //array_object = (object.id).split('&');

            var jj=object.id;

    $('#nom_ay_diagno').val(jj);
    setTimeout("$('#suggestions2').hide();", 200);

        }
    </script>
   <script type="text/javascript">
    $(function(){

    var tab=<?php echo $_REQUEST['origen_tab']; ?>;

    if(tab==12){
            $("#tabs").tabs({selected: parseInt(3)});
     }

    });
    </script>
    <script type="text/javascript">

        function imprSelec5(nombre)
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
<style type="text/css">
  .tama??o{
  width: 60%;
  height: 20px; }
</style>

<?php

if (isset($_REQUEST['id_cita'])) {
    $button = '<input type="button" value="Guardar" onclick="submit()"/>';
} else {
    $readonly = " readonly='readonly' ";
}
$fecha_dia     = date("Y-m-d");
$url_actual_10 = $_SERVER["REQUEST_URI"];
?>

<br>
<form id="fr_heridas" action="<?php echo Utils::$http_ruta ?>mvc/vista/terapeuta/formularios/guardar_formularios.php?opcion=169" method="post">
   <input type="hidden" class="input_txt valid" id="origen_url" name="origen_url" value="<?php echo $url_actual_10; ?>"/>
   <input type="hidden" class="input_txt valid" id="id_usuario" name="id_usuario" value="<?php echo $usuario_c; ?>"/>
   <input type="hidden" class="input_txt valid" id="id_proceso" name="id_proceso" value="<?php echo $proc; ?>"/>
   <input type="hidden" class="input_txt valid" id="historia" name="historia" value="<?php echo $h_pac; ?>"/>
   <input type="hidden" class="input_txt valid" id="id_vinicial" name="id_vinicial" value="<?php echo $inic; ?>"/>


<div id="formula_diagnostico">

    <table width="840" border="0" class="data" align="center" cellpadding="0" cellspacing="0">

  <tr height="">
    <td colspan="5" height=""><div align="center"> FORMATO AYUDA DIAGNOSTICA</div></td>
  </tr>
  <tr height="">
    <td height="" width="175" >Cups</td>

  </tr>
  <tr height="">



    <td width="175">

     <input name="nom_ay_diagno" type="text" id="nom_ay_diagno" class="tama??o" onBlur="fill2();" onKeyUp="lookup2(this.value);" value="" size="25" onDblClick="limpiar();"/>
        <div class="suggestionsBox2" id="div" style="display: none;" style="width:100px; height:115px; overflow: scroll;"> <img src="<?php echo Utils::$http_ruta ?>mvc/vista/imagenes/upArrow.png" style="position: relative; top: -12px; left: 30px;" alt="upArrow" />
            <div class="suggestionList2" id="div2" style="width:100px; height:115px; overflow: scroll;"> &nbsp; </div></div></td>


</table>
    <div class="suggestionsBox2" id="suggestions2" style="display: none;">
        <div align="right"><img src="<?php echo Utils::$http_ruta ?>mvc/vista/imagenes/upArrow.png" style="position: relative; top: -12px; left: 30px;" alt="upArrow" />      </div>
          <div class="suggestionList2" id="autoSuggestionsList2"></div>
    </div>
<center><?php echo @$button ?></center>


</div>

</form>


<div id="tabla_diagnostico1">

<br>

<table border="0" class="data" width="500" align="center" cellpadding="0" cellspacing="0" style="font-size: <?php echo $tamfont ?>px !important">

  <tr height="">
    <td colspan="6" height=""><div align="center">FORMATO AYUDA DIAGNOSTICA <?php echo $fecha_dia; ?></div></td>
  </tr>
  <tr height="">
      <td height="" width="" align="center">Cups</td>

    <td width=""></td>
  </tr>

  <?php

$sql_s = "select * from h_ay_diagnostica  where id_proceso=" . $_REQUEST['id_proceso'] . " and id_vinicial=" . $_REQUEST['id_vinicial'] . " and id_historia=" . @$_REQUEST['historia'] . " ";

$result_x12s1 = $conexion->EjecutarQuery($sql_s);
while ($row_x12s1 = mysql_fetch_array($result_x12s1)) {

    echo '<tr height="">
                                    <td>' . $row_x12s1['nom_ay_diagno'] . '</td>
                               ';
    if (isset($_REQUEST['id_cita'])) {
        echo "<td align='center'><a href='#' onclick='borrar_diagnostico(" . $row_x12s1['id_ay_diagnostica'] . ")'><img src='" . Utils::$http_ruta . "mvc/vista/imagenes/delete.png' width='18px' height='18px' /></a></td>";

        echo ' </tr>';
    } else {
        $readonly = " readonly='readonly' ";
    }
}
$sql     = "Select * from usuario where id_usuario='{$row_evo['id_usuario']}'";
$resultf = $conexion->EjecutarQuery($sql);
$rowf    = mysql_fetch_array($resultf);
$medico  = $rowf['nombre'] . " " . $rowf['apellido'];

if ($rowf['firma'] != '') {
    $firma = $rowf['firma'];
}

//       echo '<tr><td colspan="6" align="center"><img id="file_firma" src="'.Utils::$http_ruta.'/mvc/files/users/firmas/'.$firma.'" width="100" height="50">
//     </td></tr>';
?>


</table>

</div>


<div id="formula_diagno_oculta" style="display: none">

   <div id="tabla_diagnostica">
     <?php

$tamfont = 10;
include $GLOBALS['raiz'] . 'mvc/vista/terapeuta/formularios/datos_p.php';

?>
<br>

<table border="0" class="data" width="500" align="center" cellpadding="0" cellspacing="0" style="font-size: <?php echo $tamfont ?>px !important">

  <tr height="">
    <td colspan="5" height=""><div align="center">FORMATO AYUDA DIAGNOSTICA <?php echo $fecha_dia; ?></div></td>
  </tr>
  <tr height="">
      <td height="" width="" align="center">NOTA AYUDA DIAGNOSTICA</td>


  </tr>

  <?php

$sql_s1 = "select * from h_ay_diagnostica  where id_proceso=" . $_REQUEST['id_proceso'] . " and id_vinicial=" . $_REQUEST['id_vinicial'] . " and id_historia=" . @$_REQUEST['historia'] . " ";

$result_x12s = $conexion->EjecutarQuery($sql_s1);
while ($row_x12s = mysql_fetch_array($result_x12s)) {

    echo '<tr height="">
                                    <td>' . $row_x12s['nom_ay_diagno'] . '</td>
                               ';

    echo ' </tr>';
}

$sql0     = "Select * from usuario where id_usuario='{$row_evo['id_usuario']}'";
$resultf0 = $conexion->EjecutarQuery($sql0);
$rowf0    = mysql_fetch_array($resultf0);
$medico   = $rowf0['nombre'] . " " . $rowf0['apellido'];

if ($rowf0['firma'] != '') {
    $firma = $rowf0['firma'];
}

echo '<tr><td colspan="6" align="center"><img id="file_firma" src="' . Utils::$http_ruta . '/mvc/files/users/firmas/' . $firma . '" width="100" height="50">
                </td></tr>';
?>


</table>
<br>
<br>
 <table width="750" border="0" style="border:1px solid #000000; font-size:90%;"align="left" width="80%" cellspacing="0" class="" style="font-size: <?php echo $tamfont ?>px !important">

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
<a href='#' onclick='imprSelec5("tabla_diagnostica", true, "v")' class="no_print" >Imprimir Ayuda Diagnostica</a>