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

if (isset($_REQUEST['delete'])) {

    $sql = 'Delete from medicamento where id_fr_medicamentos = ' . $_REQUEST['acc'];
    $conexion->EjecurtarDelete($sql);

    $mes_lis = "(Registro eliminado)";
    $mes_lis = '<div class="msg ui-state-error ui-corner-all" style="padding: 0 .7em;">
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
		Registro eliminado!.</div>
            </p>';
}
?>

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
                    window.location.replace("?option=listar_formulas&delete&acc=" + id_delete);
                },
                Cancelar: function() {
                    $(this).dialog("close");
                }
            }
        });


    });

</script>
<style>


  #content_welcome2{
       font-size: 15px;
        height: 500px;
        width: 600px;
    }


</style>

<div id="content_welcome2"  class="ui-tabs ui-widget ui-widget-content ui-corner-all">


     <div class="content_welcome2" align="center">
           LISTADO DE FORMULAS MEDICAS DEL PACIENTE  <?php echo @$msg; ?>
        </div>
<?php
// para buscarrrrr ______
$where = " where id_usuario='".$_REQUEST['identificacion']."' and estado=0";
$term = str_replace(" ", "%", $_REQUEST['term']);

$term_link = "";
if ($term != '') {
    $term = '%' . $term . '%';
    $where = " and (fecha like '$term' ) ";
    $term_link = "term=" . $_REQUEST['term'];
}

?>
    <form action="?option=listar_formulas&search" method="post">

    <?php
    if (@$_REQUEST['term'] != '') {
        ?>
            <a href="?option=listar_formulas">Cancelar</a>
        <?php
    }
    ?>
    </form>
    <br>
        <?php echo @$mes_lis; ?>

        <?php


    $id_pacient=$_REQUEST['identificacion'];
    $sql = "Select * from paciente where identificacion = " . $_REQUEST['identificacion'];
    $result = $conexion->EjecutarQuery($sql);
    $row2 = mysql_fetch_array($result);
    $id_histo_pac=$row2['historia'];


     $cad_1="Select * from valoracion_inicial where historia = " . $id_histo_pac;
        $resultados = $conexion->EjecutarQuery($cad_1);
        $total_registros = mysql_num_rows($resultados);

        // paginar res
        $sql_search = $cad_1." ORDER BY fecha desc LIMIT $inicio, $registros";
        $resultados = $conexion->EjecutarQuery($sql_search);        
        $total_paginas = ceil($total_registros / $registros);



        echo "<div id='content_result' align='center'>";
        echo "<table  border='0' cellpadding='0' cellspacing='0' class='data'>";
        echo "<tbody><tr class='t_head'>
                        <th valign='center'>FECHA</th>
                        <th valign='center'>PACIENTE</th>
                        <th valign='center'>Ver</th>
                      
			
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



                     $id_inicial=$row['id_vinicial'];
                     $id_reinicial=$row['id_revaloracion'];
                     $id_cita=$row['id_cita'];
                     $id_usuario=$row['id_usuario'];
                     $id_historia=$row['historia'];


                echo "<tr class='$style_file_table'>
                                <td align='right'>" . $row['fecha'] . "</td>
                               
                                <td align='right'>" .$id_pacient . "</td>

                                 <td align='center'><a href='?option=mostrar_formulas&identificacion=".$_REQUEST['identificacion']."&id_inicial=".$id_inicial."&id_usuario=".$id_usuario."'>Ver</a></td>
				
                        </tr>";


            }




        } else {
            echo "<font color='darkgray'>(sin resultados)</font>";
        }
        echo "</table>";
        echo "</div><BR />";
        ?><?php
    //mysql_free_result($resultados);




    if ($total_registros) {

        echo "<center>";

        if (($pagina - 1) > 0) {
            echo "<a href='?option=listar_formulas&pagina=" . ($pagina - 1) . "&$term_link'>< Anterior</a> ";
        }

        for ($i = 1; $i <= $total_paginas; $i++) {
            if ($pagina == $i)
                echo "<b>" . $pagina . "</b> ";
            else
                echo "<a href='?option=listar_formulas&pagina=$i&$term_link'>$i</a> ";
        }

        if (($pagina + 1) <= $total_paginas) {
            echo " <a href='?option=listar_formulas&pagina=" . ($pagina + 1) . "&$term_link'>Siguiente ></a>";
        }

        echo "</center>";
    }
    ?>

<a href='#' onClick='imprSelec("content_welcome2")' >Imprimir</a>
</div>

<div id="dialog-eliminar" title="Eliminar Contratación">


    <p>

        Desea eliminar el registro ?

    </p>


</div>