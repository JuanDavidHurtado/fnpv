<?php
$now = Date('Y-m-d');


$pagina = @$_REQUEST["pagina"];
$registros = 18;

if (!$pagina) {
    $inicio = 0;
    $pagina = 1;
} else {
    $inicio = ($pagina - 1) * $registros;
}
?>
<style>

    #content_welcome{
        min-height: 750px;
        height: auto;
    }

    #crear_entrada {
        display: none;
    }

</style>

<script>

    $(function() {
        
   

        $("#buscar").click(function() {
            window.location.replace('?option=balance_i&search&term=' + $("#term").val());
        });


    });

</script>

<div id="content_welcome" style="overflow-y:auto;" class="ui-tabs ui-widget ui-widget-content ui-corner-all">

    <h2>Balance General</h2>   

    <?php
    $where = " where true";
    $term = str_replace(" ", "%", $_REQUEST['term']);

    $term_link = "";
    if ($term != '') {
        $term = '%' . $term . '%';
        $where = " where ( a.nombre like '$term' or a.codigo like '$term' or a.descripcion like '$term' ) ";
        $term_link = "term=" . $_REQUEST['term'];
    }
    
    ?>
    <form id="fbuscar" action="?option=balance_i&search" method="post" onsubmit="return false;">
        <input type="text" name="term" id="term" placeholder="Articulo a buscar ..." class="input_txt" value='<?php echo @$_REQUEST['term']; ?>' />
        <button id="buscar">Buscar</button>
        <?php
        if (@$_REQUEST['term'] != '') {
            ?>
            <a href="?option=balance_i">Cancelar</a>
            <?php
        }
        ?>        
    </form>
    <br>
    <?php echo @$mes_lis; ?>

    <?php
    $sql = "SELECT a.* FROM articulo as a $where";
    $resultados = $conexion->EjecutarQuery($sql);
    $total_registros = mysql_num_rows($resultados);
    $sql_search = "SELECT a.* FROM articulo as a 
                   $where ORDER BY a.nombre asc LIMIT $inicio, $registros";
    
    $resultados = $conexion->EjecutarQuery($sql_search);
    $total_paginas = ceil($total_registros / $registros);

    echo "<div id='content_result'>";
    echo "<table width='100%' border='0' cellpadding='0' cellspacing='0' class='data'>";
    echo "<tbody><tr class='t_head'>
                        <th valign='center'>Codigo</th>
                        <th valign='center'>Articulo</th>
                        <th valign='center'>Descripcion</th>                        
                        <th valign='center'>Estado</th>
                        <th valign='center'>Entradas</th>       
                        <th valign='center'>Salidas</th>       
                        <th valign='center'>Total</th>
                        <th valign='center'>Detalle</th>
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

            $sql_entradas = "Select sum(cantidad) as valor from articulo_entrada as valor where id_articulo='{$row['id']}'";
            $result_entradas = $conexion->EjecutarQuery($sql_entradas);
            $row_entrada = mysql_fetch_array($result_entradas);
            $entradas = $row_entrada['valor'];
            
            $sql_salidas = "Select sum(cantidad) as valor from articulo_salida as valor where id_articulo='{$row['id']}'";
            $result_salidas = $conexion->EjecutarQuery($sql_salidas);
            $row_salida = mysql_fetch_array($result_salidas);
            $salidas = $row_salida['valor'];
            
            $entradas = $entradas==''?0:$entradas;
            $salidas = $salidas==''?0:$salidas;
            
            $total = $entradas - $salidas;
            

            $estado = $row['estado'] == 0 ? 'Activo' : 'Inactivo';

            echo "<tr class='$style_file_table'>
                    <td align='right' >" . $row['codigo'] . "</td>
                    <td align='right' >" . $row['nombre'] . "</td>
                    <td align='right' >" . $row['descripcion'] . " " . $row['apellido'] . "</td>                                
                    <td align='right' >{$estado}</td>
                    <td align='right' >{$entradas}</td>
                    <td align='right' >{$salidas}</td>
                    <td align='right' >{$total}</td>
                    <td align='right' ><a href='#{$row['id']}'>Detalle</a></td>
                </tr>";
        }
    } else {
        echo "<font color='darkgray'>(sin resultados)</font>";
    }
    echo "</table>";
    echo "</div>";
    ?><a href='#' onClick='imprSelec("content_result")' >Imprimir</a><?php
    //mysql_free_result($resultados);				




    if ($total_registros) {

        echo "<center>";

        if (($pagina - 1) > 0) {
            echo "<a href='?option=balance_i&pagina=" . ($pagina - 1) . "&$term_link'>< Anterior</a> ";
        }

        for ($i = 1; $i <= $total_paginas; $i++) {
            if ($pagina == $i)
                echo "<b>" . $pagina . "</b> ";
            else
                echo "<a href='?option=balance_i&pagina=$i&$term_link'>$i</a> ";
        }

        if (($pagina + 1) <= $total_paginas) {
            echo " <a href='?option=balance_i&pagina=" . ($pagina + 1) . "&$term_link'>Siguiente ></a>";
        }

        echo "</center>";
    }
    ?>


</div>