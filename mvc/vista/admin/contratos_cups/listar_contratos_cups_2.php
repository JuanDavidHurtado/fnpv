<?php
@$mes_lis = '';

$pagina = @$_REQUEST["pagina"];
$registros = 18;

if (!$pagina) {
    $inicio = 0;
    $pagina = 1;
} else {
    $inicio = ($pagina - 1) * $registros;
}

$identificacion = @$_REQUEST['identificacion'];



    $sqlr2 = "Select * from contrato where id_contrato='" . $identificacion . "' ";
                $resultr2 = $conexion->EjecutarQuery($sqlr2);
                $rowr2 = mysql_fetch_array($resultr2);
                $nombre_contrato = $rowr2['nombre_contrato'];


if (isset($_REQUEST['delete'])) {

    $sql = 'Delete from contratacion where id_contratacion = ' . $_REQUEST['acc'];
    $conexion->EjecurtarDelete($sql);

    $mes_lis = "(Registro eliminado)";
    $mes_lis = '<div class="msg ui-state-error ui-corner-all" style="padding: 0 .7em;">
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
		Registro eliminado!.</div>
            </p>';
}
?>
<style>


</style>
<script>
    var id_delete = '';
    function eliminar(id) {
        id_delete = id;        
        $("#dialog-eliminar").dialog('open');
    }

    $(function() {

        $("#dialog-eliminar").dialog({
            resizable: false,
            modal: true,
            autoOpen: false,
            show: "blind",
            hide: "explode",
            width: 350,
            height: 200,
            close: function() {

            },
            buttons: {
                Aceptar: function() {
                    //window.location.replace("?option=listar_contratos_cups&delete&identificacion=" + <?php echo $identificacion; ?>)+"&acc"+id_delete;
             
                   window.location.replace("?option=listar_contratos_cups&delete&acc=" + id_delete);
                },
                Cancelar: function() {
                    $(this).dialog("close");
                }
            }
        });


    });

</script>

<div id="content_welcome"  class="ui-tabs ui-widget ui-widget-content ui-corner-all" align="center">
    <h2>Lista de Cubs </h2>


<?php
echo "Contrato Numero: ".$nombre_contrato;
?>
  
    <br />
    <br />
        <?php echo @$mes_lis; ?>

        <?php
        $resultados = $conexion->EjecutarQuery("SELECT * FROM contratacion where id_contrato='$identificacion'");
        $total_registros = mysql_num_rows($resultados);
        $sql_search = "SELECT * FROM contratacion where  id_contrato='$identificacion'   LIMIT $inicio, $registros";
        $resultados = $conexion->EjecutarQuery($sql_search);
        $total_paginas = ceil($total_registros / $registros);

        echo "<div id='content_result'>";
        echo "<table  border='0' cellpadding='0' cellspacing='0' class='data'>";
        echo "<tbody><tr class='t_head'>
                       
                                             
                        <th valign='center'>Cup</th>
                        <th valign='center'>Tarifa</th>
                                      
                       
                        <th width='50px'>Editar</th>
			<th width='50px'>Eliminar</th>
                      </tr></tbody>";
        $contador = 0;
        if ($total_registros) {
            $bool_style = true;
            while ($row = mysql_fetch_array($resultados)) {

                if ($bool_style) {
                    $style_file_table = "row1";
                } else {
                    $style_file_table = "row2";
                }
                $bool_style = !$bool_style;


                //consulta para el cup
                $sqlr = "Select * from cups where id_cups='" . $row['id_cup'] . "' ";
                $resultr = $conexion->EjecutarQuery($sqlr);
                $rowr = mysql_fetch_array($resultr);
                $nombre_cup = $rowr['nombre'];

               
                $id_contra=$row['id_contratacion'];
                
                echo "<tr class='$style_file_table'>

                                <td align='right'>" . $nombre_cup . "</td>
                                <td align='right'>" . $row['tarifa'] . "</td>
                          

                                <td align='center'><a href='?option=editar_cups&id_contratacion=" . $row['id_contratacion'] . "'><img src='" . Utils::$http_ruta . "mvc/vista/imagenes/icon_edit.png' width='18px' height='18px' /></a></td>
				<td align='center'><a href='#' onclick='eliminar(".$row['id_contratacion'] .")'><img src='" . Utils::$http_ruta . "mvc/vista/imagenes/icon_delete.png' width='18px' height='18px' /></a></td>
                            </tr>";

                ///" . $row['id_contratacion'] . " \''.$row['id_contratacion'] .'\'
            }

            


        } else {
            echo "<font color='darkgray'>(sin resultados)</font>";
        }
        echo "</table>";
        echo "</div> <br />";
        ?><a href='#' onClick='imprSelec("content_result")' >Imprimir</a><?php
    //mysql_free_result($resultados);




    if ($total_registros) {

        echo "<center>";

        if (($pagina - 1) > 0) {
            echo "<a href='?option=listar_contratos_cups&pagina=" . ($pagina - 1) . "&$term_link'>< Anterior</a> ";
        }

        for ($i = 1; $i <= $total_paginas; $i++) {
            if ($pagina == $i)
                echo "<b>" . $pagina . "</b> ";
            else
                echo "<a href='?option=listar_contratos_cups&pagina=$i&$term_link'>$i</a> ";
        }

        if (($pagina + 1) <= $total_paginas) {
            echo " <a href='?option=listar_contratos_cups&pagina=" . ($pagina + 1) . "&$term_link'>Siguiente ></a>";
        }

        echo "</center>";
    }
    ?>


</div>

<div id="dialog-eliminar" title="Eliminar Contratación">


    <p>

        Desea eliminar el registro ?

    </p>


</div>