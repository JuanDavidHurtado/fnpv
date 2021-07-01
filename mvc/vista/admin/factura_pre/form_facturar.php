<?php
// buscar cups pendientes y crear una tabla donde diga cups a relacionar
// los que venian de agendar

$origen=$_REQUEST['origen'];
$origen33=$_REQUEST['origen33'];

$comision="0";
$valor_consulta="0";
//$dsto=0;
//$copago=0;
$comision=0;



if($origen==0){

   $id_factura= $_REQUEST['id_factura'];
   $cade_cup=" and origen=1";

$tabla_cups = '<table width="700" border="1" cellpadding="0" cellspacing="0"  bgcolor="#FF6600" >

    <td colspan="2" height="19">RELACIONAR ITEMS EN LA FACTURA</td>
  </tr>
  <tr height="19">
    <td width="121" height="19">CODIGO CUP</td>
    <td width="204">DESCRIPCION</td>
  </tr>';


      $sql_fac = "Select * from cups_cita where id_cita = " . $_REQUEST['id_cita'];
      $result_fac = $conexion->EjecutarQuery($sql_fac);
        while ($row_fac = mysql_fetch_array($result_fac)) {

            // el id_cup del request es el codigo por eso hago una nueva busqueda para traer el id rela del cup
            $sql2 = "Select * from cups where cups = '" . $row_fac['id_cup'] . "' ";
            $result2 = $conexion->EjecutarQuery($sql2);
            $row2 = mysql_fetch_array($result2);
            $id_c = $row2['id_cups'];

            $tabla_cups .='<tr height="19">

                                    <td>' . $row2['cups'] . '</td>
                                     <td>' . $row2['nombre'] . '</td>

                                </tr>';
        }

$tabla_cups .="</table>";

}else if($origen==1){

    /*$where = "SELECT * FROM factura where id_usuario='".$_REQUEST['identificacion']."' and origen_factura='1'";
    $resultados = $conexion->EjecutarQuery($where);
    $row = mysql_fetch_array($resultados);*/

     $max_factura = "Select max(id_factura) as id_factura from factura where id_usuario='{$_REQUEST['identificacion']}' and origen_factura=1 and estado=0 ";
                $result_max = $conexion->EjecutarQuery($max_factura);
                $row = mysql_fetch_array($result_max);
               // $row['id_factura'];


    $id_factura=$row['id_factura'];
    ?>
      <script type="text/javascript">
         reload_cups_3();
      </script>
<?php
}

//comparar las fechas
         $fecha_dia=("y-m-d");

                  $sqle = "select * from factura where id_factura={$id_factura}";
                    $resulte = $conexion->EjecutarQuery($sqle);
                   $rowe = mysql_fetch_array($resulte);
                   $fecha_otra=$rowe['fecha'];

                   if($fecha_dia!=$fecha_otra){
                       $mensaje= "La factura seleccionada no corresponde a la fecha actual, sí no desea facturarla regrese al menu principal.";
                   }else{
                       $mensaje="";
                   }


?>


<script type="text/javascript">


function mensaje(){

var fe='<?php echo $mensaje; ?>';
   
   if(fe!=""){
        alert(fe);
   }else{
       var ps=1;
   }
}

mensaje();



    $(document).ready(function() {

    });

    function guardar2() {
        var parameters = 'paso=1&' + $('#form1').serialize();
        $.ajax({
            data: parameters,
            type: "POST",
            url: "http://localhost/inventario/rfactura2.php",
            success: function(data) {
                llamar();
                //   limpiartodo();
            }, error: function(request, error) {

            }
        });

    }

    function llamar() {
        abrirVentana('factura2pdf.php?codigo=' + $('#idfactura').val());
        limpiartodo();
    }

    function agregarFila(obj) {
        $("#cant_campos").val(parseInt($("#cant_campos").val()) + 1);
        var oId = $("#cant_campos").val();

        var codigo = $("#id_cup_1").val();
        var  id_eps= $("#id_eps").val();
         var  id_contrato= $("#id_contrato").val();
        var nombre = $("#descripcion").val();
        var cantidad = $("#cantidad").val();
        var valoru = $("#valoru").val();
        var f_date = $("#fecha_codigo").val();
        var total = $("#total1").val();
        var auto = $("#autorizacion").val();
        var auto_2 = $("#autorizacion_2").val();
        // variable para la ganancia..............
        var gan = $("#utilidad").val();
        var cita_x = $("#id_cita_x").val();

        // coloacar los datos en la tabla

        var ori = $("#origen").val();

        if(ori=1){
            id_contrato=1
        }

       var paso_f=0

        if(cita_x==0){

          //  alert("aaaa")

        var id_medico = $("#id_medico").val();
             //alert("aaaa"+id_medico)
                if (id_medico==0){
                    paso_f=0;
                }else{
                    paso_f=1;
                }
        }else{
             paso_f=1;
        }


       if(total!=0&&id_eps!=0&&codigo!=""&&id_contrato!=0&&auto!=""&&paso_f!=0){

        var ids = $("#ids").val();
        $("#ids").val(oId + ',' + ids);


        var strHtml5 = "<td>" + f_date + '<input type="hidden" id="hdniva_' + oId + '" name="hdniva_' + oId + '" value="' + f_date + '"/></td>';
        var strHtml1 = "<td>" + codigo + '<input type="hidden" id="hdncodigo_' + oId + '" name="hdncodigo_' + oId + '" value="' + codigo + '"/></td>';
        var strHtml2 = "<td>" + nombre + '<input type="hidden" id="hdnnombre_' + oId + '" name="hdnnombre_' + oId + '" value="' + nombre + '"/></td>';
        var strHtml3 = "<td>" + cantidad + '<input type="hidden" id="hdncantidad_' + oId + '" name="hdncantidad_' + oId + '" value="' + cantidad + '"/></td>';
        var strHtml4 = "<td>" + valoru + '<input type="hidden" id="hdnvaloru_' + oId + '" name="hdnvaloru_' + oId + '" value="' + valoru + '"/></td>';
        
        var strHtml6 = "<td>" + total + '<input type="hidden" id="hdntotal_' + oId + '" name="hdntotal_' + oId + '" value="' + total + '"/><input type="hidden" id="auto_' + oId + '" name="auto_' + oId + '" value="' + auto + '"/><input type="hidden" id="auto2_' + oId + '" name="auto2_' + oId + '" value="' + auto_2 + '"/></td>';
        //imagen ....
        var strHtml7 = '<td><img  src="<?php echo $GLOBALS['raiz'] ?>mvc/vista/imagenes/delete.png" width="16" height="16" alt="Eliminar" onclick="if(confirm(\'Realmente desea eliminar este detalle?\')){eliminarFila(' + oId + ');}"/>';
        strHtml7 += '<input type="hidden" id="hdnIdCampos_' + oId + '" name="hdnIdCampos[]" value="' + oId + '" /> <input type="hidden" id="hdnganancia_' + oId + '" name="hdnganancia_' + oId + '" value="' + gan + '"/> </td>';

        var strHtmlTr = "<tr id='rowDetalle_" + oId + "'></tr>";

        var strHtmlFinal = strHtml5 + strHtml1 + strHtml2 + strHtml3 + strHtml4 + strHtml6 + strHtml7;
        //tambien se puede agregar todo el HTML de una sola vez.
        //var strHtmlTr = "<tr id='rowDetalle_" + oId + "'>" + strHtml1 + strHtml2 + strHtml3 + strHtml4 + strHtml5 + strHtml6 +"</tr>";
        $("#tbDetalle").append(strHtmlTr);
        //si se agrega el HTML de una sola vez se debe comentar la linea siguiente.
        $("#rowDetalle_" + oId).html(strHtmlFinal);

        total = 0;
        total = parseInt($('#stotal5').val()) + parseInt($('#hdntotal_' + oId).val());
        $('#stotal5').val(total);

        sumartotal();
        limpiar();
        }else{
            alert("Verifique que los campos(EPS,Contrato,Codigo,Cantidad,autorización, profesional) no estén vacios")
        }

        return false;
    }
    function eliminarFila(oId) {

        total = 0;
        total = parseInt($('#stotal5').val()) - parseInt($('#hdntotal_' + oId).val());
        $('#stotal5').val(total);
        sumartotal();

        $("#rowDetalle_" + oId).remove();
        return false;
    }

    function cancelar() {
        $("#tbDetalle").html("");
        return false;
    }
    //__________________________________________________________________________traer parametros y numero de factura
</script>




<script type="text/javascript"> /// funciones operaciones matematicas



    function sumartotal()
    {

        var stotal1 = 0;
        stotal1 = document.getElementById('stotal5').value;
       
       //calculo copago y descuento
     
        var v_copago = document.getElementById('copago_1').value;
        var vdes = document.getElementById('desvalor').value;

//copago

           var copago =(stotal1)-(v_copago);
            var de = (vdes / 100);
            var des2 = (stotal1) * (de);

            // agregar datos a los campos
            document.getElementById('copago_v').value = copago;
            document.getElementById('vdescuento').value = des2;
            // valor total
            document.getElementById('valort').value = parseFloat(stotal1) - parseFloat(v_copago) - parseFloat(des2);
            document.getElementById('consulta').value = parseFloat(stotal1) - parseFloat(v_copago) - parseFloat(des2);


    }

// cambiar valores copago y descuento
function valida_numero(objeto){
if (isNaN(objeto.value))
	{
	alert("Error valor no numerico");
	objeto.value="0";
	objeto.focus();
	return false;
	}
	else
	{
		cambiar_valor();
                //alert( document.getElementById('copago_1').value)
                return true;

	}
}

function valida_numero2(objeto){
if (isNaN(objeto.value))
	{
	alert("Error valor no numerico");
	objeto.value="0";
	objeto.focus();
	return false;
	}
	else
	{
		cambiar_valor2();
               // alert(document.getElementById('desvalor').value)
                return true;

	}
}

        function cambiar_valor() {

             var copago_1 = document.getElementById('copago_v2').value;
                if(copago_1==""){
                    document.getElementById('copago_1').value =0;
                }else{
                    document.getElementById('copago_1').value = copago_1;
                }

                    
        }

        function cambiar_valor2(){

                   var descue = document.getElementById('copago_v3').value;
                    if(descue==""){
                    document.getElementById('desvalor').value =0;
                   }else{
                    document.getElementById('desvalor').value = descue;
                    }
          }

    //____________________________________________________________________________funcion ajax y autocompletar

    var IE = navigator.appName.toLowerCase().indexOf("microsoft") > -1;
    var Mozilla = navigator.appName.toLowerCase().indexOf("netscape") > -1;

    var textoAnt = "";
    var posicionListaFilling = 0;




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

    // funcion para buscar con el codigo y llenar todos los demas campos

    function calcular2() {

        var can = document.getElementById('cantidad').value;
        var vu = document.getElementById('valoru').value;

        var to = (can * vu);

        document.getElementById('total1').value = to;

    }






</script>



<script type="text/javascript">




    function limpiar()
    {

        document.getElementById('id_cup_1').value = "";
        document.getElementById('id_cup_2').value = 0;
        document.getElementById('cantidad').value = 0;
        document.getElementById('valoru').value = 0;
        document.getElementById('autorizacion').value = "";
         document.getElementById('autorizacion_2').value = 0;
        document.getElementById('total1').value = 0;
        document.getElementById('fechag_1x').value = "";

    }

    function limpiartodo() {

         window.reload();
    }



    function abrirVentana(url) {
        //window.open(url, "nuevo", "directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=400, height=400");

        // limpiartodo();

    }


    function pasar_descripcion_contrato() {

        var id_contrato = document.getElementById('id_contrato').value;
        //var id_contrato =$('#id_contrato').val
        var parameters = "opcion=16&id_contrato=" + id_contrato;

        // alert(parameters);

        $.ajax({
            data: parameters,
            dataType: "json",
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php",
            success: function(data) {
                if (data.bool) {
                    $('#descripcion_c').val(data.descripcion_c);
                    $('#desvalor').val(data.porcentaje);

                    reload_cups();
                }
                else {
                    alert("seleccione un contrato valido")
                    limpiar()
                }
            }, error: function(request, error) {

            }
        });
    }


    function reload_contrato() {


        var id_eps = $('#id_eps').val();

        var id_eps2 = $('#id_eps_2').val();
        var parameters = "opcion=15&id_eps=" + id_eps;
        divplatform_encoded25 = document.getElementById('contrato_div');
        //  alert(id_eps2);

        $.ajax({
            data: parameters,
            dataType: "json",
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php",
            success: function(data) {
                if (data.bool) {
                    var datos = (data.codigo);
                    divplatform_encoded25.innerHTML = "";
                    divplatform_encoded25.innerHTML = datos;


                } else {
                    divplatform_encoded25.innerHTML = "";
                    alert("No hay registro de contratos")
                }


            }, error: function(request, error) {

            }
        });
    }

    /*----------------------------------------------*/
    var comodin = null;
    function reload_cups() {

        var id_contrato = $('#id_contrato').val();
        var origen = $('#origen').val();

        var parameters = "opcion=17&id_contrato=" + id_contrato + "&origen=" + origen;
        divplatform_encoded = document.getElementById('cups_div');

        $.ajax({
            data: parameters,
            dataType: "",
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php",
            success: function(data) {
                comodin = data;
                if (data.trim()!=='') {
                    divplatform_encoded.innerHTML = data;
                } else {
                    divplatform_encoded.innerHTML = "";
                    alert("No hay registro de cups asociados al contrato")
                }

            }, error: function(request, error) {

            }
        });
    }

     function reload_cups_3() {

        alert("aaa");

        var parameters = "opcion=18";
        divplatform_encoded = document.getElementById('cups_div');

        $.ajax({
            data: parameters,
            dataType: "",
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php",
            success: function(data) {
                comodin = data;
                if (data.trim()!=='') {
                    divplatform_encoded.innerHTML = data;
                } else {
                    divplatform_encoded.innerHTML = "";
                    alert("No hay registro de cups asociados al contrato")
                }

            }, error: function(request, error) {

            }
        });
    }


   function reload_cups_2() {

        var origen = $('#origen').val();

        var parameters = "opcion=17&id_contrato=0" + "&origen=" + origen;
        divplatform_encoded = document.getElementById('cups_div');

        $.ajax({
            data: parameters,
            dataType: "",
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php",
            success: function(data) {
                comodin = data;
                if (data.trim()!=='') {
                    divplatform_encoded.innerHTML = data;
                } else {
                    divplatform_encoded.innerHTML = "";
                    alert("No hay registro de cups asociados al contrato")
                }

            }, error: function(request, error) {

            }
        });
    }




    function traer_valor() {


        var codigo_cup = document.getElementById('id_cup_1').value;
        var id_contrato = document.getElementById('id_contrato').value;
        var parameters = "opcion=13&id_cup=" + codigo_cup + "&id_contrato=" + id_contrato;

        //alert(parameters);

        $.ajax({
            data: parameters,
            dataType: "json",
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php",
            success: function(data) {
                if (data.bool) {
                    $('#valoru').val(data.val);
                    $('#descripcion').val(data.nombre);
                    $('#id_cup_2').val(data.id_cup);
                }
                else {
                    alert("seleccione un codigo valido")
                    limpiar()
                }
            }, error: function(request, error) {

            }
        });
    }

    function traer_valor2() {


        var codigo_cup = document.getElementById('id_cup_2').value;
        var id_contrato = document.getElementById('id_contrato').value;
        var parameters = "opcion=14&id_cup=" + codigo_cup + "&id_contrato=" + id_contrato;

        //alert(parameters);

        $.ajax({
            data: parameters,
            dataType: "json",
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php",
            success: function(data) {
                if (data.bool) {
                    $('#valoru').val(data.val);
                    $('#descripcion').val(data.nombre);
                    $('#id_cup_1').val(data.codigo_cup);

                }
                else {
                    alert("seleccione un codigo valido")
                    limpiar()
                }
            }, error: function(request, error) {

            }
        });
    }

function lookup(inputString) {

   //

     var id_contrato = $('#id_contrato').val();
    //    var origen = $('#origen').val();

      //  var parameters = "opcion=17&id_contrato=" + id_contrato + "&origen=" + origen;

		if(inputString.length == 0) {
			// Hide the suggestion box.
			$('#suggestions').hide();
		} else {

              var parameters = "opcion=898&queryString="+inputString+"&id_contrato=" + id_contrato;

                //alert(parameters);

                         $.ajax({
                            data: parameters,
                            dataType: "",
                            type: "POST",
                            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php",
                            success: function(data) {

                                 if(data.length >0) {
                                        $('#suggestions').show();
                                        $('#autoSuggestionsList').html(data);
                                }

                            }, error: function(request, error) {

                            }
                        });

		}
	} // lookup



	function fill(object) {
		array_object = (object.id).split('&');



               $('#id_cup_2').val(array_object[0]);
		$('#fechag_1x').val(array_object[1]);
		setTimeout("$('#suggestions').hide();", 200);
                
                    traer_valor2();
            }



</script>


<style type="text/css">



</style>

<style type="text/css">
	


	.inp {
		font-family: Arial;
		color: #008585;
		font-size: 8pt;
		border: 1px solid #008585;
		padding-left: 3px;
		text-align:left;

	}




	div.fill {
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
                text-align:left;
	}


</style>

<style type="text/css">


	.suggestionsBox {
		position: relative;
		left: 30px;
		margin: 10px 0px 0px 0px;
		width: 500px;
                height: 300px;
                font-size: 12px;
		background-color: #212427;
		-moz-border-radius: 7px;
		-webkit-border-radius: 7px;
		border: 2px solid #000;
		color: #fff;
                overflow: scroll;
                text-align:left;


	}

	.suggestionList {
		margin: 0px;
		padding: 0px;
	}

	.suggestionList li {

		margin: 0px 0px 3px 0px;
		padding: 3px;
		cursor: pointer;
	}

	.suggestionList li:hover {
		background-color: #659CD8;
	}

</style>


</head>



<form id="id_factura_formulario" action="?option=detalle_factura&origen=guardar" method="post">
    <input type="hidden" id="ids" name="ids" />
    <p>&nbsp;</p>

    <input type="hidden" id="origen" name="origen"  value="<?php echo $_REQUEST['origen']; ?>" />
     <input type="hidden" id="origen33" name="origen33"  value="<?php echo $_REQUEST['origen33']; ?>" />

         <input type="hidden" id="id_cita_x" name="id_cita_x"  value="<?php echo $_REQUEST['id_cita']; ?>" />
   


    <table  height="52" border="1" align="center"   cellpadding="0" cellspacing="0">
        <tr>
            <td>EPS</td>
            <td><select id='id_eps' class="input_txt " name='id_eps' onchange="reload_contrato();">
                    <option value='0'>Seleccione</option>
                    <?php
                    //traer lista eps
                    $ep=$id_eps;
                    $ret = '';
                     echo $sqlr = "Select * from eps where id_eps=$ep";
                    $resultr = $conexion->EjecutarQuery($sqlr);

                    while ($rowr = mysql_fetch_array($resultr)) {
                        $nombre_eps = $rowr['nombre'];
                        $idps=$rowr['id_eps'];
                       // if ($idps == $ep)
                         // $sel = "selected='selected'";

                        echo "<option value='" . $rowr['id_eps'] . "' $sel>" . $nombre_eps . "</option>";
                        $sel = "";
                    }
                    ?>
                </select></td>
            <td height="22">CONTRATO</td>
            <td><div id="contrato_div"></div></td>
        </tr>
        <tr>

            <td width="152" height="22">DESCRIPCI&Oacute;N</td>
            <td width="255" colspan="4" ><textarea name="descripcion_c" cols="30"  rows="2" readonly="true" id="descripcion_c"></textarea></td>
        </tr>

          <tr>
            <td width="152" height="22">PROFESIONAL:</td>
            <td width="255" colspan="4" >

                <select id='id_medico' class="input_txt " name='id_medico'>
                    <option value='0'>Seleccione</option>
                    <?php
               
                   $origen_xx= $_REQUEST['id_cita'];
                    if($origen_xx==0){
                    $sqlrm = "Select * from usuario where id_rol=3";
                    $resultrm = $conexion->EjecutarQuery($sqlrm);

                    //echo '<select id="id_medico" class="input_txt" name="id_medico"><option value="0">Seleccione</option>';

                            while ($rowrm = mysql_fetch_array($resultrm)) {
                               // $nombre_med = $rowrm['nombre'];
                             $nombre_med = $rowrm['nombre']." ".$rowrm['apellido'];
                               // if ($idps == $ep)
                                 // $sel = "selected='selected'";

                                echo "<option value='" . $rowrm['id_usuario'] . "'>" . $nombre_med . "</option>";
                               // $sel = "";
                              }
                             // echo "</select>";
                    }
                    ?>
                </select></td>
        </tr>
    </table>
    <p>
      <input name="idfactura" type="hidden" id="idfactura"  value="<?php echo $id_factura; ?>"/>
      
      
      <br />
      <br />
      
      <?php
// imprimir tabla de cups de cita
    echo $tabla_cups;
    ?>
    </p>
    <table width="340" border="1" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="133">Valor copago</td>
        <td width="168"><input name="copago_v2" type="text" id="copago_v2" value="0" onblur="valida_numero(this)" /></td>
      </tr>
      <tr>
        <td>Valor Descuento %</td>
        <td><input name="copago_v3" type="text" id="copago_v3"  value="0" onblur="valida_numero2(this)" /></td>
      </tr>
	   <tr>
	  <td>Tipo de factura</td>
	  <td><select id='id_tipo' class="input_txt " name='id_tipo' >
                   
					<option value='0'selected>Normal</option>
					<option value='1'>Particular</option>
                   
                </select></td>
	  </tr>
    </table>
    <p>&nbsp;</p>
  <input  name="descripcion" type="hidden" id="descripcion" class="input_txt " />


  
<table width="673" border="1" align="center"  cellpadding="0" cellspacing="0" >
        <tr>
            <td width="94">FECHA</td>
            <td width="94">AUTORIZACION</td>
            <td width="94">CODIGO</td>
            <td width="174">SERVICIO</td>
            <td width="86">VALOR</td>
            <td width="96">CANTIDAD</td>
            <td width="103">TOTAL</td>
        </tr>
        <tr>
            

            <td>
                <input  name="fecha_codigo" type="text" id="fecha_codigo" size="7px"  value="<?php echo date("y-m-d") ?>" />            </td>
            <td><input  name="autorizacion" type="text" id="autorizacion" class="input_txt " /></td>
          <td ><input type="text" size="7px" name="id_cup_1" id="id_cup_1"  onchange="traer_valor();"/></td>
            <td> 
                     <input name="fechag_1x" type="text" id="fechag_1x" class="input_txt" onBlur="fill();" onchange='' onKeyUp="lookup(this.value);" value="" size="25" onDblClick="limpiar();"/>

                     <div class="suggestionsBox" id="div" style="display: none;" style="width:100px; height:115px; overflow: scroll;"> <img src="<?php echo Utils::$http_ruta ?>mvc/vista/imagenes/upArrow.png" style="position: relative; top: -12px; left: 30px;" alt="upArrow" />
                     <div class="suggestionList" id="div2" style="width:100px; height:115px; overflow: scroll;"> &nbsp; </div></div>

   </td>
            <td><div align="right">
                    <input name="valoru" type="text" id="valoru" value="0" size="15" />
                </div></td>
            <td><div align="right">
                    <input name="cantidad" type="text" id="cantidad" value="0" size="15" onchange="calcular2();"/>
                </div></td>
            <td><div align="right">
                    <input name="total1" type="text" id="total1" value="0" size="15" />
                </div></td>
        </tr>

        <?php


       //$id_eps= $_REQUEST['id_eps'];
       // echo $id_eps."ssssssssss";

        if($id_eps==53){

        ?>
            <tr>
                <td>Autorizacion extra:</td>
                <td colspan="6"><input  name="autorizacion_2" type="text" id="autorizacion_2" class="input_txt " value="0"/></td>
             </tr>

        <?php
        } else if($id_eps==55){
        ?>

            <tr>
                <td>Autorizacion extra:</td>
                <td colspan="6"><input  name="autorizacion_2" type="text" id="autorizacion_2" class="input_txt " value="0"/></td>
             </tr>

        <?php
        } else if($id_eps==54){
        ?>
            <tr>
                <td>Autorizacion extra:</td>
                <td colspan="6"><input  name="autorizacion_2" type="text" id="autorizacion_2" class="input_txt " value="0"/></td>
             </tr>

        <?php
        }
        ?>

    </table>

 <input type="hidden" id="id_cup_2" name="id_cup_2"  value="" />

                                <div class="suggestionsBox" id="suggestions" style="display: none;">
				<div align="right"><img src="<?php echo Utils::$http_ruta ?>mvc/vista/imagenes/upArrow.png" style="position: relative; top: -12px; left: 30px;" alt="upArrow" />		  </div>
				<div class="suggestionList" id="autoSuggestionsList"></div>
		                </div>


<input type="hidden" id="ganancia" name="ganancia" value="0" />
    <input type="hidden" id="ivap" name="ivap" value="0" />
    <input type="hidden" id="utilidad" name="utilidad" value="0" />
    <div class="button_div">

        <input type="hidden" id="num_campos" name="num_campos" value="0" />
        <input type="hidden" id="cant_campos" name="cant_campos" value="0" />
        <input  type="button" id="borrarcajas" name="borrarcajas" value="Limpiar" class="buttons_CANCEL" onClick="limpiar();" />
        <input type="button" id="btnAgregar" name="btnAgregar" value="Agregar Producto"  class="buttons_aplicar" onClick="agregarFila(document.getElementById('cant_campos'));"/>
        <br />
        <br />
    </div>



    <div class="clear"></div>

    <div id="form3" class="form-horiz">

        <table width="862" height="22" border="1" align="center" class="listado" id="tblDetalle" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td width="9%">FECHA</td>
                    <td width="9%">CODIGO</td>
                    <td width="31%">ITEM</td>
                    <td width="14%">CANTIDAD</td>
                    <td width="17%">VALOR/U</td>                    
                    <td width="10%">TOTAL</td>
                    <td >Accion</td>
                </tr>
            </thead>
            <tbody id="tbDetalle">
            </tbody>
        </table>
    </div>

    <table width="863" border="1" align="center">
        <tr>
            <td colspan="5" rowspan="4" >
                <input name="valorabono" type="hidden" id="valorabono" value="0" />            </td>
            <td width="147">SUBTOTAL</td>
            <td width="122" ><input name="stotal5" type="text" id="stotal5" value="0" readonly="true" /></td>
        </tr>
        <tr>
            <td>-Copago <?php echo $copago; ?></td>
      <td ><input name="copago_v" type="text" id="copago_v" readonly="true" value="0" />
        <input type="hidden" id="copago_1" name="copago_1" value="0" />                 </td>
        </tr>
        <tr>
            <td>-DTO <?php echo $dsto; ?>% </td>
            <td >
                <input name="vdescuento" type="text" id="vdescuento" value="0" readonly="true" />
                <input type="hidden" id="desvalor" name="desvalor" value="<?php echo $dsto; ?>" />
                <input type="hidden" id="comision2" name="comision2" value="<?php echo $comision; ?>" />
              <input type="hidden" id="consulta" name="consulta" value="<?php echo $valor_consulta; ?>" /></td>
        </tr>

        <tr>
            <td height="20">TOTAL NETO FACTURA </td>
            <td >
                <input name="valort" type="text" id="valort" value="0" readonly="true" />            </td>
        </tr>
    </table>

<CENTER><BR /><BR />
        <button id="guardar">Guardar</button>
        <button id="cancelar" >Cancelar</button>

    </CENTER>

</form>


