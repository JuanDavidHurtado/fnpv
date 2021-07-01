<?php
$array_id_servicios = array();
$identificacion = @$_REQUEST['identificacion'];

$content = 'new';


if (@$_REQUEST['acc'] == 'new') {

    $msg = "(Registro exitoso)";
    $msg = '<div class="msg ui-state-highlight ui-corner-all" style="padding: 0 .7em;">
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
		Registro exitoso!.</div>
            </p>';
    $date = Date('Y-m-d');
    $sql = "INSERT INTO cups (
                `id_cups`,
                `cups`,
                `nombre`
                ) VALUES (
                NULL,              
                '" . $_REQUEST['cups'] . "' ,
                '" . $_REQUEST['nombre'] . "' ) ";
    $result = $conexion->EjecutarQuery(($sql));

    $sql_max = 'select max(id_cups) as id from cups';
    $result_max = $conexion->EjecutarQuery($sql_max);
    $row_max = mysql_fetch_array($result_max);
    @$_REQUEST['id_cups'] = $row_max['id'];


    // @$_REQUEST['id_eps'] = $row_max['id'];
} else if (@$_REQUEST['acc'] == 'edit') {

    $msg = "(Cambios guardados)";
    $msg = '<div class="msg ui-state-highlight ui-corner-all" style="padding: 0 .7em;">
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
		Cambios guardados!.</div>
            </p>';

    $sql = "UPDATE cups set
                `cups` = '" . $_REQUEST['cups'] . "' ,
                `nombre` = '" . $_REQUEST['nombre'] . "' 
                WHERE  `id_cups` = '" . $_REQUEST['id_cups'] . "' ;";

    $result = $conexion->EjecutarQuery(($sql));
}

//echo $sql;


if (@$_REQUEST['id_cups'] != '') {
    //echo '<h1>entro</h1>';
    //$content = 'edit';
    $sql2 = "select * from cups
            where id_cups='" . @$_REQUEST['id_cups'] . "' ";
    $result2 = $conexion->EjecutarQuery($sql2);
    $row = mysql_fetch_array($result2);


    if ($row) {


        $content = 'edit';
        $id_cups = $row['id_cups'];
        $cups = $row['cups'];
        $nombre = $row['nombre'];
    }
}
?>


<?php echo @$msg ?>

<script>



    function mostrar() {
        alert(document.getElementById('lista_pregunta').value)
    }


    function style_() {
        $("#ui-datepicker-div").css('z-index', '100000');
    }

    $(function() {


       


<?php
if ($content == 'edit') {
    echo 'validate_tipo_ident();';
}
?>


    });
</script>



<form id="form_contratacion" name="form_cups" action="<?php echo @$action_form_contratacion ?>#cups" method="post">
    <input type="hidden" name="acc" id="acc" value="<?php echo $content; ?>" />
    <input type="hidden" name="id_cups" id="acc" value="<?php echo @$id_cups; ?>" />



    <table cellspacing="0" cellpadding="0" border="1">
       
        <tr height="19">
            <td colspan="4" height="19"><div align="center">CUPS</div></td>
        </tr>
        <tr height="19">
            <td width="163" height="19">Codigo</td>
            <td width="189"><input type="text" class="input_txt valid" id="cups" name="cups" value="<?php echo @$cups; ?>" /></td>
            <td width="109">Nombre Cup</td>
            <td width="188"><input type="text" class="input_txt valid" id="nombre" name="nombre" value="<?php echo @$nombre; ?>" /></td>
        </tr>

        </table>



    <button id="guardar">Guardar</button>
</form>
